<?php
// $redirect_to = 'http://google.com';
// wp_redirect($redirect_to,301);

$cartKey = CartAjax::hasCartInSession();
error_log("page_process, cartKey : $cartKey");
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
	
	
	$saveFrontEndOrderCommand = new SaveFrontEndOrderCommand($orderID, $cart, $cartID);
	$saveFrontEndOrderCommand->execute();
	
	// Delete the shopping cart from the session
	CartAjax::removeCartInSession($cartKey);
	
	wp_redirect("https://tastyclouds.com/checkout/thankyou?oid=$orderID", 303);
	
	
}
//TODO:  redirect to cart.php if the cart is empty.
?>




<?php get_header(); ?>

<div id="page" class="clearfix">

	<h1 class="page-title" id="post-<?php the_ID(); ?>"><?php the_title(); ?></h1>
	<?php echo var_export($_POST, 1);?>
	
</div>
<?php get_footer(); ?>