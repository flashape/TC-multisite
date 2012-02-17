<?php
/*
Plugin Name: Tasty Clouds CMS
Plugin URI: http://tastyclouds.com/
Description: Adds CMS customizations to Admin Area for TastyClouds.com
Version: 0.1
Author: Rich Rodecker
Author URI: http://tastyclouds.com/
*/

if (!defined('TASTY_CMS_PLUGIN_DIR')) {
    define('TASTY_CMS_PLUGIN_DIR', plugin_dir_path( __FILE__ ));
}


// turn off wp 'doing it wrong' errors like "[somefunction]_called_incorrectly"
add_filter('doing_it_wrong_trigger_error', 'on_doing_it_wrong_trigger_error_filter');
function on_doing_it_wrong_trigger_error_filter(){
	return false;
}

require_once(TASTY_CMS_PLUGIN_DIR .'includes/init_constants.php');
require_once(TASTY_CMS_PLUGIN_INC_DIR .'init_post_types.php');
require_once(TASTY_CMS_PLUGIN_INC_DIR .'init_metaboxes.php');
require_once(TASTY_CMS_PLUGIN_INC_DIR .'init_cms_p2p_connections.php');
require_once(TASTY_CMS_PLUGIN_INC_DIR .'init_ajax.php');
require_once(TASTY_CMS_PLUGIN_DIR .'ajax/VariationItemAjax.php');

add_action( 'admin_enqueue_scripts', 'tc_cms_admin_enqueue_scripts', 10, 1 );


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
	
	wp_register_script('validate','http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js' , array('jquery'));
	wp_register_script('validate-additional-methods','http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/additional-methods.min.js' , array('jquery'));
	wp_enqueue_script( 'validate' ); 
	wp_enqueue_script( 'validate-additional-methods' );
	wp_enqueue_script( 'ba-debug', TC_SHARED_JS_URL .'/ba-debug.js', __FILE__ );
	
	
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



?>