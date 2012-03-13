<?php

class ShippingAjax
{
	
	function __construct()
	{
		//do_dump($_POST);
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