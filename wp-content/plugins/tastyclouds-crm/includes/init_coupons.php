<?php
add_action('init', 'register_tc_crm_coupon_posttype');

// ----------------  
// Register Coupon post types
// ---------------- 

function register_tc_crm_coupon_posttype() {
	$labels = array(
	  'name' => _x('Coupons', 'post type general name'),
	  'singular_name' => _x('Coupon', 'post type singular name'),
	  'add_new' => _x('Add New', 'Coupon'),
	  'add_new_item' => __('Add New Coupon'),
	  'edit_item' => __('Edit Coupon'),
	  'new_item' => __('New Coupon'),
	  'view_item' => __('View Coupons'),
	  'search_items' => __('Search Coupons'),
	  'not_found' =>  __('No Coupon found'),
	  'not_found_in_trash' => __('No Coupons found in Trash'),
	  'parent_item_colon' => ''
	);
	//$supports = array('title','editor','custom-fields', 'revisions', 'thumbnail','excerpt','post-formats','page-attributes');
	//$supports = array('custom-fields', 'excerpt', 'comments', 'post-formats', 'page-attributes');
	
	$supports = array('title');
	

	$post_type_args = array(
		'labels' 			=> $labels,
		'public' 			=> true,
		'show_ui' 			=> true,
		'publicly_queryable'=> true,
		'query_var'			=> 'tc_crm_coupon',
		'capability_type' 	=> 'post',
		'has_archive' 		=> false,
		'hierarchical' 		=> false,
		'rewrite' 			=> array( 'slug' => 'coupon', 'with_front' => false),
		'supports' 			=> $supports,
		'menu_position' 	=> TC_MENU_POSITION_COUPONS
	 );
  	register_post_type( 'tc_crm_coupon', $post_type_args);

	
}


