<?php
// $redirect_to = 'http://google.com';
// wp_redirect($redirect_to,301);

$cartKey = CartAjax::hasCartInSession();
if ($cartKey !== FALSE){
	$cartID = str_replace('cart_', '', $cartKey);
	$cart = CartAjax::getCartById($cartID );
	
	// Need to do some prep work here before executing SaveFrontEndOrderCommand...
	
	
	// save the order
	$orderID = OrderProxy::insertNew();

	
	if ($orderID > 0){
		error_log('Order post created : '.$orderID);
	}else{
		error_log('Error creating order post!');
	}
	
	
	
	// if this is a shipping order, save the selected
	// shipping method with the order
	$shipmentType = $_POST['shipmentType'];
	
	if ($shipmentType != 'PICKUP'){
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
		
		$shippingResult = CartAjax::setShipping($cartID, $shipping);
		
		if($shippingResult['success']){
			$cart = CartAjax::getCartById($cartID );
			//error_log(var_export($cart, 1));
		}
		
	}
	
	
	
	
	
	
}
//TODO:  redirect to cart.php if the cart is empty.
?>




<?php get_header(); ?>

<div id="page" class="clearfix">

	<h1 class="page-title" id="post-<?php the_ID(); ?>"><?php the_title(); ?></h1>
	<?php echo var_export($_POST, 1);?>
	
</div>
<?php get_footer(); ?>