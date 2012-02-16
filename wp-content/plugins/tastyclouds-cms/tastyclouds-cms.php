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


if (!defined('TASTY_CMS_PLUGIN_INC_DIR')) {
    define('TASTY_CMS_PLUGIN_INC_DIR', TASTY_CMS_PLUGIN_DIR . 'includes/');
    define('TASTY_CMS_PLUGIN_METABOX_DIR', TASTY_CMS_PLUGIN_DIR . 'includes/metabox/');
}

if(!defined('TC_CMS_JS_DIR')){
    define('TC_CMS_JS_DIR', plugins_url('tastyclouds-cms/js/'));
}



require_once(TASTY_CMS_PLUGIN_INC_DIR .'init_post_types.php');



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