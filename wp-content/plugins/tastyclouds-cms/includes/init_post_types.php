<?
add_action('init', 'register_tc_testamonials_posttype');
add_action('init', 'register_tc_press_posttype');
add_action('init', 'register_tc_products_posttype');
add_action('init', 'register_tc_service_posttype');
add_action('init', 'register_tc_product_variation_posttype');
add_action('init', 'register_tc_variation_group_posttype');
add_action('init', 'register_tc_variation_item_posttype');
add_action('init', 'register_tc_variation_rule_posttype');
add_action('init', 'register_tc_coupon_posttype');
add_action('init', 'register_tc_payment_posttype');
add_action('init', 'register_tc_order_posttype');
add_action('init', 'register_tc_contact_posttype');
add_action('init', 'register_tc_contact_address_posttype');
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
// Register Service post types
// ----------------

function register_tc_service_posttype() {
	$labels = array(
		'name' 				=> _x( 'Services', 'post type general name' ),
		'singular_name'		=> _x( 'Service', 'post type singular name' ),
		'add_new' 			=> _x( 'Add New', 'Service'),
		'add_new_item' 		=> __( 'Add New Service '),
		'edit_item' 		=> __( 'Edit Service '),
		'new_item' 			=> __( 'New Service '),
		'view_item' 		=> __( 'View Service '),
		'search_items' 		=> __( 'Search Services '),
		'not_found' 		=>  __( 'No Service found' ),
		'not_found_in_trash'=> __( 'No Services found in Trash' ),
		'parent_item_colon' => ''
	);
	
	$supports = array('title','editor','excerpt', 'page-attributes');
	
	$post_type_args = array(
		'labels' 			=> $labels,
		'singular_label' 	=> __('Service'),
		'public' 			=> true,
		'show_ui' 			=> true,
		'publicly_queryable'=> true,
		'query_var'			=> true,
		'capability_type' 	=> 'post',
		'has_archive' 		=> false,
		'hierarchical' 		=> true,
		'rewrite' 			=> array('slug' => 'services', 'with_front' => false),
		'supports' 			=> $supports,
		'menu_position' 	=> 0,
	 );
	 register_post_type('tc_service',$post_type_args);
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
// Register Payment post types
// ---------------- 

function register_tc_payment_posttype() {
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
		'query_var'			=> 'tc_payment',
		'capability_type' 	=> 'post',
		'has_archive' 		=> false,
		'hierarchical' 		=> false,
		'rewrite' 			=> array( 'slug' => 'payment', 'with_front' => false),
		'supports' 			=> $supports,
		'menu_position' 	=> 0
	 );
	
  	register_post_type( 'tc_payment', $post_type_args);
}






// ----------------  
// Register Order post types
// ---------------- 

function register_tc_order_posttype() {
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
		'query_var'			=> 'tc_order',
		'capability_type' 	=> 'post',
		'has_archive' 		=> false,
		'hierarchical' 		=> false,
		'rewrite' 			=> array( 'slug' => 'orders', 'with_front' => false),
		'supports' 			=> $supports,
		'menu_position' 	=> 0
	 );
  	register_post_type( 'tc_order', $post_type_args);
}



// ----------------  
// Register Contact post types
// ---------------- 

function register_tc_contact_posttype() {
	$labels = array(
	  'name' => _x('Contacts', 'post type general name'),
	  'singular_name' => _x('Contact', 'post type singular name'),
	  'add_new' => _x('Add New', 'Contact'),
	  'add_new_item' => __('Add New Contact'),
	  'edit_item' => __('Edit Contact'),
	  'new_item' => __('New Contact'),
	  'view_item' => __('View Contacts'),
	  'search_items' => __('Search Contacts'),
	  'not_found' =>  __('No Contact found'),
	  'not_found_in_trash' => __('No Contacts found in Trash'),
	  'parent_item_colon' => ''
	);
	//$supports = array('title','editor','custom-fields', 'revisions', 'thumbnail','excerpt','post-formats','page-attributes');
	
	$supports = array( 'comments');
	

	$post_type_args = array(
		'labels' 			=> $labels,
		'public' 			=> true,
		'show_ui' 			=> true,
		'publicly_queryable'=> true,
		'query_var'			=> 'tc_contact',
		'capability_type' 	=> 'post',
		'has_archive' 		=> false,
		'hierarchical' 		=> false,
		'rewrite' 			=> array( 'slug' => 'contact', 'with_front' => false),
		'supports' 			=> $supports,
		'menu_position' 	=> 0
	 );
	
  	register_post_type( 'tc_contact', $post_type_args);
}




// ----------------  
// Register Contact Address post types
// ---------------- 

function register_tc_contact_address_posttype() {
	$labels = array(
	  'name' => _x('Addresss', 'post type general name'),
	  'singular_name' => _x('Address', 'post type singular name'),
	  'add_new' => _x('Add New', 'Address'),
	  'add_new_item' => __('Add New Address'),
	  'edit_item' => __('Edit Address'),
	  'new_item' => __('New Address'),
	  'view_item' => __('View Addresses'),
	  'search_items' => __('Search Addresses'),
	  'not_found' =>  __('No Address found'),
	  'not_found_in_trash' => __('No Addresses found in Trash'),
	  'parent_item_colon' => ''
	);
	//$supports = array('title','editor','custom-fields', 'revisions', 'thumbnail','excerpt','post-formats','page-attributes');
	
	$supports = array( 'comments');
	

	$post_type_args = array(
		'labels' 			=> $labels,
		'public' 			=> true,
		'show_ui' 			=> true,
		'publicly_queryable'=> true,
		'query_var'			=> 'tc_contact_address',
		'capability_type' 	=> 'post',
		'has_archive' 		=> false,
		'hierarchical' 		=> false,
		'rewrite' 			=> array( 'slug' => 'address', 'with_front' => false),
		'supports' 			=> $supports,
		'menu_position' 	=> 0
	 );
	
  	register_post_type( 'tc_contact_address', $post_type_args);
}






?>