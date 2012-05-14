<?php
/*
Plugin Name: Tasty Clouds CMS
Plugin URI: http://tastyclouds.com/
Description: Adds CMS customizations to Admin Area for TastyClouds.com
Version: 0.1
Author: Rich Rodecker
Author URI: http://tastyclouds.com/
*/
date_default_timezone_set('America/Los_Angeles');

if (!defined('TASTY_CMS_PLUGIN_DIR')) {
    define('TASTY_CMS_PLUGIN_DIR', plugin_dir_path( __FILE__ ));
}


function alter_tc_product_query( $request ) {
    $dummy_query = new WP_Query();  // the query isn't run if we don't pass any query vars
    $dummy_query->parse_query( $request );

	if ( !$dummy_query->is_admin && isset($request['tc_product_type']) ){		
		$lastSegment = basename($request['tc_product_type']);
		if(get_term_by('slug',$lastSegment,  'tc_product_type') === FALSE){
		  	$request['post_type'] = 'tc_products';
		  	$request['tc_products'] = $lastSegment;
		  	$request['name'] = $lastSegment;
		}
	}
    
    return $request;
}
add_filter( 'request', 'alter_tc_product_query' );



// gets recently new or updated posts
function get_recently_modified_post_ids($posttype = 'post'){
	global $wpdb;
	$today = current_time('mysql', 1);
	$howMany = 5;
	//$recentposts = $wpdb->get_results("SELECT ID, post_title FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = '$posttype' AND post_modified_gmt < '$today' ORDER BY post_modified_gmt DESC LIMIT $howMany");
	return $wpdb->get_results("SELECT ID FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = '$posttype' AND post_modified_gmt < '$today' ORDER BY post_modified_gmt DESC LIMIT $howMany");
}


function updatePostModifiedTime($postID){
	wp_update_post(array('ID'=>$postID));
}

add_action('plugins_loaded','tc_cms_init_session');
add_action('plugins_loaded','tc_cms_dequeue_autosave');
add_action('manage_tc_order_posts_columns','tc_cms_manage_order_posts_columns');



function get_activities_for_user($userID){
	// Find connected posts
	// $connectedActivities = get_posts( array(
	//   'connected_type' => 'activity_to_user',
	//   'connected_items' => $userID,
	//   'nopaging' => true,
	//   'suppress_filters' => false
	// ) );
	
	$connectedActivities = new WP_Query( array(
	  'connected_type' => 'activity_to_user',
	  'connected_items' => $userID,
	  'nopaging' => true
	) );
	
	return $connectedActivities;
}



function tc_cms_manage_order_posts_columns($columns){
	
	unset($columns['title']);
    return $columns;
	
}

function tc_cms_dequeue_autosave(){
	wp_dequeue_script('autosave');
}

function tc_cms_init_session(){
	if (!session_id()){
		error_log(" starting session...\n");
		session_start();
		error_log(" session id : ".session_id()."\n");
		//error_log(var_export($_SESSION, 1));
		
	}
}


add_action('transition_post_status','tc_on_order_transition_post_status',10,3);

function tc_on_order_transition_post_status($new, $old, $post){
    // Make sure the post obj is present and complete. If not, bail.
    if(!is_object($post) || !isset($post->post_type)) {
        return;
    }

    if($post->post_type == 'tc_order') {
			
		if ($new == 'publish' && $old != 'publish'){
			error_log("\n tc_on_order_transition_post_status \n");
			// the transition_post_status hook fires immediately before the save_post hook,
			// so we define a constant here that the OrderDetailsMetabox save_action handler will look for.
			define('IS_NEW_ORDER_POST', true);
			//update_post_meta($post->ID, '_is_new_order', true);
		}
	}
	
}




// turn off wp 'doing it wrong' errors like "[somefunction]_called_incorrectly"
add_filter('doing_it_wrong_trigger_error', 'on_doing_it_wrong_trigger_error_filter');
function on_doing_it_wrong_trigger_error_filter(){
	return false;
}

require_once(TASTY_CMS_PLUGIN_DIR .'includes/init_constants.php');
//require_once(TASTY_CMS_PLUGIN_INC_DIR .'not_found_dump.php');
require_once(TASTY_CMS_PLUGIN_INC_DIR .'init_taxonomies.php');
require_once(TASTY_CMS_PLUGIN_INC_DIR .'init_post_types.php');
require_once(TASTY_CMS_PLUGIN_INC_DIR .'init_metaboxes.php');
require_once(TASTY_CMS_PLUGIN_INC_DIR .'widgets/TC_AddToCartWidget.php');

