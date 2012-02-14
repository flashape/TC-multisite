<?php
add_action('init', 'register_p2p_connections');

function register_p2p_connections() {
	// Make sure the Posts 2 Posts plugin is active.
	if ( !function_exists( 'p2p_register_connection_type' ) )
		return;

	p2p_register_connection_type( array(
		'name' => 'activity_to_contact',
		'from' => 'panalo_activity',
		'to' => 'tc_crm_contact',
		'reciprocal' => true,
		'cardinatlity'=>'many-to-one',
		'admin_box' => false
		
		) 
	);
	
	p2p_register_connection_type( array(
		'name' => 'activity_to_project',
		'from' => 'panalo_activity',
		'to' => 'panalo_project',
		'reciprocal' => true,
		'cardinatlity'=>'many-to-one',
		'admin_box' => false
		
		) 
	);
	
	
	p2p_register_connection_type( array(
		'name' => 'order_to_contact',
		'from' => 'tc_crm_order',
		'to' => 'tc_crm_contact',
		'reciprocal' => true,
		'cardinatlity'=>'many-to-one',
		'admin_box' => false
		
		) 
	);
	

	// p2p_register_connection_type( array(
	// 	'name' => 'tasks_to_tasklist',
	// 	'from' => 'panalo_activity',
	// 	'to' => 'panalo_activity',
	// 	'reciprocal' => true,
	// 	'cardinatlity'=>'many-to-one',
	// 	'admin_box' => false
	// 	
	// 	) 
	// );
	
	
	// p2p_type( 'activity_to_contact' )->connect( 2790, 650, array(
	// 	'date' => current_time('mysql')
	// ) );
	// 
	// 
	// p2p_type( 'activity_to_contact' )->connect( 2789, 650, array(
	// 	'date' => current_time('mysql')
	// ) );
	// 
	// 
	// p2p_type( 'activity_to_contact' )->connect( 2787, 650, array(
	// 	'date' => current_time('mysql')
	// ) );

}
?>