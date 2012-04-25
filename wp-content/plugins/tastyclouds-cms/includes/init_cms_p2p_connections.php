<?php
add_action('init', 'register_p2p_connections');

function register_p2p_connections() {
	// Make sure the Posts 2 Posts plugin is active.
	if ( !function_exists( 'p2p_register_connection_type' ) )
		return;

	p2p_register_connection_type( array(
		'name' => 'variation_item_to_variation',
		'from' => 'tc_variation_item',
		'to' => 'tc_product_variation',
		'reciprocal' => true,
		'cardinality'=>'many-to-one',
		'admin_box' => false
		
		) 
	);
	
	
	p2p_register_connection_type( array(
		'name' => 'variation_to_product',
		'from' => 'tc_product_variation',
		'to' => 'tc_products',
		'reciprocal' => true,
		'prevent_duplicates' => false,
		'cardinality'=>'many-to-one',
		'admin_box' => false
		) 
	);
	
	
	p2p_register_connection_type( array(
		'name' => 'variation_rule_to_product',
		'from' => 'tc_variation_rule',
		'to' => 'tc_products',
		'reciprocal' => true,
		'cardinality'=>'many-to-one',
		'admin_box' => false
		) 
	);	
	
	p2p_register_connection_type( array(
		'name' => 'contact_to_order',
		'from' => 'tc_contact',
		'to' => 'tc_order',
		'reciprocal' => true,
		'cardinality'=>'many-to-many',
		'admin_box' => false
		) 
	);
	
	p2p_register_connection_type( array(
		'name' => 'payment_to_order',
		'from' => 'tc_payment',
		'to' => 'tc_order',
		'reciprocal' => true,
		'cardinality'=>'many-to-one',
		'admin_box' => false
		) 
	);
	
	p2p_register_connection_type( array(
		'name' => 'address_to_contact',
		'from' => 'tc_contact_address',
		'to' => 'tc_contact',
		'reciprocal' => true,
		'cardinality'=>'many-to-one',
		'admin_box' => false
		) 
	);
	p2p_register_connection_type( array(
		'name' => 'billing_address_to_order',
		'from' => 'tc_contact_address',
		'to' => 'tc_order',
		'reciprocal' => true,
		'cardinality'=>'one-to-many',
		'admin_box' => false
		) 
	);
	
	p2p_register_connection_type( array(
		'name' => 'shipping_address_to_order',
		'from' => 'tc_contact_address',
		'to' => 'tc_order',
		'reciprocal' => true,
		'cardinality'=>'one-to-many',
		'admin_box' => false
		) 
	);
	
	p2p_register_connection_type( array(
		'name' => 'activity_to_contact',
		'from' => 'tc_activity',
		'to' => 'tc_contact',
		'reciprocal' => true,
		'cardinality'=>'many-to-one',
		'admin_box' => false
		
		) 
	);
	
	p2p_register_connection_type( array(
		'name' => 'activity_to_project',
		'from' => 'tc_activity',
		'to' => 'tc_project',
		'reciprocal' => true,
		'cardinality'=>'many-to-one',
		'admin_box' => false
		
		) 
	);
	
	p2p_register_connection_type( array(
	    'name' => 'activity_to_user',
	    'from' => 'tc_activity',
	    'to' => 'user',
		'admin_box' => false
	) );
		
	p2p_register_connection_type( array(
	    'name' => 'order_to_user',
	    'from' => 'tc_order',
	    'to' => 'user',
		'admin_box' => false
	) );
	
	
}
