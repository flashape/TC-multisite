<?php
/**
* At the moment, CartAjax is pretty much a ModelLocator 
* working with cart objects stored in the session.
*/
class CartAjax
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
	
	public static function hasCartInSession(){
		$sessionKeys = array_keys($_SESSION);
		foreach($sessionKeys as $key){
			if ( strpos($key, 'cart_') !== FALSE){
				return $key;
			}
		}
		return false;
	}
	
	
	public static function removeCartInSession($cartKey){
		error_log("Removing cart from session : $cartKey");
		unset($_SESSION[$cartKey]);
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
			$result = AjaxUtils::createResult('Cart found successfully',true, array('cart'=>$cart));
		}else{
			$result = self::createCartNotFoundResult();
		}
		
		AjaxUtils::returnJson($result);
		
	}	
	
	// Returns the cart plus payment info
	public static function reloadOrder(){
		error_log("CartAjax::reloadOrder()");
		$cart = self::getCartById();
		$orderID = $_POST['orderID'];
		$payments = OrderProxy::getPaymentsForOrder($orderID);
		
		$contactID = OrderProxy::getContactIDForOrder($orderID);
		
		$contact = ContactProxy::getContactByID($contactID);
		
		$billingAddressID = OrderProxy::getBillingAddressIDForOrder($orderID);
		$shippingAddressID = OrderProxy::getShippingAddressIDForOrder($orderID);
		
		$billingAddress = null;
		$shippingAddress = null;
		
		if (!empty($billingAddressID)){
			$billingAddress = ContactProxy::getAddressByID($billingAddressID);
		}
		
		if (!empty($shippingAddressID)){
			$shippingAddress = ContactProxy::getAddressByID($shippingAddressID);
		}
		
		if ($cart){
			$result = AjaxUtils::createResult('Cart found successfully',true, array('cart'=>$cart, 'payments'=>$payments, 'contact'=>$contact,'billingAddress'=>$billingAddress, 'shippingAddress'=>$shippingAddress));
		}else{
			$result = self::createCartNotFoundResult();
		}
		
		AjaxUtils::returnJson($result);
		
	}
	
	public static function addItem(){
		$cartID = $_POST['cartID'];
		error_log("add item, cartID: $cartID");
		
		$cart =& self::getCartById($cartID);
		$model = AjaxUtils::jsonDecodePostKey('model');
		
		$error = self::getLastJsonError();
		
		
		$result;

		if ($cart){
			$cartItemID = uniqid();
			$model->cartItemID = $cartItemID;
			$cart['items'][$cartItemID] = $model;
			$result = AjaxUtils::createResult('Item Added Successfully.', true, array('cartItemID'=>$cartItemID, 'cart'=>$cart, 'model'=>$model, 'jsonError'=>$error));
			self::overwriteCartInSession($cart);
		}else{
			$result = self::createCartNotFoundResult();
		}
		
		
		AjaxUtils::returnJson($result);
	}
	
	public static function updateItem(){
		
		$cart = self::getCartById();
		$model = AjaxUtils::jsonDecodePostKey('model');//json_decode(stripslashes($_POST['itemData']));
		$cartItemID = $model->cartItemID;
		$result;

		if ($cart){
			//$cart['items'][$cartItemID]['data'] = $cartItemData;
			$cart['items'][$cartItemID] = $model;
			$result = AjaxUtils::createResult('Item updated successfully', true, array('cart'=>$cart)); //'cart' added for debugging only
			self::overwriteCartInSession($cart);
			error_log(var_export($model, 1));
		}else{
			$result = self::createCartNotFoundResult();
		}
		
		AjaxUtils::returnJson($result);
	}
	
	
	public static function removeItem(){
		$cart = self::getCartById();
		
		if ($cart){
			$model = AjaxUtils::jsonDecodePostKey('model');
			$cartItemID = $model->cartItemID;
			
			unset($cart['items'][$cartItemID]);
			$result = AjaxUtils::createResult('Item removed successfully', true, array('cart'=>$cart));
			self::overwriteCartInSession($cart);
		}else{
			$result = self::createCartNotFoundResult();
		}
		
		AjaxUtils::returnJson($result);
	}
	

	
	public static function updateDiscount(){
		$cart = self::getCartById();
		
		if ($cart){
			$discountData = AjaxUtils::jsonDecodePostKey('discountData');
			$cart['discount'] = $discountData;
			$result = AjaxUtils::createResult('Cart discount updated successfully',true, array('cart'=>$cart));
			self::overwriteCartInSession($cart);
		}else{
			$result = self::createCartNotFoundResult();
		}
		
		AjaxUtils::returnJson($result);
	}
	
	
	
	public static function validateCoupon(){
		$cart = self::getCartById();
		
		if ($cart){
			$couponCode = $_POST['couponCode'];      
			
			if(empty($couponCode)){
				$result = AjaxUtils::createResult('Error: Coupon code empty.',false, array('couponCode'=>$couponCode, 'postCode'=>$_POST['couponCode'], 'jsonError'=>self::getLastJsonError()));
			}else{
				$argument = array(
						'post_type' => 'tc_coupon',
						'meta_key' => '_tc_coupon_code',
						'meta_value' => $couponCode,
						'numberposts' => 1,
						);
			                          
			
			
				// get the coupon if it exists
				$couponPosts = get_posts($argument);
			 
				if($couponPosts){
					$couponPost = $couponPosts[0];   
				 
					$couponMeta = get_metadata('post', $couponPost->ID);
				
					//TODO: make sure it's not expired       
					$enabled = $couponMeta['_tc_coupon_enabled'][0];
					
					
					if($enabled != "on"){
						$result = AjaxUtils::createResult('Invalid Coupon.',false, array('isDisabled'=>true));
						AjaxUtils::returnJson($result);
					}
					
					
					$currentDate = strtotime("now");
					
					$startDateString = $couponMeta['_tc_coupon_start_date'][0];
					
					if(!empty($startDateString)){
						$startDate = strtotime($startDateString);
						if ($currentDate < $startDate){
							$result = AjaxUtils::createResult('Invalid Coupon.',false, array('errorReason'=>'beforeStartDate'));
							AjaxUtils::returnJson($result);
						}
					}
					
					
					$endDateString = $couponMeta['_tc_coupon_end_date'][0];
					if(!empty($startDateString)){
						$endDate = strtotime($endDateString);				
						if ($currentDate > $endDate){
							$result = AjaxUtils::createResult('Invalid Coupon.',false, array('errorReason'=>'afterEndDate'));
							AjaxUtils::returnJson($result);
						}
					}
					
					

					
					
					$couponModel = array();
					$couponModel['discountAmount'] = (float)$couponMeta['_tc_coupon_discount_amount'][0];
					$couponModel['discountType'] = $couponMeta['_tc_coupon_priceOffsetType'][0];    
					$couponModel['code'] = $couponMeta['_tc_coupon_code'][0];  
					$freeShipping = $couponMeta['_tc_coupon_free_shipping'][0];
					$couponModel['freeShipping'] = ( !empty($freeShipping) && $freeShipping == "on" ) ? true : false;    
					$couponModel['title'] = $couponPost->post_title;    

					$cart['couponModel'] = $couponModel;      

					$result = AjaxUtils::createResult('Coupon validated successfully',true, array('couponModel'=>$couponModel));
					self::overwriteCartInSession($cart);
				    

				}else{
					$result = AjaxUtils::createResult('Coupon not found.',false, array('argument'=>$argument));
				}
			}
			
		}else{
			$result = self::createCartNotFoundResult();
		}
		
		AjaxUtils::returnJson($result);
	}
	
	
	public static function removeCoupon(){
		$cart = self::getCartById();
		
		if ($cart){			
			unset($cart['couponModel']);
			$result = AjaxUtils::createResult('Coupon removed successfully',true, array('cart'=>$cart));
			self::overwriteCartInSession($cart);
		}else{
			$result = self::createCartNotFoundResult();
		}
		
		AjaxUtils::returnJson($result);
	}
	
				
	public static function enableTax(){
		$cart = self::getCartById();
		
		if ($cart){	
			$taxEnabled = $_POST['taxEnabled'];
			$cart['taxEnabled'] = $taxEnabled;
			
			$result = AjaxUtils::createResult('Tax setting updated successfully',true, array('cart'=>$cart));
			self::overwriteCartInSession($cart);
		}else{
			$result = self::createCartNotFoundResult();
		}
		
		AjaxUtils::returnJson($result);
	}
	
			
	
	
	
	
	public static function setShipping($cartID, $shipping){
		$cart = self::getCartById($cartID);
		
		if ($cart){
			$cart['shipping'] = $shipping;
			$result = AjaxUtils::createResult('Shipping updated successfully',true, array('cart'=>$cart));
			
			self::overwriteCartInSession($cart);
		}else{
			$result = self::createCartNotFoundResult();
		}
		
		return $result;
	}
	
	public static function overwriteCartInSession($cart){
		$cartID = $cart['id'];
		error_log("overwriteCartInSession, cartID = $cartID");
		$_SESSION['cart_'.$cartID ] = $cart;
	}
	
	private static function echoJson($result){
		
	}

	private static function createCartNotFoundResult($arrayToMerge = null){
		$result = array('success'=>false, 'errorMessage'=>'Cart not found.', 'session'=>$_SESSION, 'sessionID'=>session_id() );
		if (!empty($arrayToMerge)){
			$result = array_merge($result, $arrayToMerge);
		}
		
		return $result;
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
	


	
}
?>