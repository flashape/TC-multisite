<?php

// Template Name: Portfolio

// Loads prettyPhoto scripts
add_action('get_header', 'prettyPhoto_scripts');
function prettyPhoto_scripts() {	
    wp_enqueue_script('jquery-1', CHILD_URL.'/plugins/prettyPhoto/js/jquery-1.4.4.min.js', array('jquery'), '1.0');
    wp_enqueue_style('prettyPhoto', CHILD_URL.'/plugins/prettyPhoto/css/prettyPhoto.css', array(), '1');
    wp_enqueue_script('prettyPhoto2', CHILD_URL.'/plugins/prettyPhoto/js/jquery.prettyPhoto.js', array('jquery'), '1.0');
}
		
// Force layout to full-width-content
add_filter('genesis_pre_get_option_site_layout', 'legacy_home_layout');
function legacy_home_layout($layout) {
    $layout = 'full-width-content';
    return $layout;
}

// Add .teaser class to every post, except first 2
add_filter('post_class', 'portfolio_post_class');
function portfolio_post_class( $classes ) {
    $classes[] = 'portfolio';
    return $classes;
}

// Adds prettyPhoto 'gallery_clearfix' class
add_filter('post_class', 'gallery_clearfix');
function gallery_clearfix( $classes ) {
    $classes[] = 'gallery clearfix';
    return $classes;
}

// Modify length of post excerpts
add_filter('excerpt_length', 'custom_excerpt_length');
function custom_excerpt_length($length) {
    return 15; // pull first 15 words
}

// Add "Read More" link
add_filter('the_excerpt', 'child_homepage_excerpt_filter');
function child_homepage_excerpt_filter( $text ) {
    return sprintf( '%s<a href="%s" class="more-link">%s</a>', $text, get_permalink(), __('Read More', 'legacy') );
}

// Remove post info and meta info
remove_action('genesis_after_post_content', 'genesis_post_meta');
remove_action('genesis_before_post_content', 'genesis_post_info');

// Add Featured Image for the Portfolio posts in this Page Template
add_action('genesis_before_post_content', 'legacy_portfolio_do_post_image');
function legacy_portfolio_do_post_image() {
    $img = genesis_get_image( array( 'format' => 'html', 'size' => 'portfolio-thumbnail', 'attr' => array( 'class' => 'alignnone post-image' ) ) );
	printf( '<a href="%s" rel="prettyPhoto[gallery1]" title="%s">%s</a>', genesis_get_image( array( 'format' => 'url', 'size' => 'Portfolio Full', 'attr' => array( 'class' => 'alignnone post-image' ) ) ), the_title_attribute('echo=0'), $img );
}

// Move title below post image
remove_action('genesis_post_title', 'genesis_do_post_title');
add_action('genesis_post_content', 'genesis_do_post_title', 9);

// Remove default content for this Page Template
remove_action('genesis_post_content', 'genesis_do_post_image');
remove_action('genesis_post_content', 'genesis_do_post_content');

// Add Content for the Portfolio posts in this Page Template
add_action('genesis_post_content', 'legacy_portfolio_do_post_content');
function legacy_portfolio_do_post_content() {
    
    if ( genesis_get_option('legacy_portfolio_content') == 'excerpts' ) {
        the_excerpt();
    
    } else {
        if ( genesis_get_option('legacy_portfolio_content_archive_limit') )
            the_content_limit( (int)genesis_get_option('legacy_portfolio_content_archive_limit'), __('Read More', 'legacy') );
        else
            the_content(__('Read More', 'legacy'));
    }
} 

// Clear float using genesis_custom_loop() $loop_counter variable
// Outputs clearing div after every 4 posts
// $loop_counter is incremented after this function is run
add_action('genesis_after_post', 'portfolio_after_post');
function portfolio_after_post() {
    global $loop_counter;
    
    if ( $loop_counter == 3 ) {
        $loop_counter = -1;
        echo '<div class="clear"></div>';
    }
}

// Remove standard loop
remove_action('genesis_loop', 'genesis_do_loop');

// Add custom loop
add_action('genesis_loop', 'portfolio_loop');
function portfolio_loop() {
    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
    
    $include = genesis_get_option('legacy_portfolio_cat');
    $exclude = genesis_get_option('legacy_portfolio_cat_exclude') ? explode(',', str_replace(' ', '', genesis_get_option('legacy_portfolio_cat_exclude'))) : '';
        
    $cf = genesis_get_custom_field('query_args'); // Easter Egg
    $args = array('cat' => $include, 'category__not_in' => $exclude, 'showposts' => genesis_get_option('legacy_portfolio_cat_num'), 'paged' => $paged);
    $query_args = wp_parse_args($cf, $args);
    
    genesis_custom_loop( $query_args );
}
	
genesis();

?>
<script type="text/javascript" charset="utf-8">
  $(document).ready(function(){
    $("a[rel^='prettyPhoto']").prettyPhoto();
  });
</script>
<?php			