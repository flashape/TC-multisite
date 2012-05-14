<?php
/*
Plugin Name: MaxButtons Pro
Plugin URI: http://maxbuttons.com
Description: The ultimate CSS3 button generator for WordPress. If you have the free version, you should deactivate it first before activating the Pro version.
Version: 1.3.0
Author: Max Foundry
Author URI: http://maxfoundry.com

Copyright 2011 Max Foundry, LLC (http://maxfoundry.com)
*/

require 'updater/plugin-update-checker.php';
$updater = new PluginUpdateChecker('http://maxfoundry.com/changelog/maxbuttons-pro/info.json', __FILE__);

define('MAXBUTTONS_PRO_VERSION_KEY', 'mbpro_pro_version');
define('MAXBUTTONS_PRO_VERSION_NUM', '1.3.0');

$mbpro_installed_version = get_option('MAXBUTTONS_PRO_VERSION_KEY');

mbpro_set_global_paths();
mbpro_set_activation_hooks();

function mbpro_set_global_paths() {	
	if (!defined('MAXBUTTONS_PRO_PLUGIN_NAME'))
		define('MAXBUTTONS_PRO_PLUGIN_NAME', trim(dirname(plugin_basename(__FILE__)), '/'));

	if (!defined('MAXBUTTONS_PRO_PLUGIN_DIR'))
		define('MAXBUTTONS_PRO_PLUGIN_DIR', WP_PLUGIN_DIR . '/' . MAXBUTTONS_PRO_PLUGIN_NAME);

	if (!defined('MAXBUTTONS_PRO_PLUGIN_URL'))
		define('MAXBUTTONS_PRO_PLUGIN_URL', WP_PLUGIN_URL . '/' . MAXBUTTONS_PRO_PLUGIN_NAME);

	if (!defined('MAXBUTTONS_PRO_EXPORTS_DIR'))
		define('MAXBUTTONS_PRO_EXPORTS_DIR', MAXBUTTONS_PRO_PLUGIN_DIR . '/exports');
		
	if (!defined('MAXBUTTONS_PRO_EXPORTS_URL'))
		define('MAXBUTTONS_PRO_EXPORTS_URL', MAXBUTTONS_PRO_PLUGIN_URL . '/exports');

	if (!defined('MAXBUTTONS_PRO_PACKS_DIR'))
		define('MAXBUTTONS_PRO_PACKS_DIR', MAXBUTTONS_PRO_PLUGIN_DIR . '/packs');
		
	if (!defined('MAXBUTTONS_PRO_PACKS_URL'))
		define('MAXBUTTONS_PRO_PACKS_URL', MAXBUTTONS_PRO_PLUGIN_URL . '/packs');
}

function mbpro_set_activation_hooks() {
	register_activation_hook(__FILE__, 'mbpro_register_activation_hook');
	register_deactivation_hook(__FILE__, 'mbpro_register_deactivation_hook');
}

function mbpro_register_activation_hook() {
	if (function_exists('is_multisite') && is_multisite()) {
		if (isset($_GET['networkwide']) && ($_GET['networkwide'] == 1)) {
			mbpro_call_function_for_each_site('mbpro_activate');
			return;
		}
	}
	
	// Otherwise do it for a single blog/site
	mbpro_activate();
}

function mbpro_activate() {
	mbpro_create_database_table();
	update_option(MAXBUTTONS_PRO_VERSION_KEY, MAXBUTTONS_PRO_VERSION_NUM);
}

function mbpro_register_deactivation_hook() {
	if (function_exists('is_multisite') && is_multisite()) {
		if (isset($_GET['networkwide']) && ($_GET['networkwide'] == 1)) {
			mbpro_call_function_for_each_site('mbpro_deactivate');
			return;
		}
	}
	
	// Otherwise do it for a single blog/site
	mbpro_deactivate();
}

function mbpro_deactivate() {
	delete_option(MAXBUTTONS_PRO_VERSION_KEY);
}

function mbpro_call_function_for_each_site($function) {
	global $wpdb;
	
	// Hold this so we can switch back to it
	$root_blog = $wpdb->blogid;
	
	// Get all the blogs/sites in the network and invoke the function for each one
	$blog_ids = $wpdb->get_col($wpdb->prepare("SELECT blog_id FROM $wpdb->blogs"));
	foreach ($blog_ids as $blog_id) {
		switch_to_blog($blog_id);
		call_user_func($function);
	}
	
	// Now switch back to the root blog
	switch_to_blog($root_blog);
}

