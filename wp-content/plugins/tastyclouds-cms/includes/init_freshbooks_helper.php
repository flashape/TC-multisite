<?php
add_action('transition_post_status','tc_on_order_transition_post_status',10,3);

function tc_on_order_transition_post_status($new, $old, $post){
    // Make sure the post obj is present and complete. If not, bail.
    if(!is_object($post) || !isset($post->post_type)) {
        return;
    }

    if($post->post_type == 'tc_order') {
			
		if ($new == 'publish' && $old != 'publish'){
			error_log("\n tc_on_order_transition_post_status \n");
			// the transition_post_status hook fires immediately before the save_post hook,
			// so we add metadata to the order post here to let the OrderDetailsMetabox 
			// save_action handler do its thing
			update_post_meta($post->ID, '_is_new_order', true);
			
			// $cartID = $_POST['cartID'];
			// $cart = CartAjax::getCartById($cartID);
			// 
			// 
			// // can probably move this to OrderDetailsMetabox 'save_filter'
			// tc_save_cart_to_db($cart, $post);
			// 
			// 
			// // Save a payment post first if necessary,  
			// // since we'll want that regardless of saving to FB or not.
			// $paymentPostID = savePaymentPost();
			// 
			// // TODO: determine if we want to save this invoice to FB.
			// $orderType = $_POST['_tc_order_type'];
			// 
			// 
			// // if we are saving any type of order except "Walk In", link with freshbooks
			// // to send customer an invoice.
			// if ($orderType == "113"){ // 113 is a walk-in order
			// 	return;
			// }
			// 
			// // Freshbooks requires a valid email address for a client,
			// // so make sure we have one before attempting to add. 
			// $email = $_POST['_tc_crm_contact_personal_email'];
			// 
			// if (empty($email) || filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE){
			// 	error_log("\n\nNo valid email provided, skipping Freshbooks invoice.\n\n");								
			// 	
			// 	return;
			// }
			// 
			// 
			// 
			// require_once('freshbooks/FreshbooksService.php');
			// require_once('freshbooks/FreshbooksUtils.php');
			// $freshbooksService = new FreshbooksService();
			// 
			// 
			// $contactID = $_POST['panalo_selected_contact'];
			// 
			// 
			// $fbClientID = panalo_get_or_create_freshbooks_id($contactID, $freshbooksService);
			// 
			// /**********************************************
			//  * Now that we have a client id for Freshbooks,
			//  * create a new invoice for the order.
			// //  **********************************************/
			// $invoice = FreshbooksUtils::getInvoiceFromCart($fbClientID, $cart);
			// $createInvoiceResult = $freshbooksService->createInvoice($invoice);
			// $invoiceResponse = $createInvoiceResult['response'];
			// 
			// if ($createInvoiceResult['success']){
			// 	error_log("\n\nSuccessfully created new invoice on freshbooks!");								
			// 	$invoiceID = $invoiceResponse['invoice_id'];
			// }else{
			// 	error_log("\n\nError adding invoice to fresbooks");
			// 	error_log(print_r($invoiceResponse, 1));
			// 	error_log(print_r($createInvoiceResult['error'], 1));
			// 	return;
			// }
			// 
			// /**********************************************
			//  * If there was a payment submitted with this order,
			//  * save the payment as a post, save it to Freshbooks, 
			//  * and add the payment to the invoice
			// //  **********************************************/
			// if ($paymentPostID !== false){
			// 	// save payment to Freshbooks
			// 	$payment = FreshbooksUtils::createNewInvoicePaymentFromPost($invoiceID);
			// 	$createPaymentResult = $freshbooksService->createPaymentForInvoice($payment);
			// 	$paymentResponse = $createPaymentResult['response'];
			// 	
			// 	if ($createPaymentResult['success']){
			// 		error_log("\n\nSuccessfully created new payment on freshbooks!");
			// 		$invoicePaymentID = $paymentResponse['payment_id'];
			// 		update_post_meta($paymentPostID, '_tc_crm_payment_fbid', $invoicePaymentID);
			// 	}else{
			// 		error_log("\n\nError adding payment to fresbooks");
			// 		error_log(print_r($paymentResponse, 1));
			// 		error_log(print_r($createPaymentResult['error'], 1));
			// 		return;
			// 	}
			// }
			// 
			// 
			// /**********************************************
			//  * Now that the invoice is ready, email to the client
			// //  **********************************************/
			// $emailInfo = array();
			// $emailInfo['invoice_id'] = $invoiceID;
			// $emailInfo['message'] = 'You have a new invoice. Get it here: ::invoice link::';
			// $emailInfo['subject'] = 'Tasty Clouds Cotton Candy Company : Invoice';
			// 
			// $sendInvoiceResult = $freshbooksService->sendInvoiceByEmail($emailInfo);
			// $sendInvoiceResponse = $sendInvoiceResult['response'];
			// 
			// if ($sendInvoiceResult['success']){
			// 	error_log("\n\nSuccessfully send email!");
			// 	
			// }else{
			// 	error_log("\n\nError sending email");
			// 	error_log(print_r($sendInvoiceResponse, 1));
			// 	error_log(print_r($sendInvoiceResult['error'], 1));
			// 	return;
			// }
			
		}
	}
}


function tc_save_cart_to_db($cart, $post){
	// save the cart to the db from the session
	global $wpdb;
	$cartID = $_POST['cartID'];
	$serializedCart = base64_encode(serialize($cart));
	update_post_meta( $post->ID, '_tc_cart', $serializedCart);
	update_post_meta( $post->ID, '_cartID', $cartID);
	
	// $tablename = $wpdb->prefix . 'tc_carts';
	// $values = array(
	// 	'name' => $cartID,
	// 	'items' => $serializedCart,
	// 	'inserted' => current_time('mysql')
	// );
	// $wpdb->insert($tablename, $values);
	// 
	// add the cartID to the order post metadata
	// update_post_meta( $post->ID, '_tc_cart_id', $wpdb->insert_id );
	
}



function tc_get_or_create_freshbooks_id($contactID, $freshbooksService){
	// if $contactID is not "null",
	// check and see if this contact already has 
	// an associated Freshbooks account.
	if ( is_numeric($contactID)){
		
		$fbClientID = get_post_meta($contactID, '_panalo_fb_id', true);
		if ( !empty($fbClientID)) {
			
			return $fbClientID;
		}
	}
	
	
	
	// if $contactID is "null",
	require_once('freshbooks/FreshbooksUtils.php');
	$client = FreshbooksUtils::createNewClientObjectFromPost();
	
	$createClientResult = $freshbooksService->createNewClient($client);
	//$createClientResult = tc_crm_create_new_freshbooks_client($freshbooksService);
	
	$response = $createClientResult['response'];
	error_log(var_export($response, 1));
	if ($createClientResult['success']){
		error_log("\n\nSuccessfully created new client on freshbooks!");
		$fbClientID = $response['client_id'];
		update_post_meta($contactID, '_panalo_fb_id', $fbClientID);
		return $fbClientID;
	}else{
		// throw a fit
		error_log("\n\nError adding client to fresbooks");
		error_log(print_r($response, 1));
		error_log(print_r($createClientResult['error'], 1));
		return;
	}
} 


?>