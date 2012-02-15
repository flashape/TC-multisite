<?php
/** Start the engine **/
require_once(TEMPLATEPATH.'/lib/init.php');
/*define( 'NO_HEADER_TEXT', true ); 
add_theme_support( 'genesis-custom-header', array( 'width' => 1000, 'height' => 100, 'no_header_text'=>true ) );*/
/** Add support for custom background **/
if (function_exists('add_custom_background')) {
	add_custom_background();
}

// Add a Div Wrap Around Subnav & Inner
add_action('genesis_after_header', 'start_inner_wrap', 5);
function start_inner_wrap() { 
	echo '<div id="inner-wrap">';
}

add_action('genesis_before_footer', 'end_inner_wrap');
function end_inner_wrap() {
	echo '</div>';
}

// Remove the Primary Navigation
remove_action( 'genesis_after_header', 'genesis_do_nav' );
add_action( 'genesis_after_header', 'child_do_nav' );
function child_do_nav() {
	uberMenu_easyIntegrate();
	// global $wp_query;
	// _log($wp_query);
}

remove_action('genesis_after_header', 'genesis_do_subnav');
add_action( 'genesis_after_header', 'genesis_do_subnav', 10 );

/**
 * This function  is responsible for displaying the "Secondary Navigation" bar.
 *
 * @uses genesis_nav(), genesis_get_option(), wp_nav_menu
 * @since 1.0.1
 *
 */
function child_do_subnav() {
//	uberMenu_easyIntegrate();
}
	


// Add Stripes Above Nav
add_action('genesis_after_header', 'start_top_stripes', 5);
function start_top_stripes() {
	echo '<div id="top-stripes"></div>';
}



// Add Stripes Above Footer
add_action('genesis_before_footer', 'start_bottom_stripes', 5);
function start_bottom_stripes() {
	echo '<div id="bottom-stripes"></div>';
}

// Add Genesis Grid
/** Add new image sizes **/
add_image_size('grid-thumbnail', 100, 100, TRUE);
add_image_size('300-width-unlimited-height', 300, 9999 ); //300 pixels wide (and unlimited height)
add_image_size('400-400-cropped', 400, 400, TRUE ); //400 x 400 cropped
add_image_size('400-200-hard-cropped', 400, 200, TRUE ); //400 x 200 cropped
add_image_size('400-400-soft-cropped', 400, 400 ); //400 x 400 cropped
add_image_size('200-200-soft-cropped', 200, 200 ); //200 x 200 cropped
add_image_size('200-200-hard-cropped', 200, 200, TRUE ); //200 x 200 cropped


// Modify speak your mind text in comments
add_filter('genesis_comment_form_args', 'custom_comment_form_args');
function custom_comment_form_args($args) {
    $args['title_reply'] = 'Leave a Comment';
    return $args;
}



// Modify credits section
add_filter('genesis_footer_creds_text', 'custom_footer_creds_text');
function custom_footer_creds_text($creds) {
    $creds = '[footer_copyright] &bull; ' . get_bloginfo('name'); //. ' &bull; Theme by <a href="http://auxanocreative.com" target="_blank">Auxano Creative</a> &bull; Powered by <a href="http://auxanocreative.com/go/genesis-framework/" target="_blank">Genesis</a> ';
    return $creds;
}

