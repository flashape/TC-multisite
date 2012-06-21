<?php

class FreshbooksUtils
{
	
	
	public static function getFreshbooksClientID($contactID){
		$fbClientID = get_post_meta($contactID, '_tc_fb_id', true);
		return $fbClientID;
	}
	
	
	
	
	
	public static function getInvoiceFromCart($fbClientID, $cart){
		$invoice = array();
		$invoice['client_id'] = $fbClientID;
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
			if( $cartItem->type != 'tc_products'  && $cartItem->type != 'tc_service' ){
				$lineItem['name'] = $cartItem->itemName;
				$lineItem['description'] = $cartItem->description;
				$lineItem['unit_cost'] = $cartItem->price;
				$lineItem['quantity'] = 1;
			
			}elseif($cartItem->type == 'tc_service'){
				$serviceModel = ProductProxy::getServiceByID($cartItem->productID);
				error_log("serviceModel: ");
				error_log(var_export($serviceModel, 1));
				$productID = $serviceModel['productID'];
				//error_log("productID: $productID");
				$lineItem['name'] = $serviceModel['productName'];
				$lineItem['unit_cost'] = $cartItem->price;
				$lineItem['quantity'] = $cartItem->quantity;
			}elseif($cartItem->type == 'tc_products'){
				
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
							$itemPrice = ProductProxy::getAdjustedPriceFromRules($itemPrice, $variationItemID, $variation->p2pid, $rules);
						}
					}
					
				}
				
				$flavorsDesc = 'Selected Flavors : ' . implode(", ", $flavorsArray);
				$lineItem['description'] .= "\n\n$flavorsDesc";
				
				$lineItem['unit_cost'] = number_format($itemPrice, 2, '.', '');
				
				
				
				
				
			}
			
			
			$lineItem['quantity'] = $cartItem->quantity;
			
			if(isset($cartItem->taxable) && $cartItem->taxable ){
				$lineItem['tax1_name'] = 'tax1';
				$lineItem['tax1_percent'] = 8.75;
			}

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
	
	
	
	public static function createClientObject($data){
		// $contactModel = array(
		// 	'customerFirstName'=>$customerFirstName,
		// 	'customerLastName'=>$customerLastName,
		// 	'customerEmail'=>$customerEmail,
		// 	'customerPhone'=>$customerPhone,
		// 	'customerCompany'=>$customerCompany
		// );
		$contactModel = $data['contact'];
		
		// $address['firstName'] = $_POST[$type.'_address_first_name'];
		// $address['lastName'] = $_POST[$type.'_address_last_name'];
		// $address['addressLine1'] = $_POST[$type.'_address_line_1'];
		// $address['addressLine2'] = $_POST[$type.'_address_line_2'];
		// $address['city'] = $_POST[$type.'_address_city'];
		// $address['state'] = $_POST[$type.'_address_state'];
		// $address['zip'] = $_POST[$type.'_address_zip'];
		// $address['company'] = $_POST[$type.'_address_company'];
		$address = $data['address'];
		
		require_once(TASTY_CMS_PLUGIN_INC_DIR.'utils/states_list.php');

		$client = array();
		$tstamp = time();
		
		$firstName = $contactModel['customerFirstName'];
		$lastName = $contactModel['customerLastName'];
		$company = $contactModel['customerCompany'];
		$email = $contactModel['customerEmail'];
		$phone = $contactModel['customerPhone'];

		//$contact_url = $_POST['_tc_crm_contact_url'];
		$address_1 = $address['addressLine1'];
		$address_2 = $address['addressLine2'];
		$address_city = $address['city'];
		$address_state = $address['state'];
		$address_zip = $address['zip'];
		
		if (empty($email)){
			$email = "noemailprovided@tastyclouds.com";
		}

		// Company name is required by Freshbooks,
		// so if none was submitted use first and last name
		$companyName = '';
		
		if (!empty($company)){
			$companyName = $company;
		}else{
			$companyName = $firstName . ' ' . $lastName;
		}
		
		
		$client['first_name'] = $firstName;
		$client['last_name'] = $lastName;

		$client['organization'] = $companyName;

		// prefix with timestamp for dev testing
		$client['email'] = $email;
		//$client['email'] = $tstamp.'@visible-form.com';
		//$client['email'] = $tstamp.'_'.$personal_email;
		$client['p_street1'] = $address_1; 
		$client['p_street2'] = $address_2; 
		$client['p_city'] = $address_city;   
		$client['p_state'] = $state_list[$address_state]; 
		$client['p_country'] = "United States";
		$client['p_code'] = $address_zip;
		error_log("FB CLIENT OBJECT:");
		error_log(var_export($client, 1));
		error_log(var_export($address, 1));
		return $client;		
		
	}
	
	
	
	

	
	public static function createNewInvoicePaymentFromPost($invoiceID){
		$paymentType = $_POST['payment_type'];
		$paymentAmount = $_POST['payment_amount'];
		
		$payment = array();
		$payment['amount'] =  $paymentAmount;
		$payment['invoice_id'] =  $invoiceID;
		$payment['notes'] =  $_POST['payment_note'];
		
		// $fbPaymentType = '';
		// 
		// if ( strtolower($paymentType) == 'square'){
		// 	$fbPaymentType = 'Credit Card';
		// 	$payment['notes'] = 'Square payment';
		// }
		
		return $payment;
		
	}
	
	
	



	
	
}
?>