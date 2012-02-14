<?php
add_action('init', 'register_panalo_activity_posttype');

// ----------------  
// Register Activity post types
// ---------------- 

function register_panalo_activity_posttype() {
	$labels = array(
	  'name' => _x('Activities', 'post type general name'),
	  'singular_name' => _x('Activity', 'post type singular name'),
	  'add_new' => _x('Add New', 'Activity'),
	  'add_new_item' => __('Add New Activity'),
	  'edit_item' => __('Edit Activity'),
	  'new_item' => __('New Activity'),
	  'view_item' => __('View Activities'),
	  'search_items' => __('Search Activities'),
	  'not_found' =>  __('No Activity found'),
	  'not_found_in_trash' => __('No Activities found in Trash'),
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
		'query_var'			=> 'panalo_activity',
		'capability_type' 	=> 'post',
		'has_archive' 		=> false,
		'hierarchical' 		=> false,
		'rewrite' 			=> array( 'slug' => 'activity', 'with_front' => false),
		'supports' 			=> $supports,
		'menu_position' 	=> TC_MENU_POSITION_PAYMENTS
	 );
  	register_post_type( 'panalo_activity', $post_type_args);
}
