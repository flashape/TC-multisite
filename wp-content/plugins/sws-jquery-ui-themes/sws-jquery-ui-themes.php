<?php

/**
Plugin Name: SWS: jQuery UI themes for Styles With Shortcodes
Plugin URI: http://plugins.righthere.com/sws-jquery-ui-themes
Description: Adds jQuery UI themes for use in Styles With Shortcodes plugin, you can add additional themes by uploading your jquery-ui theme to the themes folder.
Version: 1.0.3 rev4622
Author: Righthere LLC
Author URI: http://plugins.righthere.com
 **/
if(defined('WPCSS')&&WPCSS>'1.0.1'){

}else{
	return;
}

class plugin_sws_ui_themes {
	function plugin_sws_ui_themes(){
		add_action('plugins_loaded',array(&$this,'wp_register'),100);
	}
	
	function wp_register(){
		global $sws_plugin;
		
		$css_files = $this->get_ui_stylesheets();
		if(count($css_files)>0){
			foreach($css_files as $f){
				wp_register_style( $f->name, trailingslashit(get_option('siteurl')) . 'wp-content/plugins/' . basename(dirname(__FILE__)) . '/themes/'.$f->name.'/'.$f->path);	
				$sws_plugin->add_style($f->name,ucfirst($f->name),'',true);
			}		
		}
	}
	
	function get_ui_stylesheets(){
		$res = array();
		$theme_path = ABSPATH . 'wp-content/plugins/'. basename(dirname(__FILE__)).'/themes';
		$theme_dirs = $this->get_dirs($theme_path);
		if(count($theme_dirs)>0){
			foreach($theme_dirs as $dir){
				$css_files = $this->get_css_files($theme_path.'/'.$dir);
				$res[]=(object)array(
					'name'=> $dir,
					'path'=> $css_files[0]//more than one file is unexpected.
				);
			}
		}
		return $res;
	}
	
	function get_dirs($path){
		$dirs = array();
		if ($handle = @opendir( $path )) {
		    while (false !== ($file = readdir($handle))) {
			    if(!in_array($file,array('.','..'))){
					$dirs[]=$file;
				}
		    }
		    @closedir($handle);
		}	
		return $dirs;
	}
	
	function get_css_files($path){
		$files = array();
		
		if ($handle = @opendir( $path )) {
		    while (false !== ($file = @readdir($handle))) {
				if (is_dir($file)){
					continue;
				}
				$path_parts = @pathinfo($file);
				
				if('css'==@$path_parts['extension']){
					$files[]=$file;
				}
		    }
		    @closedir($handle);
		}	
		return $files;
	}
}

new plugin_sws_ui_themes();

?>