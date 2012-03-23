<?php

/**
* 
*/
class OrderProxy
{
	
	function __construct()
	{
		
	}
	
	
	public static function insertNew($data){

	}
	
	public static function removeContactTaxonomyTerms($orderID){
		// When we create the custom taxonomies for tc_contact posts,
		// we also assign them to tc_order posts just so we can get 
		// the taxonomy metaboxes on the order screen.
		// WP will automatically assign those terms to the order,
		// so we remove them here, and they will be assigned to the 
		// contact using updateContactTaxonomyTerms().
		wp_set_object_terms($orderID, array(), 'tc_how_heard');
		wp_set_object_terms($orderID, array(), 'tc_inq_reason');
		wp_set_object_terms($orderID, array(), 'tc_inquirer_type');
		wp_set_object_terms($orderID, array(), 'tc_poc');
	}
	
	public static function setOrderTypeTaxonomyTerms($orderID){
		update_post_meta( $orderID, '_tc_order_type', $_POST['_tc_order_type'] );
		wp_set_object_terms( $orderID, (int)$_POST['_tc_order_type'], 'tc_order_type' );

		if(isset($_POST['_tc_event_type'])){
			update_post_meta( $orderID, '_tc_event_type', $_POST['_tc_event_type'] );	
			wp_set_object_terms( $orderID, (int)$_POST['_tc_event_type'], 'tc_event_type' );

		}
	}
	
	
	public static function saveCart($cart, $orderID, $cartID){
		$serializedCart = base64_encode(serialize($cart));
		update_post_meta( $orderID, '_tc_cart', $serializedCart);
		update_post_meta( $orderID, '_cartID', $cartID);
		
	}
	
	public static function getPaymentsForOrder($orderID){
		$connectedIDs = p2p_get_connections( 'payment_to_order', array('to'=>$orderID, 'fields'=>'p2p_from') );
		
		$paymentItems = array();
		
		foreach($connectedIDs as $paymentID){
			$paymentItems[(int)$paymentID] = get_post_meta($paymentID, 'paymentModel', true);
		}
		ksort($paymentItems, SORT_NUMERIC);
		
		return $paymentItems;
		
	}
	
