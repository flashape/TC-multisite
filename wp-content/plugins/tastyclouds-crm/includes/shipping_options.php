<?php
//delete_option('tc_crm_shipping_options');
$shippingProviders = array();

$shippingProviders['FedEx'] =  array(
	'ProviderName'=>'FedEx',
	'ProviderCode'=>'FedEx',
	'username'=>'122388433',
	'password'=>'tcship1017',
	'markupAmount'=>'7.00',
	'markupType'=>'$ per package',
	'americommerceID'=>3,
	'active'=>1
);

$fedExServices = array();
$fedExServices[] = array('name'=>'FedEx 2nd Day', 'value'=>'FEDEX_2_DAY', 'americommerceID'=>14, 'active'=>1);
$fedExServices[] = array('name'=>'FedEx Standard Overnight', 'value'=>'STANDARD_OVERNIGHT', 'americommerceID'=>15, 'active'=>1);
$fedExServices[] = array('name'=>'FedEx First Overnight', 'value'=>'FIRST_OVERNIGHT',  'americommerceID'=>16, 'active'=>1);
$fedExServices[] = array('name'=>'FedEx Home Delivery', 'value'=>'GROUND_HOME_DELIVERY',  'americommerceID'=>21, 'active'=>1);
// $fedExServices[] = array('name'=>'FedEx Ground Service', 'value'=>'FEDEX_GROUND',  'americommerceID'=>22, 'active'=>1);

$shippingProviders['FedEx']['services'] = $fedExServices;

add_option('tc_crm_shipping_options', $shippingProviders, '', 'no');

?>