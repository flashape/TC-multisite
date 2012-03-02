<?
add_action('init', 'register_tc_testamonials_posttype');
add_action('init', 'register_tc_press_posttype');
add_action('init', 'register_tc_products_posttype');
add_action('init', 'register_tc_product_variation_posttype');
add_action('init', 'register_tc_variation_group_posttype');
add_action('init', 'register_tc_variation_item_posttype');
add_action('init', 'register_tc_variation_rule_posttype');
add_action('init', 'register_tc_coupon_posttype');
//add_action('init', 'register_tc_test_products_posttype');
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
// Register Test Product post types
// ----------------

function register_tc_test_products_posttype() {
	$labels = array(
		'name' 				=> _x( 'Test Products', 'post type general name' ),
		'singular_name'		=> _x( 'Test Product', 'post type singular name' ),
		'add_new' 			=> _x( 'Add New', 'Test Product'),
		'add_new_item' 		=> __( 'Add New Test Product '),
		'edit_item' 		=> __( 'Edit Test Product '),
		'new_item' 			=> __( 'New Test Product '),
		'view_item' 		=> __( 'View Test Product '),
		'search_items' 		=> __( 'Search Test Products '),
		'not_found' 		=>  __( 'No Test Product found' ),
		'not_found_in_trash'=> __( 'No Test Products found in Trash' ),
		'parent_item_colon' => ''
	);
	
	$supports = array('title','editor','thumbnail','excerpt','post-formats','page-attributes');
	
	$post_type_args = array(
		'labels' 			=> $labels,
		'singular_label' 	=> __('Test Product'),
		'public' 			=> true,
		'show_ui' 			=> true,
		'publicly_queryable'=> true,
		'query_var'			=> true,
		'capability_type' 	=> 'post',
		'has_archive' 		=> false,
		'hierarchical' 		=> true,
		'rewrite' 			=> array('slug' => 'testproduct/%testproduct_cat%', 'with_front' => false),
		'supports' 			=> $supports,
		'menu_position' 	=> 0,
	 );
	 register_post_type('tc_test_products',$post_type_args);
	
	
	
		$taxlabels = array( 
	        'name' => _x( 'Test Taxonomies', 'test taxonomy' ),
	        'singular_name' => _x( 'Test Taxonomy', 'test taxonomy' ),
	        'search_items' => _x( 'Search Test Taxonomies', 'test taxonomy' ),
	        'popular_items' => _x( 'Popular Test Taxonomies', 'test taxonomy' ),
	        'all_items' => _x( 'All Test Taxonomies', 'test taxonomy' ),
	        'parent_item' => _x( 'Parent Test Taxonomy', 'test taxonomy' ),
	        'parent_item_colon' => _x( 'Parent Test Taxonomy:', 'test taxonomy' ),
	        'edit_item' => _x( 'Edit Test Taxonomy', 'test taxonomy' ),
	        'update_item' => _x( 'Update Test Taxonomy', 'test taxonomy' ),
	        'add_new_item' => _x( 'Add New Test Taxonomy', 'test taxonomy' ),
	        'new_item_name' => _x( 'New Test Taxonomy Name', 'test taxonomy' ),
	        'separate_items_with_commas' => _x( 'Separate test taxonomys with commas', 'test taxonomy' ),
	        'add_or_remove_items' => _x( 'Add or remove test taxonomys', 'test taxonomy' ),
	        'choose_from_most_used' => _x( 'Choose from the most used test taxonomys', 'test taxonomy' ),
	        'menu_name' => _x( 'Test Taxonomies', 'test taxonomy' ),
	    );

	    $args = array( 
	        'labels' => $taxlabels,
	        'public' => true,
	        'show_in_nav_menus' => false,
	        'show_ui' => true,
	        'show_tagcloud' => true,
	        'hierarchical' => false,
			'rewrite' => array('slug' => 'testproduct', 'with_front' => false),
	        // 'rewrite' => true,
	        'query_var' => true,
	    );

	    register_taxonomy( 'test_taxonomy', array('tc_test_products'), $args );
	
}

