<?php
/**
* 
*/

//require_once(dirname(__FILE__) .'/fedex-common.php5');

class FedExService
{
	public $api;
	
	public $path_to_wsdl;
	// DEV KEYS
	// public $key = 'DnV8vCqsO29MSwoj';
	// public $password = 'qBoW4C28K0zqwHh8M6MBIQw4h';
	// public $shipaccount = '510087860';
	// public $billaccount = '510087860';
	// public $meter = '100074805';
	
	// PRODUCTION KEYS
	public $key = 'FDNDibAVJJZtiSMI';
	public $password = 'qv9XLQWkri6ZFnqRQ8NKQ7e4p';
	public $shipaccount = '122388433';
	public $billaccount = '122388433';
	public $meter = '103301683';
	public $recipient;
	public $packageLineItems;
	public $serviceType;
	
	function __construct()
	{
		$this->packageLineItems = array();

		$this->path_to_wsdl = WP_PLUGIN_DIR.'/tastyclouds-crm/fedex/RateService_v10.wsdl';
		$this->api = new SoapClient($this->path_to_wsdl, array('trace' => 1, 'cache_wsdl' => 0)); // Refer to http://us3.php.net/manual/en/ref.soap.php for more information
		ini_set("soap.wsdl_cache_enabled", "0");
	}
	
	public function requestRates(){
		$request['WebAuthenticationDetail'] = array(
			'UserCredential' =>array(
				'Key' => $this->key, 
				'Password' => $this->password
			)
		); 
		$request['ClientDetail'] = array(
			'AccountNumber' => $this->shipaccount, 
			'MeterNumber' => $this->meter
		);
		$request['TransactionDetail'] = array('CustomerTransactionId' => ' *** Rate Request v10 using PHP ***');
		$request['Version'] = array(
			'ServiceId' => 'crs', 
			'Major' => '10', 
			'Intermediate' => '0', 
			'Minor' => '0'
		);
		$request['ReturnTransitAndCommit'] = true;
		//$request['RequestedShipment']['DropoffType'] = 'REGULAR_PICKUP'; // valid values REGULAR_PICKUP, REQUEST_COURIER, ...
		$request['RequestedShipment']['DropoffType'] = 'BUSINESS_SERVICE_CENTER'; // valid values REGULAR_PICKUP, REQUEST_COURIER, ...
		$request['RequestedShipment']['ShipTimestamp'] = date('c');
		$request['RequestedShipment']['ServiceType'] = $this->serviceType; // valid values STANDARD_OVERNIGHT, PRIORITY_OVERNIGHT, FEDEX_GROUND, ...
		//$request['RequestedShipment']['ServiceType'] = 'GROUND_HOME_DELIVERY'; // valid values STANDARD_OVERNIGHT, PRIORITY_OVERNIGHT, FEDEX_GROUND, ...
		$request['RequestedShipment']['PackagingType'] = 'YOUR_PACKAGING'; // valid values FEDEX_BOX, FEDEX_PAK, FEDEX_TUBE, YOUR_PACKAGING, ...
		$request['RequestedShipment']['TotalInsuredValue']=array('Ammount'=>100,'Currency'=>'USD');
		$request['RequestedShipment']['Shipper'] = $this->addShipper();
		$request['RequestedShipment']['Recipient'] = $this->recipient;
		//$request['RequestedShipment']['Recipient'] = $this->addRecipient();
		$request['RequestedShipment']['ShippingChargesPayment'] = $this->addShippingChargesPayment();
		$request['RequestedShipment']['RateRequestTypes'] = 'ACCOUNT'; 
		$request['RequestedShipment']['RateRequestTypes'] = 'LIST'; 
		$request['RequestedShipment']['PackageCount'] = '1';
		$request['RequestedShipment']['RequestedPackageLineItems'] = $this->packageLineItems;
		//$request['RequestedShipment']['RequestedPackageLineItems'] = $this->addPackageLineItem1();
		
		try 
		{
			if($this->setEndpoint('changeEndpoint'))
			{
				$newLocation = $this->api->__setLocation(setEndpoint('endpoint'));
			}

			$response = $this->api->getRates($request);

		    if ($response -> HighestSeverity != 'FAILURE' && $response -> HighestSeverity != 'ERROR')
		    {  	
		    	$rateReply = $response -> RateReplyDetails;
				$serviceType = $rateReply -> ServiceType;
				$amount = $rateReply->RatedShipmentDetails[0]->ShipmentRateDetail->TotalNetCharge->Amount;
				return array('success'=>true, 'serviceType'=>$serviceType, 'amount'=>$amount);
		    	// echo '<table border="1">';
		    	// 		        echo '<tr><td>Service Type</td><td>Amount</td><td>Delivery Date</td></tr><tr>';
		    	// $serviceType = '<td>'.$rateReply -> ServiceType . '</td>';
		    	// 		        $amount = '<td>$' . number_format($rateReply->RatedShipmentDetails[0]->ShipmentRateDetail->TotalNetCharge->Amount,2,".",",") . '</td>';
		    	// 		        if(array_key_exists('DeliveryTimestamp',$rateReply)){
		    	// 		        	$deliveryDate= '<td>' . $rateReply->DeliveryTimestamp . '</td>';
		    	// 		        }else if(array_key_exists('TransitTime',$rateReply)){
		    	// 		        	$deliveryDate= '<td>' . $rateReply->TransitTime . '</td>';
		    	// 		        }else {
		    	// 		        	$deliveryDate='<td>&nbsp;</td>';
		    	// 		        }
		    	// 		        echo $serviceType . $amount. $deliveryDate;
		    	// 		        echo '</tr>';
		    	// 		        echo '</table>';
		    	// 
		    	// 		        $this->printSuccess($this->api, $response);
		    }
		    else
		    {
				//$errors = $this->getError($response);
				$errors = $response -> Notifications;
				return array('success'=>false, 'errors'=>$errors);
			
		        //$this->printError($this->api, $response);
		    } 

		    //writeToLog($this->api);    // Write to log file   

		} catch (SoapFault $exception) {
			return array('success'=>false, 'code'=>$exception->faultCode, 'faultString'=>$exception->faultString);
			
			//return $exception;
		   //printFault($exception, $this->api);        
		}
	}
	
	
	function addPackageLineItem($packageInfoArray){
		$this->packageLineItems[] = $packageInfoArray;
		
	}
	// function addPackageLineItem1(){
	// 	$packageLineItem = array(
	// 		'SequenceNumber'=>1,
	// 		'GroupPackageCount'=>1,
	// 		'Weight' => array(
	// 			'Value' => 9.0,
	// 			'Units' => 'LB'
	// 		),
	// 		'Dimensions' => array(
	// 			'Length' => 20,
	// 			'Width' => 20,
	// 			'Height' => 20,
	// 			'Units' => 'IN'
	// 		)
	// 	);
	// 	return $packageLineItem;
	// }
	// 
	function setEndpoint($var){
		if($var == 'changeEndpoint') Return false;
		if($var == 'endpoint') Return '';
	}
	
	
	
	
	function addShipper(){
		$shipper = array(
			'Contact' => array(
				'PersonName' => 'Chelcie',
				'CompanyName' => 'Tasty Clouds Cotton Candy Company',
				'PhoneNumber' => '3109902435'),
			'Address' => array(
				'StreetLines' => array('12325 Santa Monica Blvd'),
				'City' => 'Los Angeles',
				'StateOrProvinceCode' => 'CA',
				'PostalCode' => '90025',
				'CountryCode' => 'US')
		);
		return $shipper;
	}
	// function addRecipient(){
	// 	$recipient = array(
	// 		'Contact' => array(
	// 			'PersonName' => 'Joann Keane',
	// 			'CompanyName' => '',
	// 			'PhoneNumber' => '6315811806'
	// 		),
	// 		'Address' => array(
	// 			'StreetLines' => array('42 Moffit Blvd'),
	// 			'City' => 'East Islip',
	// 			'StateOrProvinceCode' => 'NY',
	// 			'PostalCode' => '11730',
	// 			'CountryCode' => 'US',
	// 			'Residential' => true)
	// 	);
	// 	return $recipient;	                                    
	// }
	
	
	function addShippingChargesPayment(){
		$shippingChargesPayment = array(
			'PaymentType' => 'SENDER', // valid values RECIPIENT, SENDER and THIRD_PARTY
			'Payor' => array(
				'AccountNumber' => $this->billaccount,
				'CountryCode' => 'US')
		);
		return $shippingChargesPayment;
	}
	// function addLabelSpecification(){
	// 	$labelSpecification = array(
	// 		'LabelFormatType' => 'COMMON2D', // valid values COMMON2D, LABEL_DATA_ONLY
	// 		'ImageType' => 'PDF',  // valid values DPL, EPL2, PDF, ZPLII and PNG
	// 		'LabelStockType' => 'PAPER_7X4.75');
	// 	return $labelSpecification;
	// }
	// function addSpecialServices(){
	// 	$specialServices = array(
	// 		'SpecialServiceTypes' => array('COD'),
	// 		'CodDetail' => array(
	// 			'CodCollectionAmount' => array('Currency' => 'USD', 'Amount' => 150),
	// 			'CollectionType' => 'ANY')// ANY, GUARANTEED_FUNDS
	// 	);
	// 	return $specialServices; 
	// }
	
