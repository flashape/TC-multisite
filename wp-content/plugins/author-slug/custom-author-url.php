<?php 
/*
Plugin Name: Custom Author URL
Plugin URI: http://www.microkid.net/wordpress/author-slug/
Description: Customize the author slug in the permalink URL for author pages.
Author: Microkid
Version: 2.0.1
Author URI: http://www.microkid.net

This software is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

# Run this when plugin is activated
register_activation_hook( __FILE__, 'AS_activate' );

# Change the author base on WP init
add_action('init', 'AS_author_base');

# When in WP admin, add the plugins settings menu and load the textdomain
if( is_admin() ) {
	add_action('admin_menu', 'AS_add_options_page');
    load_plugin_textdomain( 'author-slug', WP_PLUGIN_DIR . '/' .dirname(plugin_basename(__FILE__)) . '/languages', dirname(plugin_basename(__FILE__)) . '/languages' );
}

/**
 * AS_activate() - Set a default value when the plugin is activated
 *
 */
function AS_activate() {
	if( ! get_option("AS_author_slug") ) {
		add_option( 'AS_author_slug', 'author', '', 'yes' );
	}
}
 
/**
 * AS_add_options_page() - Add the options page to the admin menu
 *
 */
function AS_add_options_page() {
	add_options_page("Custom author URL", __('Custom author URL', 'author-slug'), "manage_options", __FILE__, "AS_options_page");
}

/**
 * AS_add_options_page() - Generate the admin options page
 */
function AS_options_page() {
    # When saving settings
	if( isset( $_POST['AS_author_slug'] ) ) {
	    # Save the new author slug
        update_option( 'AS_author_slug', $_POST['AS_author_slug'] );
        # Change the WP rewrite rule for author base
        global $wp_rewrite;
        $wp_rewrite->author_base = $_POST['AS_author_slug'];
        # Flush/refresh the Wordpress rewrite rules
        $wp_rewrite->flush_rules();
		echo '<div id="message" class="updated fade"><p><strong>'.__('Settings saved', 'author-slug').'</strong></div>';
	}

	$author_slug = get_option('AS_author_slug');
	
?>
<div class="wrap">
	<h2><?php echo __('Customize author URL', 'author-slug') ?></h2>
	<form method="post" action="">
		<p><strong><?php echo __('Current author page permalink structure:', 'author-slug'); ?><code><?php echo get_option('siteurl');?>/<?php echo $author_slug ?>/<?php echo __('authorname', 'author-slug'); ?>/</code></strong></p>
		<p><label for="AS_author_slug"><?php echo __('Change author slug:', 'author-slug'); ?> </label><input type="text" name="AS_author_slug" value="<?php echo $author_slug; ?>" /></p>
		<p id="AS_submit">
			<input type="submit" name="AS_submit" value="<?php echo __('Save', 'author-slug'); ?>" class="button-primary" />
		</p>
	</form>
</div>
<?php
}

/**
 * AS_author_base() - Change the WP rewrite author base
 */
function AS_author_base() {
	global $wp_rewrite;
	$author_slug = get_option('AS_author_slug');
	$wp_rewrite->author_base = $author_slug;
}