require_once(TASTY_CMS_PLUGIN_INC_DIR .'init_widgets.php');
//require_once(TASTY_CMS_PLUGIN_INC_DIR .'init_custom_action_handlers.php');
require_once(TASTY_CMS_PLUGIN_INC_DIR .'init_cms_p2p_connections.php');
require_once(TASTY_CMS_PLUGIN_INC_DIR .'init_ajax.php');
require_once(TASTY_CMS_PLUGIN_INC_DIR .'init_shipping_options.php');
require_once(TASTY_CMS_PLUGIN_INC_DIR .'init_recent_items_toolbar.php');
require_once(TASTY_CMS_PLUGIN_INC_DIR .'init_dashboard_widgets.php');
require_once(TASTY_CMS_PLUGIN_INC_DIR .'init_emails.php');
//require_once(TASTY_CMS_PLUGIN_INC_DIR .'classes/CartProxy.php');
require_once(TASTY_CMS_PLUGIN_INC_DIR .'classes/SaveOrderCommand.php');
require_once(TASTY_CMS_PLUGIN_INC_DIR .'classes/ActivityProxy.php');
require_once(TASTY_CMS_PLUGIN_INC_DIR .'classes/ContactProxy.php');
require_once(TASTY_CMS_PLUGIN_INC_DIR .'classes/OrderProxy.php');
require_once(TASTY_CMS_PLUGIN_INC_DIR .'classes/PaymentProxy.php');
require_once(TASTY_CMS_PLUGIN_INC_DIR .'classes/ProductProxy.php');
require_once(TASTY_CMS_PLUGIN_DIR .'ajax/AjaxUtils.php');
require_once(TASTY_CMS_PLUGIN_DIR .'ajax/VariationItemAjax.php');
require_once(TASTY_CMS_PLUGIN_DIR .'ajax/ProductVariationRulesAjax.php');
require_once(TASTY_CMS_PLUGIN_DIR .'ajax/CartAjax.php');
require_once(TASTY_CMS_PLUGIN_DIR .'ajax/ContactAjax.php');
require_once(TASTY_CMS_PLUGIN_DIR .'ajax/ShippingAjax.php');
require_once(TASTY_CMS_PLUGIN_DIR .'ajax/ActivityAjax.php');
require_once(TASTY_CMS_PLUGIN_DIR .'ajax/MailAjax.php');



add_action( 'admin_enqueue_scripts', 'tc_cms_admin_enqueue_scripts', 10, 1 );

add_action( 'admin_init', 'tc_cms_add_categories_to_pages', 10, 1 );
// add_action( 'query_vars', 'tc_cms_dump_wp_query', 10, 1 );
// add_action( 'template_redirect', 'tc_cms_dump_wp_query', 10, 1 );
add_action( 'template_redirect', 'tc_cms_enqueue_scripts', 10, 1 );

function tc_cms_enqueue_scripts(){
	global $post;
	error_log('get_post_type($post) = '.get_post_type($post));
	if (get_post_type($post) == 'tc_products'){
		wp_enqueue_script('jquery');
		wp_enqueue_script('jquery-ui-core');
		wp_enqueue_script( 'jquery-ui-button' );
		
	}
}

function tc_cms_dump_wp_query(){
	global $wp_query;
	error_log(var_export($wp_query, 1));
}

function tc_cms_add_categories_to_pages(){
	//flush_rewrite_rules();
	//register_taxonomy_for_object_type('category', 'page');
}

add_filter('update_post_metadata', 'tc_update_post_metadata', 10, 4);


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



function tc_cms_admin_enqueue_scripts(){
	wp_enqueue_script('jquery');
	wp_enqueue_script('jquery-ui-core');
	
	wp_register_script('validate','https://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js' , array('jquery'));
	wp_register_script('validate-additional-methods','https://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/additional-methods.min.js' , array('jquery'));
	wp_enqueue_script( 'validate' ); 
	wp_enqueue_script( 'validate-additional-methods' );
	wp_enqueue_script( 'ba-debug', TC_SHARED_JS_URL .'/ba-debug.js', __FILE__ );
	
	wp_enqueue_style('jquery.ui.theme', TC_SHARED_CSS_URL .'jqueryui/smoothness/jquery-ui-1.8.16.custom.css', __FILE__);
	
	
}


// The update_post_metadata filter is called before saving metadata to the db.
// If anything is returned from this method, the metadata is not saved.
function tc_update_post_metadata($dummy = NULL, $object_id, $meta_key, $meta_value){
	//error_log("object_id : $object_id, meta_key : $meta_key, meta_value : $meta_value");
	switch($meta_key){
		case '_tc_order_assignee':
			$oldValue = get_post_meta($object_id, '_tc_order_assignee', true);
			if ($oldValue != $meta_value){
				error_log('_tc_order_assignee CHANGED!!!');
				wp_mail('rich@tastyclouds.com', 'An Order has been assigned to you', 'A new order has been assigned to you, click here to view: ');
			}
		break;
	}
}

add_action( 'admin_head', 'tc_testamonials_icons' );

	
// Styling for the custom post type icon
 
//add_action( 'admin_head', 'tc_testamonials_icons' );
 
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



?>