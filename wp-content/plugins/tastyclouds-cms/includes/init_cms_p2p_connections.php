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
}