add_filter('plugin_action_links', 'mbpro_plugin_action_links', 10, 2);
function mbpro_plugin_action_links($links, $file) {
	static $this_plugin;
	
	if (!$this_plugin) {
		$this_plugin = plugin_basename(__FILE__);
	}
	
	if ($file == $this_plugin) {
		$packs_link = '<a href="' . admin_url() . 'admin.php?page=maxbuttons-packs">Packs</a>';
		array_unshift($links, $packs_link);
		
		$buttons_link = '<a href="' . admin_url() . 'admin.php?page=maxbuttons-controller&action=buttons">Buttons</a>';
		array_unshift($links, $buttons_link);
	}

	return $links;
}

add_action('admin_menu', 'mbpro_admin_menu');
function mbpro_admin_menu() {
	$admin_pages = array();
	
	$page_title = 'MaxButtons Pro : Buttons';
	$menu_title = 'MaxButtons Pro';
	$capability = 'manage_options';
	$menu_slug = 'maxbuttons-controller';
	$function = 'mbpro_controller';
	$icon_url = MAXBUTTONS_PRO_PLUGIN_URL . '/images/mb-16.png';
	add_menu_page($page_title, $menu_title, $capability, $menu_slug, $function, $icon_url);
	
	// We add this submenu page with the same slug as the parent to ensure we don't get duplicates
	$sub_menu_title = 'Buttons';
	$admin_pages[] = add_submenu_page($menu_slug, $page_title, $sub_menu_title, $capability, $menu_slug, $function);

	// Now add the submenu page for the Add New page
	$submenu_page_title = 'MaxButtons Pro : Add/Edit Button';
	$submenu_title = 'Add New';
	$submenu_slug = 'maxbuttons-button';
	$submenu_function = 'mbpro_button';
	$admin_pages[] = add_submenu_page($menu_slug, $submenu_page_title, $submenu_title, $capability, $submenu_slug, $submenu_function);
	
	// Now add the submenu page for the Packs page
	$submenu_page_title = 'MaxButtons Pro : Packs';
	$submenu_title = 'Packs';
	$submenu_slug = 'maxbuttons-packs';
	$submenu_function = 'mbpro_packs';
	$admin_pages[] = add_submenu_page($menu_slug, $submenu_page_title, $submenu_title, $capability, $submenu_slug, $submenu_function);
	
	// Now add the submenu page for the Export page
	$submenu_page_title = 'MaxButtons Pro : Export';
	$submenu_title = 'Export';
	$submenu_slug = 'maxbuttons-export';
	$submenu_function = 'mbpro_export';
	$admin_pages[] = add_submenu_page($menu_slug, $submenu_page_title, $submenu_title, $capability, $submenu_slug, $submenu_function);
	
	foreach ($admin_pages as $admin_page) {
		add_action("admin_print_styles-{$admin_page}", 'mbpro_add_admin_styles');
		add_action("admin_print_scripts-{$admin_page}", 'mbpro_add_admin_scripts');
	}
}

function mbpro_controller() {
	include_once 'maxbuttons-controller.php';
}

function mbpro_button() {
	include_once 'maxbuttons-button.php';
}

function mbpro_packs() {
	include_once 'maxbuttons-packs.php';
}

function mbpro_export() {
	include_once 'maxbuttons-export.php';
}

function mbpro_add_admin_styles() {		
	wp_enqueue_style('thickbox');
	wp_enqueue_style('maxbuttons-css', MAXBUTTONS_PRO_PLUGIN_URL . '/styles.css');
	wp_enqueue_style('maxbuttons-colorpicker-css', MAXBUTTONS_PRO_PLUGIN_URL . '/js/colorpicker/css/colorpicker.css');
}

function mbpro_add_admin_scripts() {
	wp_enqueue_script('media-upload');
	wp_enqueue_script('jquery-ui-draggable');
	wp_enqueue_script('maxbuttons-colorpicker-js', MAXBUTTONS_PRO_PLUGIN_URL . '/js/colorpicker/colorpicker.js', array('jquery'));
}

add_action('wp_print_scripts', 'mbpro_add_frontend_scripts');
function mbpro_add_frontend_scripts() {
	wp_enqueue_script('maxbuttons-js', MAXBUTTONS_PRO_PLUGIN_URL . '/js/maxbuttons.js', array('jquery'));
}

add_filter('upload_mimes', 'mbpro_upload_mimes');
function mbpro_upload_mimes($existing_mimes=array()) {
	$existing_mimes['zip'] = 'application/zip';
	return $existing_mimes;
}

