<?php
/**
* At the moment, TastyCart is pretty much a ModelLocator 
* working with cart objects stored in the session.
*/
class TastyCart
{
	
	function __construct()
	{
		//do_dump($_POST);
	}
	
	// returns a new cart instance with the specified id
	public static function create(){
		$cartID = uniqid(rand());
		$_SESSION['cart_'.$cartID ] = array('id'=>$cartID , 'items'=>array(), 'session_id'=>session_id());
		return $cartID;
	}
	
	public static function addCartToSession($cart){
		$cartID = uniqid(rand());
		$_SESSION['cart_'.$cartID ] = array('id'=>$cartID , 'items'=>array(), 'session_id'=>session_id());
		return $cartID;
	}

	
	// Gets the cart from the session.
	public static function getCartById($cartID = null){
		if (empty($cartID)){
			if(isset($_POST['cartID'])){
				$cartID = $_POST['cartID'];
			}
		}
		return $_SESSION['cart_'.$cartID];
		
	}
	
	// Returns the cart to WP
	public static function getCart(){
		$cart = self::getCartById();
		
		if ($cart){
			$result = self::createResult('Cart found successfully',true, array('cart'=>$cart));
		}else{
			$result = self::createCartNotFoundResult();
		}
		
		self::returnJson($result);
		
	}
	
	public static function addItem(){
		// TODO:  We should probably get the product defaults on the backend instead of passing them in via js 
		$productID = $_POST['productID'];
		$cartID = $_POST['cartID'];
		$cart =& self::getCartById($cartID);
		$cartItem = self::jsonDecodePostKey('itemToAdd');//json_decode(stripslashes($_POST['itemToAdd']));
		
		$error = self::getLastJsonError();
		
		
		$result;

		if ($cart){
			$cartItemID = uniqid();
			//$_SESSION['cart_'.$cartID ]['items'][$cartItemID] = array('productID'=>$productID, 'data'=>$cartItem, 'cartItemID'=>$cartItemID);
			$cart['items'][$cartItemID] = array('productID'=>$productID, 'data'=>$cartItem, 'cartItemID'=>$cartItemID);
			$result = self::createResult('Item Added Successfully.', true, array('productID'=>$productID, 'cartItemID'=>$cartItemID, 'cart'=>$cart, 'jsonError'=>$error));
			self::overwriteCartInSession($cart);
		}else{
			$result = self::createCartNotFoundResult();
		}
		
		
		self::returnJson($result);
	}
	
	public static function updateItem(){
		
		$cart = self::getCartById();
		$cartItemData = self::jsonDecodePostKey('itemData');//json_decode(stripslashes($_POST['itemData']));
		$cartItemID = $_POST['cartItemID'];
		$result;

		if ($cart){
			$cart['items'][$cartItemID]['data'] = $cartItemData;
			$result = self::createResult('Item updated successfully', true, array('cart'=>$cart)); //'cart' added for debugging only
			self::overwriteCartInSession($cart);
		}else{
			$result = self::createCartNotFoundResult();
		}
		
		self::returnJson($result);
	}
	
	
	public static function removeItem(){
		$cart = self::getCartById();
		
		if ($cart){
			$cartItemID = $_POST['cartItemID'];
			unset($cart['items'][$cartItemID]);
			$result = self::createResult('Item removed successfully', true, array('cart'=>$cart));
			self::overwriteCartInSession($cart);
		}else{
			$result = self::createCartNotFoundResult();
		}
		
		self::returnJson($result);
	}
	
	
	
