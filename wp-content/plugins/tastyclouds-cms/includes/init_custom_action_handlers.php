<?php
add_action( 'tc_create_contact', 'insertNewContact' );
add_action( 'tc_update_contact_meta', 'updateContactMeta', 10, 2 );
add_action( 'tc_create_payment', 'insertNewPayment', 10, 2 );
add_action( 'tc_create_contact_address', 'insertNewAddress', 10 );

function insertNewContact($data){
	error_log("insertNewContact()");
	
	if ($data['use_post']){
		$customerFirstName = $_POST['customer_address_first_name'];
		$customerLastName = $_POST['customer_address_last_name'];
		$customerEmail = $_POST['customer_email'];
		$customerPhone = $_POST['customer_phone'];
		$customerCompany = $_POST['customer_company'];
	}
	
   $contact = array(
		'post_title' => "$customerFirstName $customerLastName",
		'post_content' => ' ',
		'post_status' => 'publish',
		'post_type' => "tc_contact"
             );
	
	$contactID = wp_insert_post($contact);
	error_log("insertNewContact tc_contact contactID : ".$contactID);
	
	$newMeta = array(
		'customerFirstName'=>$customerFirstName,
		'customerLastName'=>$customerLastName,
		'customerEmail'=>$customerEmail,
		'customerPhone'=>$customerPhone,
		'customerCompany'=>$customerCompany
	);
	
	do_action('tc_update_contact_meta', $contactID, $newMeta);
	//updateContactMeta($contactID, $metaToUpdate);
	
	if( isset($data['attach_to_order_id']) ){
		p2p_type( 'contact_to_order' )->connect( $contactID, $data['attach_to_order_id'], array(
			'date' => current_time('mysql'),			
		) );
	}
	
	
	
	
	// if billing address info was provided, save it.
	// If the info was submitted, always save it as a new address,
	// then attach it to both the contact as well as the order.
	if ($data['use_post']){
		$orderID = $data['attach_to_order_id'];
		
		$billingFirstName = $_POST['billing_address_first_name'];
		$billingLastName = $_POST['billing_address_last_name'];
		$billingAddressLine1 = $_POST['billing_address_line_1'];
		$billingAddressLine2 = $_POST['billing_address_line_2'];
		$billingCity = $_POST['billing_address_city'];
		$billingState = $_POST['billing_address_state'];
		$billingZip = $_POST['billing_address_zip'];
		$billingCompany = $_POST['billing_address_company'];
		
		if (empty($_POST['tc_selected_contact'] ) ){
			if( !empty($billingFirstName) || 
				!empty($billingLastName) || 
				!empty($billingAddressLine1) || 
				!empty($billingAddressLine2) || 
				!empty($billingZip) 
				){
					
				$billingAddress = array(
					'firstName'=>$billingFirstName,
					'lastName'=>$billingLastName,
					'addressLine1'=>$billingAddressLine1,
					'addressLine2'=>$billingAddressLine2,
					'city'=>$billingCity,
					'state'=>$billingState,
					'zip'=>$billingZip,
					'company'=>$billingCompany,
					'type'=>'billing',
				);
	 			do_action('tc_create_contact_address', array('address'=>$billingAddress, 'type'=>'billing', 'attach_to_order_id'=>$orderID, 'attach_to_contact_id'=>$post_id));
			}
		}
	
	
		// if shipping address info was provided, save that
		// If the info was submitted, always save it as a new address.
		// then attach it to both the contact as well as the order.
	
		$shippingFirstName = $_POST['shipping_address_first_name'];
		$shippingLastName = $_POST['shipping_address_last_name'];
		$shippingAddressLine1 = $_POST['shipping_address_line_1'];
		$shippingAddressLine2 = $_POST['shipping_address_line_2'];
		$shippingCity = $_POST['shipping_address_city'];
		$shippingState = $_POST['shipping_address_state'];
		$shippingZip = $_POST['shipping_address_zip'];
		$shippingCompany = $_POST['shipping_address_company'];
	}
	
	
	if (empty($_POST['tc_selected_contact'] ) ){
		if( !empty($shippingFirstName) || 
			!empty($shippingLastName) || 
			!empty($shippingAddressLine1) || 
			!empty($shippingAddressLine2) || 
			!empty($shippingZip) 
			){
				
			$shippingAddress = array(
				'firstName'=>$shippingFirstName,
				'lastName'=>$shippingLastName,
				'addressLine1'=>$shippingAddressLine1,
				'addressLine2'=>$shippingAddressLine2,
				'city'=>$shippingCity,
				'state'=>$shippingState,
				'zip'=>$shippingZip,
				'company'=>$shippingCompany,
				'type'=>'shipping',
			);
			
 			do_action('tc_create_contact_address', array('address'=>$shippingAddress, 'type'=>'shipping', 'attach_to_order_id'=>$orderID, 'attach_to_contact_id'=>$post_id));
		}
	}
	
	
	updateContactTaxonomyTerms($contactID);
	
	

}


