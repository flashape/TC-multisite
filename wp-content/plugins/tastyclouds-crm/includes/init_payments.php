<?php
add_action('init', 'register_tc_crm_payment_posttype');

// ----------------  
// Register Payment post types
// ---------------- 

function register_tc_crm_payment_posttype() {
	$labels = array(
	  'name' => _x('Payments', 'post type general name'),
	  'singular_name' => _x('Payment', 'post type singular name'),
	  'add_new' => _x('Add New', 'Payment'),
	  'add_new_item' => __('Add New Payment'),
	  'edit_item' => __('Edit Payment'),
	  'new_item' => __('New Payment'),
	  'view_item' => __('View Payments'),
	  'search_items' => __('Search Payments'),
	  'not_found' =>  __('No Payment found'),
	  'not_found_in_trash' => __('No Payments found in Trash'),
	  'parent_item_colon' => ''
	);
	//$supports = array('title','editor','custom-fields', 'revisions', 'thumbnail','excerpt','post-formats','page-attributes');
	//$supports = array('custom-fields', 'excerpt', 'comments', 'post-formats', 'page-attributes');
	
	$supports = array('custom-fields');
	

	$post_type_args = array(
		'labels' 			=> $labels,
		'public' 			=> true,
		'show_ui' 			=> true,
		'publicly_queryable'=> true,
		'query_var'			=> 'tc_crm_payment',
		'capability_type' 	=> 'post',
		'has_archive' 		=> false,
		'hierarchical' 		=> false,
		'rewrite' 			=> array( 'slug' => 'payment', 'with_front' => false),
		'supports' 			=> $supports,
		'menu_position' 	=> TC_MENU_POSITION_PAYMENTS
	 );
  	register_post_type( 'tc_crm_payment', $post_type_args);
}
