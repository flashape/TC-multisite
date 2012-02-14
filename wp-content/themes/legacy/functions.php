<?php
/** Start the engine */
require_once( TEMPLATEPATH . '/lib/init.php' );

/** Child theme library */
require( CHILD_DIR.'/lib/style.php' );

/** Child theme (do not remove) */
define( 'CHILD_THEME_NAME', 'Legacy Theme' );
define( 'CHILD_THEME_URL', 'http://market.studiopress.com/themes/legacy' );

if(!function_exists('_log')){
  function _log( $message ) {
    if( WP_DEBUG === true ){
      if( is_array( $message ) || is_object( $message ) ){
        error_log( print_r( $message, true ) );
      } else {
        error_log( $message );
      }
    }
  }
}

/** Add support for custom background */
add_custom_background();

/** Add new image sizes */
add_image_size( 'home-bottom', 290, 150, TRUE );
add_image_size( 'portfolio-thumbnail', 200, 130, TRUE );
add_image_size('grid-thumbnail', 100, 100, TRUE);
add_image_size('300-width-unlimited-height', 300, 9999 ); //300 pixels wide (and unlimited height)
add_image_size('400-400-cropped', 400, 400, TRUE ); //400 x 400 cropped
add_image_size('400-200-hard-cropped', 400, 200, TRUE ); //400 x 200 cropped
add_image_size('400-400-soft-cropped', 400, 400 ); //400 x 400 cropped
add_image_size('200-200-soft-cropped', 200, 200 ); //200 x 200 cropped
add_image_size('200-200-hard-cropped', 200, 200, TRUE ); //200 x 200 cropped

/** Add support for custom header */
add_theme_support( 'genesis-custom-header', array( 'width' => 960, 'height' => 100, 'textcolor' => '333333' ) );

/** Reposition the Primary Navigation */
// remove_action( 'genesis_after_header', 'genesis_do_subnav' ) ;
// add_action( 'genesis_before_header', 'genesis_do_subnav' );

// Remove the Primary Navigation
remove_action( 'genesis_after_header', 'genesis_do_nav' );
add_action( 'genesis_after_header', 'child_do_nav' );
function child_do_nav() {
	uberMenu_easyIntegrate();

}

remove_action('genesis_after_header', 'genesis_do_subnav');
add_action( 'genesis_after_header', 'genesis_do_subnav', 10 );



/** Add theme settings to Genesis default theme settings */
add_filter( 'genesis_theme_settings_defaults', 'legacy_theme_settings' );
function legacy_theme_settings( $defaults ) {
	$defaults['legacy_portfolio_content'] = 'excerpts';
	return $defaults;
}

/** Add Portfolio Settings box to Genesis Theme Settings */
add_action( 'admin_menu', 'legacy_add_portfolio_settings_box', 11 );
function legacy_add_portfolio_settings_box() {
	global $_genesis_theme_settings_pagehook;
	add_meta_box('genesis-theme-settings-legacy-portfolio', __('Portfolio Page Settings', 'legacy'), 'legacy_theme_settings_portfolio', 	$_genesis_theme_settings_pagehook, 'column2');
}
	
function legacy_theme_settings_portfolio() {
?>
	<p><?php _e("Display which category:", 'genesis'); ?>
	<?php wp_dropdown_categories(array('selected' => genesis_get_option('legacy_portfolio_cat'), 'name' => GENESIS_SETTINGS_FIELD.'[legacy_portfolio_cat]', 'orderby' => 'Name' , 'hierarchical' => 1, 'show_option_all' => __("All Categories", 'genesis'), 'hide_empty' => '0' )); ?></p>
	
	<p><?php _e("Exclude the following Category IDs:", 'genesis'); ?><br />
	<input type="text" name="<?php echo GENESIS_SETTINGS_FIELD; ?>[legacy_portfolio_cat_exclude]" value="<?php echo esc_attr( genesis_get_option('legacy_portfolio_cat_exclude') ); ?>" size="40" /><br />
	<small><strong><?php _e("Comma separated - 1,2,3 for example", 'genesis'); ?></strong></small></p>
	
	<p><?php _e('Number of Posts to Show', 'genesis'); ?>:
	<input type="text" name="<?php echo GENESIS_SETTINGS_FIELD; ?>[legacy_portfolio_cat_num]" value="<?php echo esc_attr( genesis_option('legacy_portfolio_cat_num') ); ?>" size="2" /></p>
	
	<p><span class="description"><?php _e('<b>NOTE:</b> The Portfolio Page displays the "Portfolio Page" image size plus the excerpt or full content as selected below.', 'legacy'); ?></span></p>
	
	<p><?php _e("Select one of the following:", 'genesis'); ?>
	<select name="<?php echo GENESIS_SETTINGS_FIELD; ?>[legacy_portfolio_content]">
		<option style="padding-right:10px;" value="full" <?php selected('full', genesis_get_option('legacy_portfolio_content')); ?>><?php _e("Display post content", 'genesis'); ?></option>
		<option style="padding-right:10px;" value="excerpts" <?php selected('excerpts', genesis_get_option('legacy_portfolio_content')); ?>><?php _e("Display post excerpts", 'genesis'); ?></option>
	</select></p>
	
	<p><label for="<?php echo GENESIS_SETTINGS_FIELD; ?>[legacy_portfolio_content_archive_limit]"><?php _e('Limit content to', 'genesis'); ?></label> <input type="text" name="<?php echo GENESIS_SETTINGS_FIELD; ?>[legacy_portfolio_content_archive_limit]" id="<?php echo GENESIS_SETTINGS_FIELD; ?>[legacy_portfolio_content_archive_limit]" value="<?php echo esc_attr( genesis_option('legacy_portfolio_content_archive_limit') ); ?>" size="3" /> <label for="<?php echo GENESIS_SETTINGS_FIELD; ?>[legacy_portfolio_content_archive_limit]"><?php _e('characters', 'genesis'); ?></label></p>
	
	<p><span class="description"><?php _e('<b>NOTE:</b> Using this option will limit the text and strip all formatting from the text displayed. To use this option, choose "Display post content" in the select box above.', 'genesis'); ?></span></p>
<?php
}	

/** Add support for 4-column footer widgets */
add_theme_support( 'genesis-footer-widgets', 4 );
		
/** Register widget areas */
genesis_register_sidebar( array(
	'id'			=> 'slider',
	'name'			=> __( 'Slider', 'legacy' ),
	'description'	=> __( 'This is the slider widget section of the homepage.', 'legacy' ),
) );
genesis_register_sidebar( array(
	'id'			=> 'welcome',
	'name'			=> __( 'Welcome', 'legacy' ),
	'description'	=> __( 'This is the welcome section of the homepage.', 'legacy' ),
) );
genesis_register_sidebar( array(
	'id'			=> 'home-bottom-1',
	'name'			=> __( 'Home Bottom#1', 'legacy' ),
	'description'	=> __( 'This is the first column of the middle section of the homepage.', 'legacy' ),
) );
genesis_register_sidebar( array(
	'id'			=> 'home-bottom-2',
	'name'			=> __( 'Home Bottom#2', 'legacy' ),
	'description'	=> __( 'This is the second column of the middle section of the homepage.', 'legacy' ),
) );
genesis_register_sidebar( array(
	'id'			=> 'home-bottom-3',
	'name'			=> __( 'Home Bottom#3', 'legacy' ),
	'description'	=> __( 'This is the third column of the middle section of the homepage.', 'legacy' ),
) );