<?php
/*
Copy paste this code into your themes functions.php
*/

//--Custom Widget Areas---------------------------------------------
if(!defined('CUSTWIDGET_PATH')):
define('CUSTWIDGET_PATH', dirname( __FILE__ ). "/custom-widget-area/" ); 
define("CUSTWIDGET_URL", get_bloginfo('stylesheet_directory') . "/custom-widget-area/" );

require_once(CUSTWIDGET_PATH.'custom-widget-area-theme.php');

$settings = array(
	'options_parameters'=> array(
		'menu_text'				=>'Custom Widget Area',//Menu label for the CWA options
		'page_title'			=>'Custom Widget Area options',//Text to display on the page title
		'option_menu_parent'	=>'plugins.php' //parent menu where CWA Options should show
	)
);

global $cwa_plugin;
$cwa_plugin = new plugin_custom_widget($settings);
$cwa_plugin->plugins_loaded();
endif;
//----------------------------------------------------------------
?>