<?php
error_reporting(E_ALL);
ini_set('display_errors','On');
include('./americommerce/AmeriCommerceDatabaseIO.php');       
$ns = "http://www.americommerce.com";
$user = 'rich';
$pass = 'M1ll10n$';
$token = '2da0e279-c42f-48aa-afe6-ed3195221f08';
$header = new AmericommerceHeaderInfo($user, $pass, $token);

$api = new AmeriCommerceDatabaseIO();

//Body of the Soap Header. 
$headerbody = array('UserName' => $user, 
                    'Password' => $pass, 
                    'SecurityToken'=>$token); 

//Create Soap Header.        
$header = new SOAPHeader($ns, 'AmeriCommerceHeaderInfo', $headerbody);        
        
//set the Headers of Soap Client. 
$api->__setSoapHeaders($header);

//$testHelloWorldRes = $api->ShippingProviderService_GetByCode(new ShippingProviderService_GetByCode('FE2DAY'));
$testHelloWorldRes = $api->ShippingProviderService_GetByKey(new ShippingProviderService_GetByKey('22'));
echo "testHelloWorldRes : \n<br />";
print_r($testHelloWorldRes);

// $getUserResult = $api->User_GetByKey(new User_GetByKey(1));
// 
// echo "getUserResult : \n<br />";
// print_r($getUserResult);

// $getProductResult = $api->Product_GetByKey(new Product_GetByKey(26));
// 
// echo "getProductResult : \n<br />";
// print_r($getProductResult);

?>