function updateContactMeta($contactID, $newMeta){
	error_log("updateContactMeta($contactID)");
	global $wpdb;
	// first check to see if our Contact's first and last names have changed,
	// if they have update the post title
	$oldFirstName = get_post_meta( $contactID,'customer_adddress_first_name', true);
	$oldLastName = get_post_meta( $contactID,'customer_adddress_last_name', true);
	
	$newFirstName = $newMeta['customer_adddress_first_name'];
	$newLastName = $newMeta['customer_adddress_last_name'];
	
	
	if ($newFirstName != $oldFirstName || $newLastName != $oldLastName ){
		$newTitle =   "$newFirstName $newLastName";

		$mytitle = $wpdb->escape( $newTitle );
		$wpdb->query( "UPDATE $wpdb->posts SET post_title = '$mytitle' WHERE ID = $contactID" );
	}
	

	foreach ( $newMeta as $key => $value ) {
		update_post_meta( $contactID, $key, $value );
	}


	
}

function updateContactTaxonomyTerms($contactID){
	// the $_POST[tax_input] arrays come in with the ta term id's as a string, i.e.:
	// 		array (0 => '0', 1 => '17', 2 => '9')
	// we need to convert those string id's to ints before saving, 
	// or else WP will create new terms for the taxonomy using the id's as names
	
	if (isset($_POST['tax_input']['tc_how_heard'])){
		$integers = array_map ('intval', $_POST['tax_input']['tc_how_heard']);
		wp_set_object_terms( $contactID, $integers, 'tc_how_heard' );
	};
	
	if (isset($_POST['tax_input']['tc_inq_reason'])){
		$integers = array_map ('intval', $_POST['tax_input']['tc_inq_reason']);
		wp_set_object_terms( $contactID, $integers, 'tc_inq_reason' );
	};
	
	if (isset($_POST['tax_input']['tc_inquirer_type'])){
		$integers = array_map ('intval', $_POST['tax_input']['tc_inquirer_type']);
		
		wp_set_object_terms( $contactID, $integers, 'tc_inquirer_type' );
	};
	
	if (isset($_POST['tax_input']['tc_poc'])){
		$integers = array_map ('intval', $_POST['tax_input']['tc_poc']);
		wp_set_object_terms( $contactID, $integers, 'tc_poc' );
	};
}

function insertNewAddress($data){
	
	$orderID = $data['attach_to_order_id'];
	$contactID = $data['attach_to_contact_id'];
	$address =$data['address'];
	$addressType =$data['type'];
	
	
   	$addressPost = array(
		'post_title' => 'Customer Address',
		'post_content' => " ",
		'post_status' => 'publish',
		'post_type' => "tc_contact_address"
             );
	
	$addressID = wp_insert_post($addressPost);
	
	if ($addressID > 0){
		
		update_post_meta($addressID, 'addressModel', $address);
		
		if( isset($data['attach_to_contact_id']) ){
			p2p_type( 'address_to_contact' )->connect( $addressID, $contactID, array(
				'addressType' => $addressType			
			) );
		}			
		
		if( isset($data['attach_to_order_id']) ){
			p2p_type( $addressType.'_address_to_order' )->connect( $addressID, $orderID );
		}
		
	}
}



function insertNewPayment($data){
	if( $data['use_post'] ){
		$paymentType = $_POST['payment_type'];
		$paymentAmount = $_POST['payment_amount'];
		$paymentNote = $_POST['payment_amount'];
	}
	
	$orderID = $data['attach_to_order_id'];
	
	
	if (!empty($paymentType) && !empty($paymentAmount)){
		$model = array(
			'paymentType' => $paymentType,
			'paymentAmount' => $paymentAmount,
			'paymentNote' => $paymentNote,
		);
	   $payment = array(
			'post_title' => 'Payment For Order ID '.$orderID .'(via '.$paymentType.') : '.$paymentAmount,
			'post_content' => "$paymentType payment for orderID  $orderID",
			'post_status' => 'publish',
			'post_type' => "tc_payment"
	             );
	
		$paymentID = wp_insert_post($payment);
		
		if ($paymentID > 0){
			
			if( isset($data['attach_to_order_id']) ){
				p2p_type( 'payment_to_order' )->connect( $paymentID, $orderID, array(
					'date' => current_time('mysql'),			
				) );
			}
			
			update_post_meta($paymentID, 'paymentModel', $model);
		}
	}
	

	
}


?>