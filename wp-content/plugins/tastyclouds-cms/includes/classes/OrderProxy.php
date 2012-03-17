<?php

/**
* 
*/
class OrderProxy
{
	
	function __construct()
	{
		
	}
	
	
	public static function insertNew($data){

	}
	
	public static function removeContactTaxonomyTerms($orderID){
		// When we create the custom taxonomies for tc_contact posts,
		// we also assign them to tc_order posts just so we can get 
		// the taxonomy metaboxes on the order screen.
		// WP will automatically assign those terms to the order,
		// so we remove them here, and they will be assigned to the 
		// contact using updateContactTaxonomyTerms().
		wp_set_object_terms($orderID, array(), 'tc_how_heard');
		wp_set_object_terms($orderID, array(), 'tc_inq_reason');
		wp_set_object_terms($orderID, array(), 'tc_inquirer_type');
		wp_set_object_terms($orderID, array(), 'tc_poc');
	}
	
	public static function setOrderTypeTaxonomyTerms($orderID){
		update_post_meta( $orderID, '_tc_order_type', $_POST['_tc_order_type'] );
		wp_set_object_terms( $orderID, (int)$_POST['_tc_order_type'], 'tc_order_type' );

		if(isset($_POST['_tc_event_type'])){
			update_post_meta( $orderID, '_tc_event_type', $_POST['_tc_event_type'] );	
			wp_set_object_terms( $orderID, (int)$_POST['_tc_event_type'], 'tc_event_type' );

		}
	}
	
	
	public static function saveCart($cart, $orderID, $cartID){
		$serializedCart = base64_encode(serialize($cart));
		update_post_meta( $orderID, '_tc_cart', $serializedCart);
		update_post_meta( $orderID, '_cartID', $cartID);
		
	}
}

?>