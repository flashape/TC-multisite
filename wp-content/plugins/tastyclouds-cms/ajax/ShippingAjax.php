<?php

class ShippingAjax
{
	
	function __construct()
	{
		//do_dump($_POST);
	}
	
	
	public static function getShippingRatesForCheckout()
	{
		require_once(TASTY_CMS_PLUGIN_LIBS_DIR .'fedex/FedExService.php');
		$fedExService = new FedExService();
		
		
		$cartKey = CartAjax::hasCartInSession();
		if ($cartKey !== FALSE){
			$cartID = str_replace('cart_', '', $cartKey);
			$cart = CartAjax::getCartById($cartID );
		}else{
			//TODO: die here if no cart found
			error_log('ShippingAjax::getShippingRatesForCheckout() : NO ITEMS IN CART');
		}
		
		
		
		//$shippingItems = $_POST['shippingItems'];
		//$customerInfo = $data['customerData'];
		$customerInfo = $_POST['customerData'];

		
		$recipient = array(
			'Contact' => array(
				'PersonName' => 'Rich Rodecker',
				'CompanyName' => '',
				'PhoneNumber' => '3109238566'
			),
			'Address' => array(
				'StreetLines' => array(@$customerInfo['address_1'], @$customerInfo['address_2']),
				'City' => @$customerInfo['city'],
				'StateOrProvinceCode' => @$customerInfo['state'],
				'PostalCode' => @$customerInfo['zip'],
				'CountryCode' => 'US',
				'Residential' => true)
		);
		
		
		$shippingItems = self::getShippingItemsFromCart($cart);

		self::addFedExLineItems($shippingItems, $fedExService);
		
		error_log(var_export($fedExService->packageLineItems, 1));
		
		
		
		
		
		$fedExService->recipient = $recipient;
		
		$shippingOptions = get_option('tc_shipping_options');
		$fedExServices = $shippingOptions['FedEx']['services'];
		
		$shippingCharges = array();
		
		
		foreach ($fedExServices as $service) {
			$serviceType = $service['value'];
			$fedExService->serviceType = $serviceType;
			$result = $fedExService->requestRates();
			//error_log(print_r($result, 1));
			
			if( $result['success'] ){
				$shippingOption = array();
				
				$shippingOption['serviceType'] = $serviceType;
				$shippingOption['label'] = $service['name'];
				$shippingOption['baseAmount'] = $result['amount'];
				$shippingOption['amount'] = $result['amount'] + $shippingOptions['FedEx']['markupAmount'];
				
				$shippingCharges[] = $shippingOption;
			}else{
				error_log("Error receiving shipping charge for : $serviceType");
			}
		}
		
		set_transient('ship_'.$cartID, $shippingCharges, 60 * 60); // save the results for 1 hour
		
		
		$arrayToReturn = array();
		
		ob_start();
		include(TASTY_CMS_PLUGIN_INC_DIR.'shipping_select.php');
		$arrayToReturn['selectShippingContent'] = ob_get_clean();
		
		error_log($arrayToReturn['selectShippingContent']);

		$result = AjaxUtils::createResult('Shipping rates retrieved successfully.', true, $arrayToReturn);
		AjaxUtils::returnJson($result);

		// error_log(var_export($shippingCharges, 1));
		// return $shippingCharges;
		
	}
	
	
	// We need to generate an array of shipping items from the items in the cart.
	// The reason we need a new array is that the same product may appear in the cart
	// multiple times, so we need to count that as an additional quantity of the same
	// product rather than two different products.
	private static function getShippingItemsFromCart($cart){
		
		$cartItems = $cart['items'];
		
		$shippingItems = array();
		
		foreach ($cartItems as $cartItem) {
			$productModel = ProductProxy::getProductByID($cartItem->productID);
			$productFound = false;
			
			// check if a product with this productID has already been added to the shipping items.
			// If it has, just increment the quantity.
			foreach ($shippingItems as $shippingItem) {
				if($shippingItem['productModel']['productID'] == $cartItem->productID){
					$shippingItem['quantity'] += $cartItem->quantity;
					$productFound = true;
					break;
				}
			}
			
			
			if (!$productFound){
				error_log("Product not found , adding new...");

				$newShippingItem = array();
				$newShippingItem['productModel'] = $productModel;
				$newShippingItem['quantity'] = $cartItem->quantity;

				$shippingItems[] = $newShippingItem;
			}
			
		}
		
		return $shippingItems;
	}
	
	
	private static function addFedExLineItems(&$shippingItems, &$fedExService){
		foreach($shippingItems as $item){
			$productModel = $item['productModel'];
			$itemWeight = number_format(@$productModel['weight'], 2);
			$totalWeight = $itemWeight * $item['quantity'];

			$packageLineItem = array(
				'SequenceNumber'=>1,
				'GroupPackageCount'=>1,
				'Weight' => array(
					'Value' => $totalWeight,
					'Units' => 'LB'
				)
			);

			$fedExService->addPackageLineItem($packageLineItem);

		}
		
	}
	
	
	
	
	
	
	public static function retrieveShippingRates(){
		require_once(TASTY_CMS_PLUGIN_LIBS_DIR .'fedex/FedExService.php');

		$fedExService = new FedExService();
		$shippingItems = $_POST['shippingItems'];
		$customerInfo = $_POST['customerData'];
		$serviceType = $_POST['serviceType'];
		
		error_log("Shipping items : ");
		error_log(print_r($shippingItems, 1));
		
		error_log("customerInfo : ");
		error_log(print_r($customerInfo, 1));
		
		error_log("serviceType : $serviceType");
		
		

		/***************************
		* Add Recipient
		****************************/


		$recipient = array(
			'Contact' => array(
				'PersonName' => 'Rich Rodecker',
				'CompanyName' => '',
				'PhoneNumber' => '3109238566'
			),
			'Address' => array(
				'StreetLines' => array(@$customerInfo['address_1'], @$customerInfo['address_2']),
				'City' => @$customerInfo['city'],
				'StateOrProvinceCode' => @$customerInfo['state'],
				'PostalCode' => @$customerInfo['zip'],
				'CountryCode' => 'US',
				'Residential' => true)
		);
		
		
		$fedExService->recipient = $recipient;

		/***************************
		* Add Item(s)
		****************************/

		foreach($shippingItems as $item){
			$productModel = $item['productModel'];
			$itemWeight = number_format(@$productModel['weight'], 2);
			$totalWeight = $itemWeight * $item['quantity'];

			$packageLineItem = array(
				'SequenceNumber'=>1,
				'GroupPackageCount'=>1,
				'Weight' => array(
					'Value' => $totalWeight,
					'Units' => 'LB'
				)
			);

			$fedExService->addPackageLineItem($packageLineItem);

		}
		// 
		// foreach($shippingItems as $item){
		// 	$itemWeight = number_format(@$item['weight'], 2);
		// 
		// 	$totalWeight = $itemWeight * $item['quantity'];
		// 
		// 	$packageLineItem = array(
		// 		'SequenceNumber'=>1,
		// 		'GroupPackageCount'=>1,
		// 		'Weight' => array(
		// 			'Value' => $totalWeight,
		// 			'Units' => 'LB'
		// 		)
		// 	);
		// 
		// 	$fedExService->addPackageLineItem($packageLineItem);
		// 
		// }

		// $packageLineItem = array(
		// 	'SequenceNumber'=>1,
		// 	'GroupPackageCount'=>1,
		// 	'Weight' => array(
		// 		'Value' => 9.0,
		// 		'Units' => 'LB'
		// 	),
		// 	// 'Dimensions' => array(
		// 	// 	'Length' => 20,
		// 	// 	'Width' => 20,
		// 	// 	'Height' => 20,
		// 	// 	'Units' => 'IN'
		// 	// )
		// );

		$fedExService->serviceType = $_POST['serviceType'];

		//echo json_encode($fedExService->packageLineItems);
		//echo json_encode($shippingItems);
		$result = $fedExService->requestRates();
		//$inVar = $_POST['testVar'];


		// add the shipping info directly to the cart session
		$cartID = $_POST['cartID'];

		$shipping = array('amount'=>$result['amount'], 'serviceType'=>$result['serviceType']);
		
		$shippingResult = CartAjax::setShipping($cartID, $shipping);
		//error_log(print_r($shippingResult, 1));

		$result['shippingResult'] = $shippingResult;
		error_log(print_r($result, 1));

		echo json_encode($result);

		// always use die() when echoing content for ajax requests
		die();
	}
	
	
	
	
}
?>