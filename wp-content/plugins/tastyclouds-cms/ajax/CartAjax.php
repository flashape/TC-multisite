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
	
	
	public function getUpsellPopup(){
		$productID = $_POST['productID'];
		
		if (empty($productID) || !is_numeric($productID)){
			error_log("CatAjax::getUpsellPopup, invalid productID");
			die('Error');
		}
		

	
	
		
		//$content =  "<b>Item (ID : $productID) successfully added to cart.  What next?</b>";
		
		AjaxUtils::returnHTML($content);
		
		
		
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
	
	public static function getCartIDFromSession(){
		$cartKey = CartAjax::hasCartInSession();
		error_log("getCartIDFromSession, cartKey : $cartKey");
		if ($cartKey !== FALSE){
			$cartID = str_replace('cart_', '', $cartKey);
			return $cartID;
		}
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
	
	// sends the cart to the front end /cart page.
	public static function loadCart(){
		$cart = self::getCartById( self::getCartIDFromSession() );
		
		if ($cart){
			$result = AjaxUtils::createResult('Cart found successfully',true, array('cart'=>$cart));
		}else{
			$result = self::createCartNotFoundResult();
		}
		
		AjaxUtils::returnJson($result);
		
		
	}
	
	
	// Returns the cart to admin order edit screen
	public static function getCart(){
		$cart = self::getCartById();
		
		if ($cart){
			$result = AjaxUtils::createResult('Cart found successfully',true, array('cart'=>$cart));
		}else{
			$result = self::createCartNotFoundResult();
		}
		
		AjaxUtils::returnJson($result);
		
	}	
	
	
	public static function isEmpty($cart){
		if ( !isset($cart) || !isset($cart['items']) || empty($cart['items']) ) {
			return true;		
		}else{
			return false;
		}
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
	
	
	// called from product-select page template.
	public static function getUpdatedProductPrice(){
		error_log("add item, cartID: $cartID");
		
		$cart = self::getCartById( self::getCartIDFromSession() );
		
		$result;
		
		if (!$cart){
			$result = self::createCartNotFoundResult();
		}else{
			$productID = $_POST['productID'];
		
			$productModel = ProductProxy::getProductByID($productID);
			
			$basePrice = $productModel['price'];
			
			$itemPrice = $basePrice;
			
			$variationItemID  = $_POST['variationItemID'];
		
			if( !empty( $variationItemID ) ){
				
				$variations = ProductVariationRulesAjax::getVariationsForProduct($productID, true);
				foreach ($variations as $variation) {
				
					$rules = ProductVariationRulesAjax::getRulesForVariation($productID, $variation->variationID, $variation->p2pid, true);
				
					if (!empty($rules)){
						$itemPrice = ProductProxy::getAdjustedPriceFromRules($itemPrice, $variationItemID, $variation->p2pid, $rules);
					}
				}
			}
			
			
			$result = AjaxUtils::createResult('Item Added Successfully.', true, array('price'=>$itemPrice));
			
			
			
		}
		
		AjaxUtils::returnJson($result);
		
		
		
	}
	
	
	// called from product-select page template.
	public static function addCartProductByID(){
		error_log("addCartProductByID");
		
		$cart = self::getCartById( self::getCartIDFromSession() );
		
		$result;
		
		if (!$cart){
			$result = self::createCartNotFoundResult();
		}else{
		
			$nonce = $_POST['addToCartNonce'];

		
			// Add-to-cart AJAX requests from the front end of the site
			// will have a (meaningless) 'site' variable sent with the request,
			// requests from the admin will not.
		
			if (isset($_POST['site'])){
				// check to see if the submitted nonce matches with the
			    // generated nonce we created earlier
				error_log("request is from front end, checking nonce...");
			    if ( ! wp_verify_nonce( $nonce, 'tc_add_to_cart_nonce' ) ){
					$result = AjaxUtils::createResult('Invalid request.',false);
				}
				error_log("nonce is valid.");	
			}
		
		
			$productID = $_POST['productID'];
		
			$productModel = ProductProxy::getProductByID($productID);
		
		
			$variations = ProductVariationRulesAjax::getVariationsForProduct($productID, true);


			foreach($variations as &$variation){
				//error_log(var_export($variation, 1));
			
				$variation['items'] = VariationItemAjax::getItemsForVariation($variation['id'], true);
				$variation['rules'] = ProductVariationRulesAjax::getRulesForVariation($productID, $variation['id'], $variation['p2p_id'], true);
				//error_log(var_export($variation, 1));
			
			}

			$productModel['variations'] = $variations;
		
			// TODO:  IF there are other variations attached to the page that was adding this item, add them here
		
			$model = new stdClass();
			$model->productID = $productID;
			$model->price = $productModel['price'];
			$model->type = 'tc_products';
			$model->quantity = 1;
			$model->taxable = false;
		
			$cartItemID = uniqid();
			$model->cartItemID = $cartItemID;
		
			$cart['items'][$cartItemID] = $model;
		
			$model->variations = array();
		
			$variationItemID  = $_POST['variationItemID'];
		
			if( !empty( $variationItemID ) ){
			
				// Check each variation assigned to this product,
				// IF the provided $variationItemID is in the $variation['items'] array,
				// create a variation model for it in the $model->variations array
			
				// $variation['p2p_id']
				// $variation['selected'] // array
				// $variation['variationID']
			
				foreach ($productModel['variations'] as $productVariation) {
					$variationItemIDs = array_keys($productVariation['items']);
					if( in_array($variationItemID, $variationItemIDs) ){
						$model->variations[] = array(
							'p2p_id' => $productVariation['p2p_id'],
							'variationID' => $productVariation['id'],
							'selected' => array($variationItemID)
						);
					}
				}
			
			}
		
			$cart['items'][$cartItemID] = $model;
			$arrayToReturn = array('cartItemID'=>$cartItemID, 'cart'=>$cart, 'model'=>$model);
		
			if(isset($_POST['site'])){
				ob_start();
				include(TASTY_CMS_PLUGIN_INC_DIR.'upsell.php');
				$arrayToReturn['popupContent'] = ob_get_clean();
			}
		
		
			$result = AjaxUtils::createResult('Item Added Successfully.', true, $arrayToReturn);
			self::overwriteCartInSession($cart);
		

		}
		

		
		AjaxUtils::returnJson($result);
		
		
		
	}
	
	public static function addItem(){
		$cartID = $_POST['cartID'];
		error_log("add item, cartID: $cartID");
		
		$nonce = $_POST['addToCartNonce'];

		
		// Add-to-cart AJAX requests from the front end of the site
		// will have a (meaningless) 'site' variable sent with the request,
		// requests from the admin will not.
		
		if (isset($_POST['site'])){
			// check to see if the submitted nonce matches with the
		    // generated nonce we created earlier
			error_log("request is from front end, checking nonce...");
		    if ( ! wp_verify_nonce( $nonce, 'tc_add_to_cart_nonce' ) ){
				$result = AjaxUtils::createResult('Invalid request.',false);
			}
			error_log("nonce is valid.");	
		}
		
		
		
		$cart =& self::getCartById($cartID);
		$model = AjaxUtils::jsonDecodePostKey('model');
		$productID = $model->productID;
		
		$productModel = ProductProxy::getProductByID($productID);
		
		if(!$productModel){
			$result = AjaxUtils::createResult('Product not found.',false);
		}
		
		// requests from the front end of the site
		// won't contain price data to prevent tampering.
		if(!isset($model->price)){
			error_log("product price was not set, using default price.");
			$model->price = $productModel['price'];
		}
		
		$error = self::getLastJsonError();
		
		
		$result;

		if ($cart){
			$cartItemID = uniqid();
			$model->cartItemID = $cartItemID;
			$cart['items'][$cartItemID] = $model;
			$arrayToReturn = array('cartItemID'=>$cartItemID, 'cart'=>$cart, 'model'=>$model, 'jsonError'=>$error);
			
			if(isset($_POST['site'])){
				ob_start();
				include(TASTY_CMS_PLUGIN_INC_DIR.'upsell.php');
				$arrayToReturn['popupContent'] = ob_get_clean();
			}
			
			
			$result = AjaxUtils::createResult('Item Added Successfully.', true, $arrayToReturn);
			self::overwriteCartInSession($cart);
		}else{
			$result = self::createCartNotFoundResult();
		}
		
		
		AjaxUtils::returnJson($result);
	}
	
	
	// updates the item quantity from /cart front end page.
	public static function updateQuantity(){
		
		$cart = self::getCartById( self::getCartIDFromSession() );
		$cartItemID = $_POST['cartItemID'];
		$newQuantity = $_POST['quantity'];
		$result;

		if ($cart){
			$model =& $cart['items'][$cartItemID];
			$model->quantity = $newQuantity;
			
			
			$result = AjaxUtils::createResult('Quantity updated successfully', true, array('cart'=>$cart)); //'cart' added for debugging only
			self::overwriteCartInSession($cart);
			error_log(var_export($model, 1));
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
			error_log(var_export($cart, 1));
		}else{
			$result = self::createCartNotFoundResult();
		}
		
		AjaxUtils::returnJson($result);
	}
	
	public static function removeItemByID(){
		$cart = self::getCartById( self::getCartIDFromSession() );
		if ($cart){

			$cartItemID = $_POST['cartItemID'];
			
			unset($cart['items'][$cartItemID]);
			$result = AjaxUtils::createResult('Item removed successfully', true, array('cart'=>$cart));
			self::overwriteCartInSession($cart);
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
	
	
	// called from website front end checkout form
	public static function validateCouponForCheckout(){
		self::validateCoupon( self::getCartIDFromSession() );
	}
	
	
	
	public static function validateCoupon($cartID = null){
		$cart = self::getCartById($cartID);
		
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
	
	
	
	
	public static function removeCouponForCheckout(){
		self::removeCoupon( self::getCartIDFromSession() );
	}
	
	
	public static function removeCoupon($cartID = null){
		$cart = self::getCartById($cartID);
		
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
	
	public static function selectShippingForCheckout(){
		$cartID = self::getCartIDFromSession();
		
		$cart = self::getCartById($cartID);
		
		if($cart){
			$shipmentType = $_POST['shipmentType'];

			if ($shipmentType == 'PICKUP'){
				$shipping = array('amount'=>0, 'serviceType'=>$shipmentType);
			}else{
				// get the shipping results that have been stored as a transient option
				$shippingCharges = get_transient("ship_{$cartID}");
				foreach($shippingCharges as $shipCharge){
					if ($shipCharge['serviceType'] == $shipmentType){
						$shipAmount = $shipCharge['amount'];
						break;
					}
				}

				//error_log(var_export($shippingCharges, 1));
				$shipping = array('amount'=>$shipAmount, 'serviceType'=>$shipmentType);
			}
			
			$result = CartAjax::setShipping($cartID, $shipping);
			
			
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
	
	
	public static function createCharge(){
		// TODO:  submit payment to stripe
		// set your secret key: remember to change this to your live secret key in production
		// see your keys here https://manage.stripe.com/account
		
		require_once(TASTY_CMS_PLUGIN_LIBS_DIR.'stripe/Stripe.php');
		Stripe::setApiKey("YUHmdlnsLPInqkUrAWZxKrO82hRDgQDQ");

		$token = $_POST['stripeToken'];
		//$amount = $_POST['amount'];
		
		$cartID = self::getCartIDFromSession();
		
		$cart = self::getCartById($cartID);
		
		if($cart){
		
			$summary = OrderProxy::getOrderSummary($cart);
			//error_log(var_export($summary, 1));
			$orderTotal = OrderProxy::getOrderTotalFromSummary($summary);
			

			$description = array('cartID'=>self::getCartById($cartID));
		
			$descriptionJSON = json_encode($description);
		
			// front end orders are always pay in full, no partial payments
			$paymentAmount = $orderTotal;
			$paymentAmountInCents = $paymentAmount * 100;
			error_log("attempting to create charge for amount of $paymentAmount");
			
			try{
				$stripeCharge = Stripe_Charge::create(array(
					  "amount" => $paymentAmountInCents, // amount in cents, again
					  "currency" => "usd",
					  "card" => $token,
					  "description" => $descriptionJSON 
					)
				);
			
				set_transient('charge_'.$cartID, $stripeCharge, 60 * 60); // save the results for 1 hour
				
				// error_log("Stripe charge :");
				// error_log(var_export($stripeCharge, 1));
				
				// we dont need to send any ID back, when this repsonse is received in the browser
				// it will submit the checkout form, and we can pull the transient charge from the db by the cartID	
				$result = AjaxUtils::createResult('Charge created successfully',true);
				//$result = AjaxUtils::createResult('Charge created successfully',true, array('chargeID'=>$stripeCharge->id, 'cartID'=>$cartID));
			
			}catch(Exception $e){
				error_log(var_export($e, 1));
				$result = AjaxUtils::createResult('Error creating charge : '.$e->json_body['error']['message'], false, array('exception'=>$e));
			
			}
		}else{
			$result = self::createCartNotFoundResult();
		}
		
		
		
		AjaxUtils::returnJson($result);
		
		
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