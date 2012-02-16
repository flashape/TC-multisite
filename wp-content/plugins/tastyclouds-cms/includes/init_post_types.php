<?
add_action('init', 'register_tc_testamonials_posttype');
add_action('init', 'register_tc_press_posttype');
add_action('init', 'register_tc_products_posttype');
add_action('init', 'register_tc_product_variation_posttype');
add_action('init', 'register_tc_variation_group_posttype');
add_action('init', 'register_tc_variation_item_posttype');
add_action('init', 'my_custom_init');

function my_custom_init() {

	add_post_type_support( 'tc_products', 'genesis-seo' );
	add_post_type_support( 'tc_press', 'genesis-seo' );
	add_post_type_support( 'tc_testamonials', 'genesis-seo' );
}


// ----------------  
// Register Press post types
// ---------------- 

function register_tc_press_posttype() {
	$labels = array(
	  'name' => _x('Press', 'post type general name'),
	  'singular_name' => _x('Press', 'post type singular name'),
	  'add_new' => _x('Add New', 'Press'),
	  'add_new_item' => __('Add New Press'),
	  'edit_item' => __('Edit Press'),
	  'new_item' => __('New Press'),
	  'view_item' => __('View Press'),
	  'search_items' => __('Search Press'),
	  'not_found' =>  __('No Press found'),
	  'not_found_in_trash' => __('No Press found in Trash'),
	  'parent_item_colon' => ''
	);
	
	$supports = array('title','editor','custom-fields', 'revisions', 'thumbnail','excerpt','post-formats','page-attributes');
	

  	//$supports = array('title', 'editor', 'custom-fields', 'revisions', 'excerpt');

	$post_type_args = array(
		'labels' 			=> $labels,
		'public' 			=> true,
		'show_ui' 			=> true,
		'publicly_queryable'=> true,
		'query_var'			=> 'tc_press',
		'capability_type' 	=> 'post',
		'has_archive' 		=> false,
		'hierarchical' 		=> true,
			'rewrite' 			=> array( 'slug' => 'press', 'with_front' => false),
		 // 'rewrite' => false,
		'supports' 			=> $supports,
		'menu_position' 	=> 0,
	 );
	
  	register_post_type( 'tc_press', $post_type_args);
	add_action('add_meta_boxes', 'tc_cms_add_meta_boxes');
	add_action('save_post', 'tc_cms_save_press_meta');
}




// ----------------  
// Register Testamonials post types
// ----------------

function register_tc_testamonials_posttype() {
  $labels = array(
    'name' => _x('Testamonials', 'post type general name'),
    'singular_name' => _x('Testamonial', 'post type singular name'),
    'add_new' => _x('Add New', 'Testamonial'),
    'add_new_item' => __('Add New Testamonial'),
    'edit_item' => __('Edit Testamonial'),
    'new_item' => __('New Testamonial'),
    'view_item' => __('View Testamonial'),
    'search_items' => __('Search Testamonials'),
    'not_found' =>  __('No Testamonials found'),
    'not_found_in_trash' => __('No Testamonials found in Trash'),
    'parent_item_colon' => ''
  );

  $supports = array('title', 'editor', 'custom-fields', 'revisions', 'excerpt');

  register_post_type( 'tc_testamonials',
    array(
      'labels' => $labels,
      'public' => true,
      'supports' => $supports,
      'menu_position' => 0
    )
  );
}






// ----------------  
// Register Product post types
// ----------------

function register_tc_products_posttype() {
	$labels = array(
		'name' 				=> _x( 'Products', 'post type general name' ),
		'singular_name'		=> _x( 'Product', 'post type singular name' ),
		'add_new' 			=> _x( 'Add New', 'Product'),
		'add_new_item' 		=> __( 'Add New Product '),
		'edit_item' 		=> __( 'Edit Product '),
		'new_item' 			=> __( 'New Product '),
		'view_item' 		=> __( 'View Product '),
		'search_items' 		=> __( 'Search Products '),
		'not_found' 		=>  __( 'No Product found' ),
		'not_found_in_trash'=> __( 'No Products found in Trash' ),
		'parent_item_colon' => ''
	);
	
	$supports = array('title','editor','thumbnail','excerpt','post-formats','page-attributes');
	
	$post_type_args = array(
		'labels' 			=> $labels,
		'singular_label' 	=> __('Product'),
		'public' 			=> true,
		'show_ui' 			=> true,
		'publicly_queryable'=> true,
		'query_var'			=> true,
		'capability_type' 	=> 'post',
		'has_archive' 		=> false,
		'hierarchical' 		=> true,
		'rewrite' 			=> array('slug' => 'products', 'with_front' => false),
		'supports' 			=> $supports,
		'menu_position' 	=> 0,
	 );
	 register_post_type('tc_products',$post_type_args);
}

