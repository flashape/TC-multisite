<?php

/**
Plugin Name: SWS: Datatables add-on for Styles With Shortcodes
Plugin URI: http://plugins.righthere.com/sws-datatables
Description: This plugin is a add-on for Styles with Shortcodes. It adds required javascript libraries and styles needed for the datatables shortcodes.
Version: 1.0.1 rev.4626
Author: Righthere LLC
Author URI: http://plugins.righthere.com
 **/

class plugin_sws_datatables {
	function plugin_sws_datatables(){
		add_action('init',array(&$this,'init'),100);	
	}
	
	function init(){
		if(defined('WPCSS')&&WPCSS>'1.0.1'){
			$this->wp_register();
		}
	}
	
	function wp_register(){
		global $sws_plugin;
		
		$sws_plugin->add_bundle('datatables','Datatables',ABSPATH . 'wp-content/plugins/' . basename(dirname(__FILE__)).'/includes/bundle.php');
		//nivo zoom
		wp_register_script( 'sws-datatables', trailingslashit(get_option('siteurl')) . 'wp-content/plugins/' . basename(dirname(__FILE__)) . '/DataTables-1.7.4/media/js/jquery.dataTables.min.js', array('jquery'),'1.0.0' );
		wp_register_style( 'sws-datatables', trailingslashit(get_option('siteurl')) . 'wp-content/plugins/' . basename(dirname(__FILE__)) . '/DataTables-1.7.4/media/css/demo_table.css', array(),'1.0.0' );	
		wp_register_style( 'sws-datatables-ui', trailingslashit(get_option('siteurl')) . 'wp-content/plugins/' . basename(dirname(__FILE__)) . '/DataTables-1.7.4/media/css/demo_table_jui.css', array(),'1.0.0' );	
		
		$sws_plugin->add_script('sws-datatables','DataTables','http://www.datatables.net');
		$sws_plugin->add_style('sws-datatables','DataTables STD','http://www.datatables.net');
		$sws_plugin->add_style('sws-datatables-ui','DataTables UI','http://www.datatables.net');
	}
}

new plugin_sws_datatables();

//-- Installation script:---------------------------------
if(defined('WPCSS')&&WPCSS>'1.0.1'):
function plugin_sws_datatables_install(){
	global $bundle;
	require_once ABSPATH . 'wp-content/plugins/' . basename(dirname(__FILE__)).'/includes/bundle.php';	
	$o = new ImportExport(); 
	$o->import_bundle($bundle,$error);	
	return true;
}
register_activation_hook(__FILE__, 'plugin_sws_datatables_install');
endif;
//-------------------------------------------------------- 
?>