	public static function addCustomItem(){
		$cartID = $_POST['cartID'];
		$cart = self::getCartById($cartID);
		
		$itemName = empty($_POST['name']) ? null : $_POST['name'];
		$error = self::getLastJsonError();
		
		$result;

		if ($cart){
			$cartItemID = uniqid();
			$cart['items'][$cartItemID] = array('name'=>$itemName, 'price'=>0, 'cartItemID'=>$cartItemID, 'customItemType'=>$itemName);
			$result = self::createResult('Custom Cart Item Added Successfully', true, array( 'cartItemID'=>$cartItemID, 'customItemType'=>$itemName, 'cart'=>$cart, 'jsonError'=>$error));
			self::overwriteCartInSession($cart);
		}else{
			$result = self::createCartNotFoundResult();
			
		}
		
		
		self::returnJson($result);
	}
	
	public static function updateCustomItem(){
		
		$cart = self::getCartById();
		$cartItemData = self::jsonDecodePostKey('itemData');
		$cartItemID = $_POST['cartItemID'];
		$result;

		if ($cart){
			$cart['items'][$cartItemID] = $cartItemData;
			$result = self::createResult('Custom Item updated successfully', TRUE, array('cart'=>$cart)); //'cart' added for debugging only
			self::overwriteCartInSession($cart);
		}else{
			$result = self::createCartNotFoundResult();
		}
		
		self::returnJson($result);
	}
	
	
	
	
	public static function removeCustomItem(){
		$cart = self::getCartById();
		
		if ($cart){
			$cartItemID = $_POST['cartItemID'];
			unset($cart['items'][$cartItemID]);
			$result = self::createResult('Custom Item removed successfully',true, array('cart'=>$cart));
			self::overwriteCartInSession($cart);
		}else{
			$result = self::createCartNotFoundResult();
		}
		
		self::returnJson($result);
	}
	
		
	public static function addServiceItem(){
		$cartID = $_POST['cartID'];
		$cart = self::getCartById($cartID);
		

		$error = self::getLastJsonError();
		
		$result;

		if ($cart){
			$cartItemID = uniqid();
			$serviceType = $_POST['serviceType'];
			
			$cart['services'][$cartItemID] = array('name'=>'Service Item', 'price'=>0, 'cartItemID'=>$cartItemID, 'serviceType'=>$serviceType);
			$cart['services'][$cartItemID]['hours'] = 3;
			$cart['services'][$cartItemID]['servings'] = 50;
			if ($serviceType == "cottoncandy"){
				$cart['services'][$cartItemID]['flavor1']  = "Apple Verde";
				$cart['services'][$cartItemID]['flavor2']  = "Apple Verde";
				$cart['services'][$cartItemID]['flavor3']  = "Apple Verde";
			}else{
				$cart['services'][$cartItemID]['flavor1']  = "Blueberry";
				$cart['services'][$cartItemID]['flavor2']  = "Blueberry";
				$cart['services'][$cartItemID]['flavor3']  = "Blueberry";
			}
			
			$result = self::createResult('Service Cart Item Added Successfully', true, array( 'cartItemID'=>$cartItemID, 'serviceType'=>$serviceType, 'cart'=>$cart, 'jsonError'=>$error));
			self::overwriteCartInSession($cart);
		}else{
			$result = self::createCartNotFoundResult();
			
		}
		
		
		self::returnJson($result);
	}
	
	public static function updateServiceItem(){
		
		$cart = self::getCartById();
		$cartItemData = self::jsonDecodePostKey('itemData');
		$cartItemID = $_POST['cartItemID'];
		$result;

		if ($cart){
			$cart['services'][$cartItemID] = $cartItemData;
			$result = self::createResult('Service Item updated successfully', TRUE, array('cart'=>$cart)); //'cart' added for debugging only
			self::overwriteCartInSession($cart);
		}else{
			$result = self::createCartNotFoundResult();
		}
		
		self::returnJson($result);
	}
	
	
	
	
	public static function removeServiceItem(){
		$cart = self::getCartById();
		
		if ($cart){
			$cartItemID = $_POST['cartItemID'];
			unset($cart['services'][$cartItemID]);
			$result = self::createResult('Service Item removed successfully',true, array('cart'=>$cart));
			self::overwriteCartInSession($cart);
		}else{
			$result = self::createCartNotFoundResult();
		}
		
		self::returnJson($result);
	}
	
	
	
