<?php
add_action('init', 'register_panalo_project_posttype');

// ----------------  
// Register Project post types
// ---------------- 

function register_panalo_project_posttype() {
	$labels = array(
	  'name' => _x('Projects', 'post type general name'),
	  'singular_name' => _x('Project', 'post type singular name'),
	  'add_new' => _x('Add New', 'Project'),
	  'add_new_item' => __('Add New Project'),
	  'edit_item' => __('Edit Project'),
	  'new_item' => __('New Project'),
	  'view_item' => __('View Projects'),
	  'search_items' => __('Search Projects'),
	  'not_found' =>  __('No Project found'),
	  'not_found_in_trash' => __('No Projects found in Trash'),
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
		'query_var'			=> 'panalo_project',
		'capability_type' 	=> 'post',
		'has_archive' 		=> false,
		'hierarchical' 		=> false,
		'rewrite' 			=> array( 'slug' => 'project', 'with_front' => false),
		'supports' 			=> $supports,
		'menu_position' 	=> TC_MENU_POSITION_PROJECTS
	 );
  	register_post_type( 'panalo_project', $post_type_args);
}