	function printSuccess($client, $response) {
	    echo '<h2>Transaction Successful</h2>';  
	    echo "\n";
	    $this->printRequestResponse($client);
	}
	// function printRequestResponse($client){
	// 	echo '<h2>Request</h2>' . "\n";
	// 	echo '<pre>' . htmlspecialchars($client->__getLastRequest()). '</pre>';  
	// 	echo "\n";
	// 
	// 	echo '<h2>Response</h2>'. "\n";
	// 	echo '<pre>' . htmlspecialchars($client->__getLastResponse()). '</pre>';
	// 	echo "\n";
	// }
	
	
	function printRequestResponse($client){
		echo '<h2>Request Headers</h2>' . "\n";
		echo '<pre>' . htmlspecialchars($this->api->__getLastRequestHeaders()). '</pre>';  
		echo "\n";		
		echo '<h2>Request</h2>' . "\n";
		echo '<pre>' . htmlspecialchars($this->api->__getLastRequest()). '</pre>';  
		echo "\n";

		echo '<h2>Response</h2>'. "\n";
		echo '<pre>' . htmlspecialchars($this->api->__getLastResponse()). '</pre>';
		echo "\n";
	}
	
	function printNotifications($notes){
		foreach($notes as $noteKey => $note){
			if(is_string($note)){    
	            echo $noteKey . ': ' . $note . Newline;
	        }
	        else{
	        	$this->printNotifications($note);
	        }
		}
		echo Newline;
	}

	function printError($client, $response){
	    echo '<h2>Error returned in processing transaction</h2>';
		echo "\n";
		$this->printNotifications($response -> Notifications);
	    $this->printRequestResponse($client, $response);
	}
		
	function getNotifications($notes){
		$outstring = '';
		foreach($notes as $noteKey => $note){
			if(is_string($note)){    
	            $outstring .= $noteKey . ': ' . $note . Newline;
	        }
	        else{
	        	$outstring .= $this->getNotifications($note);
	        }
		}
		
		return $outstring;
	}

	function getError($client, $response){

		return $this->getNotifications($response -> Notifications);
	}
	
	

}
?>