	// TODO:  Change this to a single item.
	// Delivery charge is an array of items for now
	// because it just duplicated custom items.
	public static function addDeliveryItem(){
		$cartID = $_POST['cartID'];
		$cart = self::getCartById($cartID);
		

		$error = self::getLastJsonError();
		
		$result;

		if ($cart){
			$cartItemID = uniqid();
			//$cart['delivery'][$cartItemID] = array('name'=>'Delivery', 'price'=>0, 'cartItemID'=>$cartItemID);
			$cart['delivery'] = array('name'=>'Delivery', 'price'=>0, 'cartItemID'=>$cartItemID);
			$result = self::createResult('Delivery Item Added Successfully', true, array( 'cartItemID'=>$cartItemID, 'cart'=>$cart, 'jsonError'=>$error));
			self::overwriteCartInSession($cart);
		}else{
			$result = self::createCartNotFoundResult();
			
		}
		
		
		self::returnJson($result);
	}
	
	public static function updateDeliveryItem(){
		
		$cart = self::getCartById();
		$cartItemData = self::jsonDecodePostKey('itemData');
		$cartItemID = $_POST['cartItemID'];
		$result;

		if ($cart){
			$cart['delivery']= $cartItemData;
			$result = self::createResult('Delivery updated successfully', TRUE, array('cart'=>$cart)); //'cart' added for debugging only
			self::overwriteCartInSession($cart);
		}else{
			$result = self::createCartNotFoundResult();
		}
		
		self::returnJson($result);
	}
	
	
	
	
	public static function removeDeliveryItem(){
		$cart = self::getCartById();
		
		if ($cart){
			$cartItemID = $_POST['cartItemID'];
			unset($cart['delivery']);
			$result = self::createResult('Delivery removed successfully',true, array('cart'=>$cart));
			self::overwriteCartInSession($cart);
			
		}else{
			$result = self::createCartNotFoundResult();
		}
		
		self::returnJson($result);
	}
	
			

	
	
	public static function updateDiscount(){
		$cart = self::getCartById();
		
		if ($cart){
			$discountData = self::jsonDecodePostKey('discountData');
			$cart['discount'] = $discountData;
			$result = self::createResult('Cart discount updated successfully',true, array('cart'=>$cart));
			self::overwriteCartInSession($cart);
		}else{
			$result = self::createCartNotFoundResult();
		}
		
		self::returnJson($result);
	}
	
	
	
