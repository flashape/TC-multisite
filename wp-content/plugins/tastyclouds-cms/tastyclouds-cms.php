<?php
/*
Plugin Name: Tasty Clouds CMS
Plugin URI: http://tastyclouds.com/
Description: Adds CMS customizations to Admin Area for TastyClouds.com
Version: 0.1
Author: Rich Rodecker
Author URI: http://tastyclouds.com/
*/





//add_action( 'init', 'register_taxonomy_tc_press_type' );

add_action('init', 'register_tc_testamonials_posttype');
add_action('init', 'register_tc_press_posttype');
add_action('init', 'register_tc_products_posttype');







// function register_taxonomy_tc_press_type() {
// 
//     $labels = array( 
//         'name' => _x( 'X Press Types', 'press type' ),
//         'singular_name' => _x( 'XX Press Type', 'press type' ),
//         'search_items' => _x( 'Search Press Types', 'press type' ),
//         'popular_items' => _x( 'Popular Press Types', 'press type' ),
//         'all_items' => _x( 'All Press Types', 'press type' ),
//         'parent_item' => _x( 'Parent Press Type', 'press type' ),
//         'parent_item_colon' => _x( 'Parent Press Type:', 'press type' ),
//         'edit_item' => _x( 'Edit Press Type', 'press type' ),
//         'update_item' => _x( 'Update Press Type', 'press type' ),
//         'add_new_item' => _x( 'XXX Add New Press Type', 'press type' ),
//         'new_item_name' => _x( 'New Press Type Name', 'press type' ),
//         'separate_items_with_commas' => _x( 'Separate press types with commas', 'press type' ),
//         'add_or_remove_items' => _x( 'Add or remove press types', 'press type' ),
//         'choose_from_most_used' => _x( 'Choose from the most used press types', 'press type' ),
//         'menu_name' => _x( 'Press Types', 'press type' ),
//     );
// 
//     $args = array( 
//         'labels' => $labels,
//         'public' => true,
//         'show_in_nav_menus' => true,
//         'show_ui' => true,
//         'show_tagcloud' => true,
//         'hierarchical' => false,
// 		'rewrite' 			=> array('slug' => 'tc_press_type', 'with_front' => false),
//         // 'rewrite' => true,
//         'query_var' => 'tc_press_type'
//     );
// 
//     register_taxonomy( 'tc_press_type', 'tc_press', $args );
// }

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

function tc_cms_add_meta_boxes(){
	add_meta_box('tc_press_meta_box', 'External URL', 'tc_cms_press_metabox', 'tc_press', 'normal', 'high');
}

function tc_cms_press_metabox($post){
	$tc_press_ext_url = get_post_meta($post->ID, '_tc_press_ext_url', true);
	echo 'Enter the external site URL for this press item:';
	?>
	<p>Name: <input type="text" style="width:800px" name="tc_press_ext_url" value="<?php echo esc_attr($tc_press_ext_url); ?>" id="tc_press_ext_url" /></p>
	<?php
}



function tc_cms_save_press_meta($post_id){
	if( isset( $_POST['tc_press_ext_url'] ) ){
		update_post_meta($post_id, '_tc_press_ext_url', esc_url_raw($_POST['tc_press_ext_url']));
	}
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

	
// Styling for the custom post type icon
 
add_action( 'admin_head', 'tc_testamonials_icons' );
 
function tc_testamonials_icons() {
    ?>
    <style type="text/css" media="screen">
        #menu-posts-tc_testamonials .wp-menu-image {
            background: url(<?php bloginfo('stylesheet_directory') ?>/images/balloon-quotation.png) no-repeat 6px -16px !important;
        }
    #menu-posts-tc_testamonials:hover .wp-menu-image, #menu-posts-testamonial.wp-has-current-submenu .wp-menu-image {
            background-position:6px 8px !important;
        }        

    #menu-posts-tc_products .wp-menu-image {
            background: url(<?php bloginfo('stylesheet_directory') ?>/images/shopping-basket--plus.png) no-repeat 6px -16px !important;
        }
    #menu-posts-tc_products:hover .wp-menu-image, #menu-posts-products.wp-has-current-submenu .wp-menu-image {
            background-position:6px 8px !important;
        }
    /*#icon-edit.icon32-posts-tc_testamonials {background: url(<?php bloginfo('stylesheet_directory') ?>/images/testamonial-32x32.png) no-repeat;*/}
    </style>
<?php }


add_action('init', 'my_custom_init');

function my_custom_init() {
	add_post_type_support( 'tc_products', 'genesis-seo' );
	add_post_type_support( 'tc_press', 'genesis-seo' );
	add_post_type_support( 'tc_testamonials', 'genesis-seo' );
	
}


?>