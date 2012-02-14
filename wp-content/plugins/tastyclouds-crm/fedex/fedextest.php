<?php
if(!defined('WP_PLUGIN_DIR')){
	define('WP_PLUGIN_DIR', '/Users/rich/Dropbox/tastyclouds_docs/tastyclouds_crm/wp-content/plugins');
}
require_once('FedExService.php');
define('Newline',"<br />");

$fedExService = new FedExService();

/***************************
* Add Recipient
****************************/


$recipient = array(
	
	// $recipient = array(
	// 	'Contact' => array(
	// 		'PersonName' => 'Recipient Name',
	// 		'CompanyName' => 'Company Name',
	// 		'PhoneNumber' => '9012637906'
	// 	),
	// 	'Address' => array(
	// 		'StreetLines' => array('Address Line 1'),
	// 		'City' => 'Richmond',
	// 		'StateOrProvinceCode' => 'BC',
	// 		'PostalCode' => 'V7C4V4',
	// 		'CountryCode' => 'CA',
	// )
	'Contact' => array(
		'PersonName' => 'Joann Keane',
		'PhoneNumber' => '6315811806'
	),
	'Address' => array(
		'StreetLines' => array('42 Moffit Blvd'),
		'City' => 'East Islip',
		'StateOrProvinceCode' => 'NY',
		'PostalCode' => '11730',
		'CountryCode' => 'US',
		'Residential' => true
	)
);

$fedExService->recipient = $recipient;


/***************************
* Add Item(s)
****************************/

$packageLineItem = array(
	'SequenceNumber'=>1,
	'GroupPackageCount'=>1,
	'Weight' => array(
		'Value' => 15.0,
		'Units' => 'LB'
	),
	// 'Dimensions' => array(
	// 	'Length' => 20,
	// 	'Width' => 20,
	// 	'Height' => 20,
	// 	'Units' => 'IN'
	// )
);

$fedExService->addPackageLineItem($packageLineItem);

/***************************
* Request Rates
****************************/
$result = $fedExService->requestRates();

/***************************
* Return Rates
****************************/




?>