	public static function validateCoupon(){
		$cart = self::getCartById();
		
		if ($cart){
			$couponCode = $_POST['couponCode'];      
			
			if(empty($couponCode)){
				$result = self::createResult('Error: Coupon code empty.',false, array('couponCode'=>$couponCode, 'postCode'=>$_POST['couponCode'], 'jsonError'=>self::getLastJsonError()));
				
			}else{
				$argument = array(
						'post_type' => 'tc_crm_coupon',
						'meta_key' => '_tc_crm_coupon_code',
						'meta_value' => $couponCode,
						'numberposts' => 1,
						);
			                          
			
			
				// get the coupon if it exists
				$couponPosts = get_posts($argument);
			 
				if($couponPosts){
					$couponPost = $couponPosts[0];   
				 
					$couponMeta = get_metadata('post', $couponPost->ID);
				
					//TODO: make sure it's not expired       
					//$enabled = $couponMeta['_tc_crm_coupon_enabled'][0];      
				
				    include(TASTY_PLUGIN_INC_DIR . 'coupon_options.php'); 
					$couponDetails = array();
					$couponDetails['discountAmount'] = $couponMeta['_tc_crm_coupon_discount_amount'][0];
					$couponDetails['discountType'] = $couponMeta['_tc_crm_coupon_type'][0];    
					$couponDetails['freeShipping'] = isset($couponMeta['_tc_crm_coupon_free_shipping']) ? $couponMeta['_tc_crm_coupon_free_shipping'][0] : false;    
					$couponDetails['title'] = $couponPost->post_title;    
					$couponDetails['post'] = $couponPost;    
					$couponDetails['code'] = $couponCode;    
				
					foreach ($couponOptions as $couponData){
						if ($couponData['id'] == $couponDetails['discountType']){
							$couponDetails['couponData'] =   $couponData;    
							break;
						}
					} 
				
					//$cart['couponCode'] = $couponPost;      
					$cart['coupon'] = $couponDetails;      
				
					$result = self::createResult('Coupon validated successfully',true, array('couponDetails'=>$couponDetails));
					self::overwriteCartInSession($cart);
				}else{
					$result = self::createResult('Coupon not found.',false, array('argument'=>$argument));
				}
			}
			
		}else{
			$result = self::createCartNotFoundResult();
		}
		
		self::returnJson($result);
	}
	
	
	public static function removeCoupon(){
		$cart = self::getCartById();
		
		if ($cart){			
			unset($cart['coupon']);
			$result = self::createResult('Coupon removed successfully',true, array('cart'=>$cart));
			self::overwriteCartInSession($cart);
		}else{
			$result = self::createCartNotFoundResult();
		}
		
		self::returnJson($result);
	}
	
				
	public static function enableTax(){
		$cart = self::getCartById();
		
		if ($cart){	
			$taxEnabled = $_POST['taxEnabled'];
			$cart['taxEnabled'] = $taxEnabled;
			
			$result = self::createResult('Tax setting updated successfully',true, array('cart'=>$cart));
			self::overwriteCartInSession($cart);
		}else{
			$result = self::createCartNotFoundResult();
		}
		
		self::returnJson($result);
	}
	
			
	
	
	
	
	public static function setShipping($cartID, $shipping){
		$cart = self::getCartById($cartID);
		
		if ($cart){
			$cart['shipping'] = $shipping;
			$result = self::createResult('Shipping updated successfully',true, array('cart'=>$cart));
			
			self::overwriteCartInSession($cart);
		}else{
			$result = self::createCartNotFoundResult();
		}
		
		return $result;
	}
	
	public static function overwriteCartInSession($cart){
		$cartID = $cart['id'];
		$_SESSION['cart_'.$cartID ] = $cart;
	}
	
	private static function echoJson($result){
		
	}
	
	private static function createResult($message = '', $isSuccess = true, $arrayToMerge = null){
		$result = array('success'=>$isSuccess, 'message'=>$message);
		if (!empty($arrayToMerge)){
			$result = array_merge($result, $arrayToMerge);
		}
		
		return $result;
	}
	
	private static function createCartNotFoundResult($arrayToMerge = null){
		$result = array('success'=>false, 'errorMessage'=>'Cart not found.', 'session'=>$_SESSION, 'sessionID'=>session_id() );
		if (!empty($arrayToMerge)){
			$result = array_merge($result, $arrayToMerge);
		}
		
		return $result;
	}
	
	private static function jsonDecodePostKey($key){
		return json_decode(stripslashes($_POST[$key]));
	}
	
	private static function getLastJsonError(){
		$error = '';
		switch(json_last_error())
        {
            case JSON_ERROR_DEPTH:
                $error =  ' - Maximum stack depth exceeded';
                break;
            case JSON_ERROR_CTRL_CHAR:
                $error = ' - Unexpected control character found';
                break;
            case JSON_ERROR_SYNTAX:
                $error = ' - Syntax error, malformed JSON';
                break;
            case JSON_ERROR_NONE:
            default:
                $error = '';                    
        }

		return $error;
	}
	
	
	private static function returnJson($toReturn){
		echo json_encode($toReturn);
		// always use die() when echoing content for ajax requests
		//session_write_close();
		die();
	}
	

	
}
?>