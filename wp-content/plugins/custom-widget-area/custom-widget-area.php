<?php

/**
Plugin Name: Custom Widget Area for WordPress
Plugin URI: http://plugins.righthere.com/custom-widget-areas/
Description: This plugin lets you create your own widget areas, configure them by adding widgets, and replace the default sidebars or even show widgets directly in the content of Pages or Posts. Supports custom widget areas in Posts(single), Pages, Author Page, Attachment Page. Support for Custom Post Types and Custom Taxonomies.
Version: 2.0.2 rev.6117
Author: Alberto Lau (RightHere LLC)
Author URI: http://plugins.righthere.com
 **/

define("CWA_VERSION","2.0.2"); 
define('CUSTWIDGET_PATH', plugin_dir_path(__FILE__) ); 
define("CUSTWIDGET_URL", plugin_dir_url(__FILE__) );

load_plugin_textdomain('custside', null, dirname( plugin_basename( __FILE__ ) ).'/languages' );
require_once(CUSTWIDGET_PATH.'includes/class.plugin_custom_widget.php');

global $cwa_plugin;
$cwa_plugin = new plugin_custom_widget();

//-- Installation script:---------------------------------
function cwa_plugin_install(){
	require_once CUSTWIDGET_PATH.'includes/install.php';
	new cwa_install();
}
register_activation_hook(__FILE__, 'cwa_plugin_install');
//-------------------------------------------------------- 
?>