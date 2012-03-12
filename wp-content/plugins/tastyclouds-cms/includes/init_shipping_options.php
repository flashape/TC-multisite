<?php
delete_option('tc_shipping_options');

$shippingProviders = array();

$shippingProviders['FedEx'] =  array(
	'ProviderName'=>'FedEx',
	'ProviderCode'=>'FedEx',
	'username'=>'122388433',
	'password'=>'tcship1017',
	'markupAmount'=>'7.00',
	'markupType'=>'dollarsPerPackage',
	'active'=>1
);

$fedExServices = array();
$fedExServices[] = array('name'=>'FedEx 2nd Day', 'value'=>'FEDEX_2_DAY', 'active'=>1);
$fedExServices[] = array('name'=>'FedEx Standard Overnight', 'value'=>'STANDARD_OVERNIGHT', 'active'=>1);
$fedExServices[] = array('name'=>'FedEx First Overnight', 'value'=>'FIRST_OVERNIGHT', 'active'=>1);
$fedExServices[] = array('name'=>'FedEx Home Delivery', 'value'=>'GROUND_HOME_DELIVERY', 'active'=>1);
// $fedExServices[] = array('name'=>'FedEx Ground Service', 'value'=>'FEDEX_GROUND', 'active'=>1);

$shippingProviders['FedEx']['services'] = $fedExServices;

add_option('tc_shipping_options', $shippingProviders, '', 'no');

?>