<?php

class FreshbooksUtils
{
	
	public static function getInvoiceFromCart($newFBClientID, $cart){
		$invoice = array();
		$invoice['client_id'] = $newFBClientID;
		$invoice['lines'] = array();
		$invoice['lines']['line'] = array();


		$productsArray = get_option('tc_crm_product_order_items');
		
		if (isset($cart['items'])){
		
			$cartProductItems = $cart['items'];

			$chargeItemsTotal = 0;
		
			foreach ($cartProductItems as $productItem) {

				$lineItem = array();
				//$lineItem['type'] = 'Item';	


				if( !is_array($productItem) || empty($productItem['productID']) ){
					$lineItem['name'] = $productItem->name;
					$lineItem['description'] = $productItem->description;
					$lineItem['unit_cost'] = $productItem->price;
					$lineItem['quantity'] = 1;
				
				}else{
					$product = getProductByID($productItem['productID'], $productsArray );



					$lineItem['name'] = $product['itemName'];

					$basePrice = $product['price'];

					$variantPriceOffset = 0;

					$flavorsArray = array();

					if (!empty( $productItem['data']->variantGroups )){
						foreach ($productItem['data']->variantGroups as $variant) {
							$variantPriceOffset += ($variant->priceOffset + $variantPriceOffset);
							$flavor = (empty($variant->shortDesc) && $variant->variantID == 10) ? "Apple Verde" :  $variant->shortDesc;
							$flavorsArray[] = $flavor;
						}
					}

					$flavorsDesc = 'Selected Flavors : ' . implode(", ", $flavorsArray);
					$lineItem['description'] = $flavorsDesc;

					$unitCost = $basePrice + $variantPriceOffset;
					$lineItem['unit_cost'] = number_format($unitCost, 2, '.', '');
					$lineItem['quantity'] = $productItem['data']->quantity;
					// $lineItem['tax1_name'] = '';
					// $lineItem['tax2_name'] = '';
					// $lineItem['tax1_percent'] = '';
					// $lineItem['tax2_percent'] = '';
				}

				$chargeItemsTotal += ($lineItem['unit_cost'] * $lineItem['quantity']);

				$invoice['lines']['line'][] = $lineItem;	
			}
		}
		
		
		
		

		if (isset($cart['services'])){

			$cartServiceItems = $cart['services'];
			if (!empty($cartServiceItems)){
				foreach ($cartServiceItems as $serviceItem) {

					$lineItem = array();
					//$lineItem['type'] = 'Item';	
					$serviceName = $serviceItem->serviceType == "cottoncandy" ? "Cotton Candy" : "Snow Cone";
					$servings = $serviceItem->servings;
					$hours = $serviceItem->hours;
					$price = $serviceItem->price;
					$flavorsArray = array($serviceItem->flavor1, $serviceItem->flavor2, $serviceItem->flavor3);
					$desc = "Catered Machine Rental Service for $hours hours and $servings servings\nSelected Flavors: ".implode(", ", $flavorsArray);
					$lineItem['name'] = "Catered $serviceName Service";
					$lineItem['description'] = $desc;
					$lineItem['unit_cost'] = $price;
					$lineItem['quantity'] = 1;

					$chargeItemsTotal += ($lineItem['unit_cost'] * $lineItem['quantity']);

					$invoice['lines']['line'][] = $lineItem;	

				}
			}
		}



		

		
		if (isset($cart['shipping'])){
			$shipping = $cart['shipping'];

			if (!empty($shipping)){
				error_log(var_export($shipping, 1));
				$shippingOptions = get_option('tc_crm_shipping_options');
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
		
		
		if (isset($cart['coupon'])){
		
			$coupon = $cart['coupon'];

		
			if (!empty($coupon)){
				error_log(var_export($coupon, 1));
				$lineItem = array();
				$lineItem['name'] = "Coupon Code / Gift Cert";
				$lineItem['description'] = $coupon['title'];
			
				$discountAmount = $coupon['discountAmount'];
			
			
				if ($coupon['discountType'] == 1){ // 1 is dollars off
					$lineItem['unit_cost'] = '-'.$discountAmount;
				}else{
					$lineItem['unit_cost'] = '-'.($chargeItemsTotal * ($discountAmount/100));
				}
			
				$lineItem['quantity'] = 1;

				$invoice['lines']['line'][] = $lineItem;
			
			
				if ( @$coupon['freeShipping'] == "on" && !empty($shipping) ){
					$lineItem['name'] = "Free Shipping Discount";
					$lineItem['unit_cost'] = '-'.($shipping['amount'] + $shippingOptions['FedEx']['markupAmount']);
					$lineItem['quantity'] = 1;

					$invoice['lines']['line'][] = $lineItem;
				}
			
			
			
			}
		}
		
		if (isset($cart['discount'])){
		
			$discount = $cart['discount'];
			// if it's a percent discount, we can use Freshbook's built-in discounting,
			// otherwise we add the discount as a line item
			if (!empty($discount)){
			
				if($discount->type == '%'){
					if ( !empty($coupon) ){
						$lineItem = array();
						$lineItem['name'] = "Discount";
						$lineItem['description'] = $discount->discount . '% Off';
						//$lineItem['unit_cost'] = '-'.$discount->discount;
						$lineItem['unit_cost'] = '-'.($chargeItemsTotal * ($discount->discount/100));
					
						$lineItem['quantity'] = 1;

						$invoice['lines']['line'][] = $lineItem;
					}else{
						$invoice['discount'] = $discount->discount;
					}
				}else{
					$lineItem = array();
					$lineItem['name'] = "Discount";
					//$lineItem['description'] = $desc;
					$lineItem['unit_cost'] = '-'.$discount->discount;
					$lineItem['quantity'] = 1;

					$invoice['lines']['line'][] = $lineItem;
				}

			}
		}
		
		
		return $invoice;

	}
	
	
	public static function createNewClientObjectFromPost(){
		require_once(TASTY_PLUGIN_INC_DIR.'states_list.php');

		$client = array();
		$tstamp = time();
		$firstName = $_POST['_tc_crm_contact_first_name'];
		$lastName = $_POST['_tc_crm_contact_last_name'];
		$company = $_POST['_tc_crm_contact_company'];

		$contact_url = $_POST['_tc_crm_contact_url'];
		$personal_email = $_POST['_tc_crm_contact_personal_email'];
		$personal_phone = $_POST['_tc_crm_contact_personal_phone'];
		$personal_address_1 = $_POST['_tc_crm_contact_personal_address_1'];
		$personal_address_2 = $_POST['_tc_crm_contact_personal_address_2'];
		$personal_address_city = $_POST['_tc_crm_contact_personal_address_city'];
		$personal_address_state = $_POST['_tc_crm_contact_personal_address_state'];
		$personal_address_zip = $_POST['_tc_crm_contact_personal_address_zip'];
		// $business_email = $_POST['_tc_crm_contact_business_email'];
		// $business_phone = $_POST['_tc_crm_contact_business_phone'];
		// $business_address_1 = $_POST['_tc_crm_contact_business_address_1'];
		// $business_address_2 = $_POST['_tc_crm_contact_business_address_2'];
		// $business_address_city = $_POST['_tc_crm_contact_business_address_city'];
		// $business_address_state = $_POST['_tc_crm_contact_business_address_state'];
		// $business_address_zip = $_POST['_tc_crm_contact_business_address_zip'];




		if (empty($personal_email)){
			$personal_email = "noemailprovided@tastyclouds.com";
		}

		$client['first_name'] = $firstName;
		$client['last_name'] = $lastName;

		$companyName = '';
		if (!empty($company)){
			$companyName = $company;
		}else{
			$companyName = $client['first_name'] . ' ' . $client['last_name'];
		}
		$client['organization'] = $companyName;

		// prefix with timestamp for dev testing
		$client['email'] = $personal_email;
		//$client['email'] = $tstamp.'@visible-form.com';
		//$client['email'] = $tstamp.'_'.$personal_email;
		$client['p_street1'] = $personal_address_1; 
		$client['p_street2'] = $personal_address_2; 
		$client['p_city'] = $personal_address_city;   
		$client['p_state'] = $state_list[$personal_address_state]; 
		$client['p_country'] = "United States";
		$client['p_code'] = $personal_address_zip;

		return $client;	
	}
	
	public static function createNewInvoicePaymentFromPost($invoiceID){
		$paymentType = $_POST['_tc_crm_payment_type'];
		$paymentAmount = $_POST['_tc_crm_payment_amount'];
		
		$payment = array();
		$payment['amount'] =  $paymentAmount;
		$payment['invoice_id'] =  $invoiceID;
		$payment['notes'] =  $_POST['_tc_crm_payment_note'];
		
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