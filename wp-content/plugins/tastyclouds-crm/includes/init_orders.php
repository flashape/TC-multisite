<?php
add_action('init', 'register_tc_crm_order_posttype');

// ----------------  
// Register Order post types
// ---------------- 

function register_tc_crm_order_posttype() {
	$labels = array(
	  'name' => _x('Orders', 'post type general name'),
	  'singular_name' => _x('Order', 'post type singular name'),
	  'add_new' => _x('Add New', 'Order'),
	  'add_new_item' => __('Add New Order'),
	  'edit_item' => __('Edit Order'),
	  'new_item' => __('New Order'),
	  'view_item' => __('View Orders'),
	  'search_items' => __('Search Orders'),
	  'not_found' =>  __('No Order found'),
	  'not_found_in_trash' => __('No Orders found in Trash'),
	  'parent_item_colon' => ''
	);
	//$supports = array('title','editor','custom-fields', 'revisions', 'thumbnail','excerpt','post-formats','page-attributes');
	//$supports = array('custom-fields', 'excerpt', 'comments', 'post-formats', 'page-attributes');
	
	$supports = array('title','editor');
	

	$post_type_args = array(
		'labels' 			=> $labels,
		'public' 			=> true,
		'show_ui' 			=> true,
		'publicly_queryable'=> true,
		'query_var'			=> 'tc_crm_order',
		'capability_type' 	=> 'post',
		'has_archive' 		=> false,
		'hierarchical' 		=> false,
		'rewrite' 			=> array( 'slug' => 'orders', 'with_front' => false),
		'supports' 			=> $supports,
		'menu_position' 	=> TC_MENU_POSITION_ORDERS
	 );
  	register_post_type( 'tc_crm_order', $post_type_args);
}
