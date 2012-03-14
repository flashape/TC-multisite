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
		'cardinatlity'=>'many-to-one',
		'admin_box' => false
		
		) 
	);
	
	
	p2p_register_connection_type( array(
		'name' => 'variation_to_product',
		'from' => 'tc_product_variation',
		'to' => 'tc_products',
		'reciprocal' => true,
		'prevent_duplicates' => false,
		'cardinatlity'=>'many-to-one',
		'admin_box' => false
		) 
	);
	
	
	p2p_register_connection_type( array(
		'name' => 'variation_rule_to_product',
		'from' => 'tc_variation_rule',
		'to' => 'tc_products',
		'reciprocal' => true,
		'cardinatlity'=>'many-to-one',
		'admin_box' => false
		) 
	);	
	
	p2p_register_connection_type( array(
		'name' => 'contact_to_order',
		'from' => 'tc_contact',
		'to' => 'tc_order',
		'reciprocal' => true,
		'cardinatlity'=>'one-to-one',
		'admin_box' => false
		) 
	);
}
