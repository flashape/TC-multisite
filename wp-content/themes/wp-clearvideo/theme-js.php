<?php // Load Javascripts for Theme
function solostream_theme_js() {

	if ( !is_admin() && is_singular() ) {

		global $post;
		$featcontent = get_post_meta($post->ID, 'post_featcontent', true);
//		$featvideo = get_post_meta($post->ID, 'post_featvideo', true);
		$featpages = get_post_meta($post->ID, 'post_featpages', true);
//		$featgalleries = get_post_meta($post->ID, 'post_featgalleries', true);

		if ( $featcontent != "No" || $featvideo == "Yes" || $featpages == "Yes" || $featgalleries == "Yes" || is_pagetemplate_active('page-youtube.php') ) {
			wp_enqueue_script('jquery');
			wp_enqueue_script( 'flexslider', get_bloginfo('template_directory').'/js/flexslider.js', array( 'jquery' ) );
		}

		if ( is_pagetemplate_active('page-portfolio.php') ) {
			wp_enqueue_script('jquery');
			wp_enqueue_script( 'framework', get_bloginfo('template_directory').'/js/framework.js', array( 'jquery' ) );
		}

	}

	if ( !is_admin() && is_home() ) {

		global $post;
		$page_id = get_option('page_for_posts');
		$featcontent = get_post_meta($page_id, 'post_featcontent', true);
//		$featvideo = get_post_meta($page_id, 'post_featvideo', true);
		$featpages = get_post_meta($page_id, 'post_featpages', true);
//		$featgalleries = get_post_meta($post->ID, 'post_featgalleries', true);

		if ( $featcontent != "No" || $featvideo == "Yes" || $featpages == "Yes" || $featgalleries == "Yes" ) {
			wp_enqueue_script('jquery');
			wp_enqueue_script( 'flexslider', get_bloginfo('template_directory').'/js/flexslider.js', array( 'jquery' ) );
		}

	}

	if (!is_admin()) {

		wp_enqueue_script( 'external', get_bloginfo('template_directory').'/js/external.js' );
		wp_enqueue_script( 'suckerfish', get_bloginfo('template_directory').'/js/suckerfish.js' );

//		if ( get_option('solostream_show_catnav') == 'yes' ) {
//			wp_enqueue_script( 'suckerfish-cat', get_bloginfo('template_directory').'/js/suckerfish-cat.js' );
//		}

		if ( get_option('solostream_features_on') != 'No' || get_option('solostream_featpage_on') == 'Yes' || is_active_widget( false, false, 'videoslide-widget' ) ) {
			wp_enqueue_script('jquery');
			wp_enqueue_script( 'flexslider', get_bloginfo('template_directory').'/js/flexslider.js', array( 'jquery' ) );
		}

		if ( is_active_widget( false, false, 'sidetabs-widget' ) || is_pagetemplate_active("page-tabbed-archive.php") || is_pagetemplate_active("page-tabbed-cat.php") ) {
			wp_enqueue_script('jquery');
			wp_enqueue_script('jquery-ui-per', get_bloginfo('template_directory').'/admin/jquery-ui-personalized-1.5.2.packed.js', array('jquery'));
			wp_enqueue_script( 'sprinkle-tabs', get_bloginfo('template_directory').'/admin/sprinkle-tabs.js', array('jquery') );
		}

	}

}

add_action('wp_print_scripts', 'solostream_theme_js');

?>