// ----------------  
// Register Product Variation post types
// Used for definind variation types, i.e. "Flavor", "Size", "color", etc
// Metadata can contain info such as displayType (dropdown, radio, etc), default item text ("Select A...")
// ----------------

function register_tc_product_variation_posttype() {
	$labels = array(
		'name' 				=> _x( 'Product Variation', 'post type general name' ),
		'singular_name'		=> _x( 'Product Variation', 'post type singular name' ),
		'add_new' 			=> _x( 'Add New', 'Product Variation'),
		'add_new_item' 		=> __( 'Add New Product Variation'),
		'edit_item' 		=> __( 'Edit Product Variation'),
		'new_item' 			=> __( 'New Product Variation'),
		'view_item' 		=> __( 'View Product Variations'),
		'search_items' 		=> __( 'Search Product Variations'),
		'not_found' 		=>  __( 'No Product Variations found' ),
		'not_found_in_trash'=> __( 'No Product Variations found in Trash' ),
		'parent_item_colon' => ''
	);
	
	$supports = array('title');
	
	$post_type_args = array(
		'labels' 			=> $labels,
		'singular_label' 	=> __('Product Variation'),
		'public' 			=> true,
		'show_ui' 			=> true,
		'publicly_queryable'=> true,
		'query_var'			=> 'tc_product_variation',
		'capability_type' 	=> 'post',
		'has_archive' 		=> false,
		'hierarchical' 		=> true,
		'rewrite' 			=> array('slug' => 'product_variation', 'with_front' => false),
		'supports' 			=> $supports,
		'menu_position' 	=> 0,
	 );
	 register_post_type('tc_product_variation',$post_type_args);
}

// ----------------  
// Register Product Variation Item post types
// Used for defining variation items in a group, i.e. "Apple", "Banana" posts for a "Flavor" Variant
// Metadata can contain info such as Label, Surchage, Surcharge Type (i.e. + or - dollars, percent), weight, item sku # extension, etc.
// ----------------

function register_tc_variation_item_posttype() {
	$labels = array(
		'name' 				=> _x( 'Variation Item', 'post type general name' ),
		'singular_name'		=> _x( 'Variation Item', 'post type singular name' ),
		'add_new' 			=> _x( 'Add New', 'Variation Item'),
		'add_new_item' 		=> __( 'Add New Variation Item'),
		'edit_item' 		=> __( 'Edit Variation Item'),
		'new_item' 			=> __( 'New Variation Item'),
		'view_item' 		=> __( 'View Variation Items'),
		'search_items' 		=> __( 'Search Variation Items'),
		'not_found' 		=>  __( 'No Variation Items found' ),
		'not_found_in_trash'=> __( 'No Variation Items found in Trash' ),
		'parent_item_colon' => ''
	);
	
	$supports = array('title');
	
	$post_type_args = array(
		'labels' 			=> $labels,
		'singular_label' 	=> __('Variation Item'),
		'public' 			=> true,
		'show_ui' 			=> true,
		'publicly_queryable'=> true,
		'query_var'			=> 'tc_variation_item',
		'capability_type' 	=> 'post',
		'has_archive' 		=> false,
		'hierarchical' 		=> true,
		'rewrite' 			=> array('slug' => 'variation_item', 'with_front' => false),
		'supports' 			=> $supports,
		'menu_position' 	=> 0,
	 );
	 register_post_type('tc_variation_item',$post_type_args);
}

// ----------------  
// Register Product Variation Group post types
// Used for Grouping multiple variations together
// ----------------

function register_tc_variation_group_posttype() {
	$labels = array(
		'name' 				=> _x( 'Variant Groups', 'post type general name' ),
		'singular_name'		=> _x( 'Variant Group', 'post type singular name' ),
		'add_new' 			=> _x( 'Add New', 'Variant Group'),
		'add_new_item' 		=> __( 'Add New Variant Group'),
		'edit_item' 		=> __( 'Edit Variant Group'),
		'new_item' 			=> __( 'New Variant Group'),
		'view_item' 		=> __( 'View Variant Groups'),
		'search_items' 		=> __( 'Search Variant Groups'),
		'not_found' 		=>  __( 'No Variant Groups found' ),
		'not_found_in_trash'=> __( 'No Variant Groups found in Trash' ),
		'parent_item_colon' => ''
	);
	
	$supports = array('title');
	
	$post_type_args = array(
		'labels' 			=> $labels,
		'singular_label' 	=> __('Variant Group'),
		'public' 			=> true,
		'show_ui' 			=> true,
		'publicly_queryable'=> true,
		'query_var'			=> 'tc_variant_group',
		'capability_type' 	=> 'post',
		'has_archive' 		=> false,
		'hierarchical' 		=> true,
		'rewrite' 			=> array('slug' => 'variant_group', 'with_front' => false),
		'supports' 			=> $supports,
		'menu_position' 	=> 0,
	 );
	 register_post_type('tc_variant_group',$post_type_args);
}


?>