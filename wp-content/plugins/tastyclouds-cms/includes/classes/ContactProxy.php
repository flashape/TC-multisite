<?php

/**
* 
*/
class ContactProxy	
{
	
	function __construct()
	{
	}
	
	public static function createNew($data)
	{
		error_log("ContactProxy.createNew()");

		if ($data['use_post']){
			$customerFirstName = $_POST['customer_address_first_name'];
			$customerLastName = $_POST['customer_address_last_name'];
			$customerEmail = $_POST['customer_email'];
			$customerPhone = $_POST['customer_phone'];
			$customerCompany = $_POST['customer_company'];
		}else{
			// if not getting values from post, $data is expected to have a 'contactModel' property
			$customerFirstName = $data['contactModel']['customerFirstName'];
			$customerLastName = $data['contactModel']['customerLastName'];
		}

	   $contact = array(
			'post_title' => "$customerFirstName $customerLastName",
			'post_content' => ' ',
			'post_status' => 'publish',
			'post_type' => "tc_contact"
	             );

		$contactID = wp_insert_post($contact);
		error_log("insertNewContact tc_contact contactID : ".$contactID);
		
		return $contactID;
	}
	
	public function updateMeta($newMeta)
	{
		global $wpdb;
		
		$contactID = $newMeta['contactID'];
		error_log("updateContactMeta($contactID)");
		
		
		// first check to see if our Contact's first and last names have changed,
		// if they have update the post title
		$oldFirstName = get_post_meta( $contactID,'customerFirstName', true);
		$oldLastName = get_post_meta( $contactID,'customerLastName', true);

		$newFirstName = @$newMeta['customerFirstName'];
		$newLastName = @$newMeta['customerLastName'];
		error_log("oldFirstName : $oldFirstName");
		error_log("oldLastName : $oldLastName");
		error_log("newFirstName : $newFirstName");
		error_log("newLastName : $newLastName");


		if ($newFirstName != $oldFirstName || $newLastName != $oldLastName ){
			$newTitle =   "$newFirstName $newLastName";
			$mytitle = $wpdb->escape( $newTitle );
			$wpdb->query( "UPDATE $wpdb->posts SET post_title = '$mytitle' WHERE ID = $contactID" );
		}


		foreach ( $newMeta as $key => $value ) {
			update_post_meta( $contactID, $key, $value );
		}
		
		
	}
	
	public static function getContactByID($contactID){
		
		// if the tc_selected_contact var is empty, and user info was submitted, save a new contact
		$customerFirstName = 	get_post_meta( $contactID,'customerFirstName', true);
		$customerLastName = 	get_post_meta( $contactID,'customerLastName', true);
		$customerEmail = 		get_post_meta( $contactID,'customerEmail', true);
		$customerPhone = 		get_post_meta( $contactID,'customerPhone', true);
		$customerCompany = 		get_post_meta( $contactID,'customerCompany', true);
		$contactID = 			get_post_meta( $contactID,'contactID', true);

		$contactModel = array(
			'contactID'=>$contactID,
			'customerFirstName'=>$customerFirstName,
			'customerLastName'=>$customerLastName,
			'customerEmail'=>$customerEmail,
			'customerPhone'=>$customerPhone,
			'customerCompany'=>$customerCompany
		);
		
		
		
		
		$connections = p2p_get_connections( 'address_to_contact', array('to'=>$contactID, 'fields'=>'*') );
		
		$addresses = array();
		
		foreach($connections as $p2pConn){
			$address = get_post_meta($p2pConn->p2p_from, 'addressModel', true);
			$p2p_id = $p2pConn->p2p_id;
			$addressType = p2p_get_meta($p2pConn->p2p_id, 'addressType', true);
			$address['addressType'] = $addressType;
			
			$addresses[] = $address;
		}
		
		
		// 
		// foreach($connectedIDs as $addressID){
		// 	$addresses[(int)$addressID] = json_decode(get_post_meta($addressID, 'addressModel', true));
		// }
		// 
		
		$contactModel['addresses'] = $addresses;
		
		
		return $contactModel;
		
	}
	
	
	
	function updateTaxonomyTerms($contactID){
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
	
	
	
	public static function insertNewAddress($data){

		//$orderID = $data['attach_to_order_id'];
		$contactID = $data['contactID'];
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
			$address['addressID'] = $addressID;
			update_post_meta($addressID, 'addressModel', $address);
			
			p2p_type( 'address_to_contact' )->connect( $addressID, $contactID, array(
				'addressType' => $addressType			
			) );
		
			// if( isset($data['attach_to_contact_id']) ){
			// 	p2p_type( 'address_to_contact' )->connect( $addressID, $contactID, array(
			// 		'addressType' => $addressType			
			// 	) );
			// }			
			// 
			// if( isset($data['attach_to_order_id']) ){
			// 	p2p_type( $addressType.'_address_to_order' )->connect( $addressID, $orderID );
			// }

		}
		
		return $addressID;
		
	}
	
	public static function getAddressByID($addressID){
		return get_post_meta($addressID, 'addressModel', true);
	}
	
	public static function getAddressFromPost($type){
		//$type should be either 'billing' or 'shipping'
		$address = array();
		
		// if the address was not edited by the user, 
		// there will be no post vars submitted
		$address['firstName'] = @$_POST[$type.'_address_first_name'];
		$address['lastName'] = @$_POST[$type.'_address_last_name'];
		$address['addressLine1'] = @$_POST[$type.'_address_line_1'];
		$address['addressLine2'] = @$_POST[$type.'_address_line_2'];
		$address['city'] = @$_POST[$type.'_address_city'];
		$address['state'] = @$_POST[$type.'_address_state'];
		$address['zip'] = @$_POST[$type.'_address_zip'];
		$address['company'] = @$_POST[$type.'_address_company'];
		
		return $address;
	}
	
	// generates the autocomplete data used in the quick contact select dropdown in the admin order input form.
	public function createAutocompleteModel($json = true)
	{
		$autoCompleteContacts = get_posts(array('post_type' => 'tc_contact', 'numberposts'=>-1));

		$contactAutocompleteItems = array();

		foreach ($autoCompleteContacts as $contact) {
			$contactName = $contact->post_title;
			$contactID = $contact->ID;
			$contactAutocompleteItems[] = array('label'=>$contactName, 'value'=>$contactID);
		}
		// 
		// $contactAutocompleteItems[] = array('label'=>'Test Contact 1', 'value'=>"1");
		// $contactAutocompleteItems[] = array('label'=>'Rich Rodecker', 'value'=>"2");
		// $contactAutocompleteItems[] = array('label'=>'Tom Brady', 'value'=>"3");
		
		return $json ? json_encode($contactAutocompleteItems) : $contactAutocompleteItems;
		
		
	}
	
	
	
	
	
	
}


?>