	public static function getOrderSummary($cart){
		require_once(TASTY_CMS_PLUGIN_LIBS_DIR .'freshbooks/FreshbooksUtils.php');
			$invoice = array();
			$invoice['lines'] = array();
			$invoice['lines']['line'] = array();

			error_log("cart: ");
			error_log(var_export($cart, 1));
			error_log("");
			error_log("");


			$cartItems = $cart['items'];

			$chargeItemsTotal = 0;

			foreach ($cartItems as $cartItem) {
				// error_log("cartItem: ");
				// error_log(var_export($cartItem, 1));
				// error_log("");
				// error_log("");
				$lineItem = array();
				$lineItem['description'] = $cartItem->description;

				// 'id' => 0,
				// 			   'productID' => 1235,
				// 			   'cartItemID' => '4f6395f799b26',
				// 			   'type' => 'tc_products',
				// 			   'quantity' => 1,
				// 			   'description' => 'qweqwe2',
				// 			   'variations' =>

				// custom items don't have a product id
				if( $cartItem->type != 'tc_products' ){
					$lineItem['name'] = $cartItem->itemName;
					$lineItem['description'] = $cartItem->description;
					$lineItem['unit_cost'] = $cartItem->price;
					$lineItem['quantity'] = 1;

				}else{

					// $productModel['type'] = 'tc_products';
					// $productModel['productName'] = $productPost->post_title;
					// $productModel['productID'] = $productID;
					// $productModel['sku'] = get_post_meta( $productID, '_tc_product_details_sku', true );
					// $productModel['price'] = get_post_meta( $productID, '_tc_product_details_price', true );
					// $productModel['width'] = get_post_meta( $productID, '_tc_product_details_width', true );
					// $productModel['height'] = get_post_meta( $productID, '_tc_product_details_height', true );
					// $productModel['length'] = get_post_meta( $productID, '_tc_product_details_length', true );
					// $productModel['weight'] = get_post_meta( $productID, '_tc_product_details_weight', true );

					$productModel = ProductProxy::getProductByID($cartItem->productID);
					// error_log("productModel: ");
					// error_log(var_export($productModel, 1));
					$productID = $productModel['productID'];
					//error_log("productID: $productID");


					$lineItem['name'] = $productModel['productName'];

					$basePrice = $productModel['price'];

					$itemPrice = $basePrice;

					$variantPriceOffset = 0;

					$flavorsArray = array();

					if (!empty($cartItem->variations)){
						// for each variation, get the selected variation item,
						// then check to see there are any rules to adjust the price.
						foreach ($cartItem->variations as $variation) {
							// $variation['p2p_id']
							// $variation['selected'] // array
							// $variation['variationID']
							// error_log("Variation: ");
							// error_log(var_export($variation, 1));
							// error_log("");
							// error_log("");
							$variationItemID = $variation->selected[0]; //for now, selected items will only be a single element array
							//error_log("variationItemID : $variationItemID");
							$variationItemModel = json_decode(ProductProxy::getVariationItemByID($variationItemID));
							// error_log("variationItemModel: ");
							// error_log(var_export($variationItemModel, 1));
							// error_log("");
							// error_log("");
							// // $variationItem
							// //     "1152":
		                    // {
		                    //     "title":"Apple Verde",
		                    //     "skuExtension":"",
		                    //     "id":1152
		                    // },

							$flavorsArray[] = $variationItemModel->title;

							$rules = ProductVariationRulesAjax::getRulesForVariation($productID, $variation->variationID, $variation->p2pid, true);
							// error_log("rules: ");
							// error_log(var_export($rules, 1));
							// error_log("");
							// error_log("");
							if (!empty($rules)){
								$itemPrice = FreshbooksUtils::getAdjustedPriceFromRules($itemPrice, $variationItemID, $variation->p2pid, $rules);
							}
						}

					}

					$flavorsDesc = 'Selected Flavors : ' . implode(", ", $flavorsArray);
					$lineItem['description'] .= "\n\n$flavorsDesc";

					$lineItem['unit_cost'] = number_format($itemPrice, 2, '.', '');


				}


				$lineItem['quantity'] = $cartItem->quantity;

				$chargeItemsTotal += ($lineItem['unit_cost'] * $lineItem['quantity']);

				$invoice['lines']['line'][] = $lineItem;	
			}



			if (isset($cart['shipping'])){
				$shipping = $cart['shipping'];

				if (!empty($shipping)){
					error_log(var_export($shipping, 1));
					$shippingOptions = get_option('tc_shipping_options');
					$fedExServices = $shippingOptions['FedEx']['services'];

					$lineItem = array();

					foreach ($fedExServices as $service) {
						if ($service['value'] == $shipping['serviceType']){
							$lineItem['description'] = $service['name'];
						}
					}

					$lineItem['name'] = "Shipping";
					$lineItem['unit_cost'] = $shipping['amount'] + $shippingOptions['FedEx']['markupAmount'];
					$lineItem['quantity'] = 1;

					$invoice['lines']['line'][] = $lineItem;
				}
			}


			if (isset($cart['couponModel'])){

				$couponModel = $cart['couponModel'];

				//$couponModel = array();
				// $couponModel['discountAmount'] = (float)$couponMeta['_tc_coupon_discount_amount'][0];
				// $couponModel['discountType'] = $couponMeta['_tc_coupon_priceOffsetType'][0];    
				// $couponModel['code'] = $couponMeta['_tc_coupon_code'][0];  
				// $freeShipping = $couponMeta['_tc_coupon_free_shipping'][0];
				// $couponModel['freeShipping'] = ( !empty($freeShipping) && $freeShipping == "on" ) ? true : false;    
				// $couponModel['title'] = $couponPost->post_title;


				if (!empty($couponModel)){
					error_log(var_export($couponModel, 1));
					$lineItem = array();
					$lineItem['name'] = "Coupon Code / Gift Cert";
					$lineItem['description'] = $couponModel['title'];

					$discountAmount = $couponModel['discountAmount'];


					if ($couponModel['discountType'] == "dollarsOffTotal"){ // 1 is dollars off
						$lineItem['unit_cost'] = '-'.$discountAmount;
					}else{
						$lineItem['unit_cost'] = '-'.($chargeItemsTotal * ($discountAmount/100));
					}

					$lineItem['quantity'] = 1;

					$invoice['lines']['line'][] = $lineItem;


					if ( @$coupon['freeShipping'] && !empty($shipping) ){
						$lineItem['name'] = "Free Shipping Discount";
						$lineItem['unit_cost'] = '-'.($shipping['amount'] + $shippingOptions['FedEx']['markupAmount']);
						$lineItem['quantity'] = 1;

						$invoice['lines']['line'][] = $lineItem;
					}



				}
			}

			if (isset($cart['discount'])){
				error_log("cart: ");
				error_log(var_export($cart, 1));
				error_log("");
				error_log("");
				$discountModel = $cart['discount'];

				// if it's a percent discount, we can either use Freshbook's built-in discounting,
				// or if it's either a dollar amount or we already have a coupon for this cart, 
				// we add the discount as a line item.
				if (!empty($discountModel)){

					if($discountModel->type == 'percent'){

						if ( !empty($couponModel) ){
							$lineItem = array();
							$lineItem['name'] = "Discount";
							$lineItem['description'] = $discountModel->amount . '% Off';
							$lineItem['unit_cost'] = '-'.($chargeItemsTotal * ($discountModel->amount/100));
							$lineItem['quantity'] = 1;
							$invoice['lines']['line'][] = $lineItem;
						}else{
							$invoice['discount'] = $discountModel->amount;
						}
					}else{
						$lineItem = array();
						$lineItem['name'] = "Discount";
						//$lineItem['description'] = $desc;
						$lineItem['unit_cost'] = '-'.$discountModel->amount;
						$lineItem['quantity'] = 1;

						$invoice['lines']['line'][] = $lineItem;
					}

				}
			}


			return $invoice;

		
	}
}

?>