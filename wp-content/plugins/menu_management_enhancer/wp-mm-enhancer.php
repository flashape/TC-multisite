<?php 

/*
Plugin Name: Menu Management Enhancer
Plugin URI: http://menumanager.sevenspark.com
Description: Enhanced Management UI for WordPress Navigation Menus.  Expand and collapse menu trees, quickly jump between top level menu items, and more!
Version: 1.0
Author: Chris Mavricos, SevenSpark
Author URI: http://sevenspark.com
License: You should have purchased a license from CodeCanyon http://codecanyon.net/user/sevenspark/portfolio?ref=sevenspark
*/

define('WPMME_VERSION', '1.0');

function wpmme_init(){
	
	//Load CSS and JS - admin only
	if(is_admin()){
		//Load only for Appearance > Menus
		add_action( 'admin_print_styles-nav-menus.php', 'wpmme_load_css' );
		add_action( 'admin_print_styles-nav-menus.php', 'wpmme_load_js' );
	}	
}
add_action( 'plugins_loaded', 'wpmme_init');

/*
 * Load CSS
 */
function wpmme_load_css(){
	wp_enqueue_style( 'wpmme-style', plugins_url( 'css/wpmme.css' , __FILE__ ), null, WPMME_VERSION );
}

/*
 * Load JavaScript
 */
function wpmme_load_js(){
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'jquery-ui' );
	wp_enqueue_script( 'jquery-ui-widget' );
	wp_enqueue_script( 'wpmme-sausage-js', plugins_url( 'js/wpmme.sausage.js' , __FILE__) );
	wp_enqueue_script( 'wpmme-js', plugins_url( 'js/wpmme.js' , __FILE__) );
}