function filter_post_type_link($link, $post)
{
    if ($post->post_type != 'tc_test_products')
        return $link;

    if ($cats = get_the_terms($post->ID, 'test_taxonomy'))
        $link = str_replace('%testproduct_cat%', array_pop($cats)->slug, $link);
    return $link;
}
add_filter('post_type_link', 'filter_post_type_link', 10, 2);


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
		'public' 			=> false,
		'show_ui' 			=> true,
		'publicly_queryable'=> false,
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
		'show_ui' 			=> false,
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
		'show_ui' 			=> false,
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

// ----------------  
// Register Product Variation Rule post types
// After assigning a Variation Group to a product, 
// each Variation Item in the Group can be assigned a Variaiton Rule,
// Such as "if {flavor} is {equal to} Strawberry Jalepeno {add} XX to {total}"
// ----------------

function register_tc_variation_rule_posttype() {
	$labels = array(
		'name' 				=> _x( 'Variant Rules', 'post type general name' ),
		'singular_name'		=> _x( 'Variant Rule', 'post type singular name' ),
		'add_new' 			=> _x( 'Add New', 'Variant Rule'),
		'add_new_item' 		=> __( 'Add New Variant Rule'),
		'edit_item' 		=> __( 'Edit Variant Rule'),
		'new_item' 			=> __( 'New Variant Rule'),
		'view_item' 		=> __( 'View Variant Rules'),
		'search_items' 		=> __( 'Search Variant Rules'),
		'not_found' 		=>  __( 'No Variant Rules found' ),
		'not_found_in_trash'=> __( 'No Variant Rules found in Trash' ),
		'parent_item_colon' => ''
	);
	
	$supports = array('title');
	
	$post_type_args = array(
		'labels' 			=> $labels,
		'singular_label' 	=> __('Variant Rule'),
		'public' 			=> true,
		'show_ui' 			=> false,
		'publicly_queryable'=> true,
		'query_var'			=> 'tc_variation_rule',
		'capability_type' 	=> 'post',
		'has_archive' 		=> false,
		'hierarchical' 		=> true,
		'rewrite' 			=> array('slug' => 'variation_rule', 'with_front' => false),
		'supports' 			=> $supports,
		'menu_position' 	=> 0,
	 );
	 register_post_type('tc_variation_rule',$post_type_args);
}


// ----------------  
// Register Coupon post types
// ---------------- 

function register_tc_coupon_posttype() {
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
		'query_var'			=> 'tc_coupon',
		'capability_type' 	=> 'post',
		'has_archive' 		=> false,
		'hierarchical' 		=> false,
		'rewrite' 			=> array( 'slug' => 'coupon', 'with_front' => false),
		'supports' 			=> $supports,
		'menu_position' 	=> 0
	 );
  	register_post_type( 'tc_coupon', $post_type_args);

	
}




// ----------------  
// Register Order post types
// ---------------- 

// function register_tc_order_posttype() {
// 	$labels = array(
// 	  'name' => _x('Orders', 'post type general name'),
// 	  'singular_name' => _x('Order', 'post type singular name'),
// 	  'add_new' => _x('Add New', 'Order'),
// 	  'add_new_item' => __('Add New Order'),
// 	  'edit_item' => __('Edit Order'),
// 	  'new_item' => __('New Order'),
// 	  'view_item' => __('View Orders'),
// 	  'search_items' => __('Search Orders'),
// 	  'not_found' =>  __('No Order found'),
// 	  'not_found_in_trash' => __('No Orders found in Trash'),
// 	  'parent_item_colon' => ''
// 	);
// 	//$supports = array('title','editor','custom-fields', 'revisions', 'thumbnail','excerpt','post-formats','page-attributes');
// 	//$supports = array('custom-fields', 'excerpt', 'comments', 'post-formats', 'page-attributes');
// 	
// 	$supports = array('title','editor');
// 	
// 
// 	$post_type_args = array(
// 		'labels' 			=> $labels,
// 		'public' 			=> true,
// 		'show_ui' 			=> true,
// 		'publicly_queryable'=> true,
// 		'query_var'			=> 'tc_crm_order',
// 		'capability_type' 	=> 'post',
// 		'has_archive' 		=> false,
// 		'hierarchical' 		=> false,
// 		'rewrite' 			=> array( 'slug' => 'orders', 'with_front' => false),
// 		'supports' 			=> $supports,
// 		'menu_position' 	=> 0
// 	 );
//   	register_post_type( 'tc_order', $post_type_args);
// }
// 



?>