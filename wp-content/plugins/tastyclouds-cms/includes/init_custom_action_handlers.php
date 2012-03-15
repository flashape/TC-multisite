<?php
add_action( 'tc_create_contact', 'insertNewContact' );
add_action( 'tc_update_contact_meta', 'updateContactMeta', 10, 2 );
add_action( 'tc_create_payment', 'insertNewPayment', 10, 2 );

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

	// the $_POST[tax_input] arrays come in with the ta term id's as a string, i.e.:
	// 		array (0 => '0', 1 => '17', 2 => '9')
	// we need to convert those string id's to ints before saving, 
	// or else WP will create new terms for the taxonomy using the id's as names
	
	// if (isset($_POST['tax_input']['panalo_how_heard'])){
	// 	$integers = array_map ('intval', $_POST['tax_input']['panalo_how_heard']);
	// 	wp_set_object_terms( $post_id, $integers, 'panalo_how_heard' );
	// };
	// 
	// if (isset($_POST['tax_input']['panalo_inq_reason'])){
	// 	$integers = array_map ('intval', $_POST['tax_input']['panalo_inq_reason']);
	// 	wp_set_object_terms( $post_id, $integers, 'panalo_inq_reason' );
	// };
	// 
	// if (isset($_POST['tax_input']['panalo_inquirer_type'])){
	// 	$integers = array_map ('intval', $_POST['tax_input']['panalo_inquirer_type']);
	// 	
	// 	wp_set_object_terms( $post_id, $integers, 'panalo_inquirer_type' );
	// };
	// 
	// if (isset($_POST['tax_input']['panalo_poc'])){
	// 	$integers = array_map ('intval', $_POST['tax_input']['panalo_poc']);
	// 	wp_set_object_terms( $post_id, $integers, 'panalo_poc' );
	// };
	
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