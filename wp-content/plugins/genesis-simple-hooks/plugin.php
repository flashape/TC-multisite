<?php
/*
	Plugin Name: Genesis Simple Hooks
	Plugin URI: http://www.studiopress.com/plugins/simple-hooks
	Description: Genesis Simple Hooks allows you easy access to the 50+ Action Hooks in the Genesis Theme.
	Author: Nathan Rice
	Author URI: http://www.nathanrice.net/

	Version: 1.8.0.2

	License: GNU General Public License v2.0 (or later)
	License URI: http://www.opensource.org/licenses/gpl-license.php
*/

/** Define our constants */
define( 'SIMPLEHOOKS_SETTINGS_FIELD', 'simplehooks-settings' );
define( 'SIMPLEHOOKS_PLUGIN_DIR', dirname( __FILE__ ) );

register_activation_hook( __FILE__, 'simplehooks_activation' );
/**
 * This function runs on plugin activation. It checks to make sure Genesis
 * or a Genesis child theme is active. If not, it deactivates itself.
 *
 * @since 0.1.0
 */
function simplehooks_activation() {

	if ( 'genesis' != basename( TEMPLATEPATH ) ) {
		simplehooks_deactivate( '1.8.0', '3.3' );
	}

}

/**
 * Deactivate Simple Hooks.
 *
 * This function deactivates Simple Hooks.
 *
 * @since 1.8.0.2
 */
function simplehooks_deactivate( $genesis_version = '1.8.0', $wp_version = '3.3' ) {
	
	deactivate_plugins( plugin_basename( __FILE__ ) );
	wp_die( sprintf( __( 'Sorry, you cannot run Simple Hooks without WordPress %s and <a href="%s">Genesis %s</a>, or greater.', 'simplehooks' ), $wp_version, 'http://www.studiopress.com/support/showthread.php?t=19576', $genesis_version ) );
	
}

add_action( 'genesis_init', 'simplehooks_init', 20 );
/**
 * Load admin menu and helper functions. Hooked to `genesis_init`.
 *
 * @since 1.8.0
 */
function simplehooks_init() {
	
	/** Deactivate if not running Genesis 1.8.0 or greater */
	if ( ! class_exists( 'Genesis_Admin_Boxes' ) )
		add_action( 'admin_init', 'simplehooks_deactivate', 10, 0 );

	/** Admin Menu */
	if ( is_admin() )
		require_once( SIMPLEHOOKS_PLUGIN_DIR . '/admin.php' );
	
	/** Helper function */
	require_once( SIMPLEHOOKS_PLUGIN_DIR . '/functions.php' );
	
}

add_action( 'genesis_init', 'simplehooks_execute_hooks', 20 );
/**
 * The following code loops through all the hooks, and attempts to
 * execute the code in the proper location.
 *
 * @uses simplehooks_execute_hook() as a callback.
 *
 * @since 0.1
 */
function simplehooks_execute_hooks() {

	$hooks = get_option( SIMPLEHOOKS_SETTINGS_FIELD );

	foreach ( (array) $hooks as $hook => $array ) {

		/** Add new content to hook */
		if ( simplehooks_get_option( $hook, 'content' ) ) {
			add_action( $hook, 'simplehooks_execute_hook' );
		}

		/** Unhook stuff */
		if ( isset( $array['unhook'] ) ) {

			foreach( (array) $array['unhook'] as $function ) {

				remove_action( $hook, $function );

			}

		}

	}

}

/**
 * The following function executes any code meant to be hooked.
 * It checks to see if shortcodes or PHP should be executed as well.
 *
 * @uses simplehooks_get_option()
 *
 * @since 0.1
 */
function simplehooks_execute_hook() {

	$hook = current_filter();
	$content = simplehooks_get_option( $hook, 'content' );

	if( ! $hook || ! $content )
		return;

	$shortcodes = simplehooks_get_option( $hook, 'shortcodes' );
	$php = simplehooks_get_option( $hook, 'php' );

	$value = $shortcodes ? do_shortcode( $content ) : $content;

	if ( $php )
		eval( "?>$value<?php " );
	else
		echo $value;

}