function mbpro_create_database_table() {
	global $mbpro_installed_version;
	
	$table_name = mbpro_get_buttons_table_name();
	
	// IMPORTANT: There MUST be two spaces between the PRIMARY KEY keywords
	// and the column name, and the column name MUST be in parenthesis.
	$sql = "CREATE TABLE " . $table_name . " (
				id INT NOT NULL AUTO_INCREMENT,
				name VARCHAR(100) NULL,
				description VARCHAR(500) NULL,
				url VARCHAR(250) NULL,
				text VARCHAR(100) NULL,
				text_font_family VARCHAR(50) NULL,
				text_font_size VARCHAR(5) NULL,
				text_font_style VARCHAR(10) NULL,
				text_font_weight VARCHAR(10) NULL,
				text_align VARCHAR(10) NULL,
				text_padding_top VARCHAR(5) NULL,
				text_padding_bottom VARCHAR(5) NULL,
				text_padding_left VARCHAR(5) NULL,
				text_padding_right VARCHAR(5) NULL,
				text2 VARCHAR(100) NULL,
				text2_font_family VARCHAR(50) NULL,
				text2_font_size VARCHAR(5) NULL,
				text2_font_style VARCHAR(10) NULL,
				text2_font_weight VARCHAR(10) NULL,
				text2_align VARCHAR(10) NULL,
				text2_padding_top VARCHAR(5) NULL,
				text2_padding_bottom VARCHAR(5) NULL,
				text2_padding_left VARCHAR(5) NULL,
				text2_padding_right VARCHAR(5) NULL,
				text_color VARCHAR(10) NULL,
				text_color_hover VARCHAR(10) NULL,
				text_shadow_offset_left VARCHAR(5) NULL,
				text_shadow_offset_top VARCHAR(5) NULL,
				text_shadow_width VARCHAR(5) NULL,
				text_shadow_color VARCHAR(10) NULL,
				text_shadow_color_hover VARCHAR(10) NULL,
				border_radius_top_left VARCHAR(5) NULL,
				border_radius_top_right VARCHAR(5) NULL,
				border_radius_bottom_left VARCHAR(5) NULL,
				border_radius_bottom_right VARCHAR(5) NULL,
				border_style VARCHAR(10) NULL,
				border_width VARCHAR(5) NULL,
				border_color VARCHAR(10) NULL,
				border_color_hover VARCHAR(10) NULL,
				box_shadow_offset_left VARCHAR(5) NULL,
				box_shadow_offset_top VARCHAR(5) NULL,
				box_shadow_width VARCHAR(5) NULL,
				box_shadow_color VARCHAR(10) NULL,
				box_shadow_color_hover VARCHAR(10) NULL,
				gradient_start_color VARCHAR(10) NULL,
				gradient_start_color_hover VARCHAR(10) NULL,
				gradient_end_color VARCHAR(10) NULL,
				gradient_end_color_hover VARCHAR(10) NULL,
				gradient_stop VARCHAR(2) NULL,
				new_window VARCHAR(5) NULL,
				width VARCHAR(10) NULL,
				height VARCHAR(10) NULL,
				icon_url VARCHAR(250) NULL,
				icon_position VARCHAR(10) NULL,
				icon_padding_top VARCHAR(5) NULL,
				icon_padding_bottom VARCHAR(5) NULL,
				icon_padding_left VARCHAR(5) NULL,
				icon_padding_right VARCHAR(5) NULL,
				icon_alt VARCHAR(50) NULL,
				container_enabled VARCHAR(5) NULL,
				container_width VARCHAR(5) NULL,
				container_margin_top VARCHAR(5) NULL,
				container_margin_right VARCHAR(5) NULL,
				container_margin_bottom VARCHAR(5) NULL,
				container_margin_left VARCHAR(5) NULL,
				container_alignment VARCHAR(25) NULL,
				PRIMARY KEY  (id)
			);";

	if (!mbpro_database_table_exists($table_name)) {
		require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		dbDelta($sql);
	}
	
	if (mbpro_database_table_exists($table_name) && $mbpro_installed_version != MAXBUTTONS_PRO_VERSION_NUM) {
		require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		dbDelta($sql);
	}
}

function mbpro_get_buttons_table_name() {
	global $wpdb;
	return $wpdb->prefix . 'maxbuttons_buttons';
}

function mbpro_database_table_exists($table_name) {
	global $wpdb;
	return strtolower($wpdb->get_var("SHOW TABLES LIKE '$table_name'")) == strtolower($table_name);
}

function mbpro_strip_px($value) {
	return rtrim($value, 'px');
}

function mbpro_strip_zip_extension($value) {
	return rtrim($value, '.zip');
}

function mbpro_starts_with($haystack, $needle) {
	$length = strlen($needle);
	return (substr($haystack, 0, $length) === $needle);
}

function mbpro_log_me($message) {
    if (WP_DEBUG === true) {
        if (is_array($message) || is_object($message)) {
            error_log(print_r($message, true));
        } else {
            error_log($message);
        }
    }
}

add_filter('widget_text', 'do_shortcode');
include_once 'maxbuttons-shortcode.php';
?>