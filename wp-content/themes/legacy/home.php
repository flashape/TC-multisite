<?php

add_action( 'genesis_meta', 'legacy_home_genesis_meta' );
/**
 * Add widget support for homepage. If no widgets active, display the default loop.
 *
 */
function legacy_home_genesis_meta() {

	if ( is_active_sidebar( 'slider' ) || is_active_sidebar( 'welcome' ) || is_active_sidebar( 'home-bottom-1' ) || is_active_sidebar( 'home-bottom-2' ) || is_active_sidebar( 'home-bottom-3' ) ) {

		remove_action( 'genesis_loop', 'genesis_do_loop' );
		add_action( 'genesis_after_header', 'legacy_home_loop_helper_top' );
		add_action( 'genesis_loop', 'legacy_home_loop_helper' );
		add_action( 'genesis_after_loop', 'legacy_home_loop_helper_bottom' );
		add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

	}
}

/**
 * Display widget content for "slider" and "welcome" sections.
 *
 */
function legacy_home_loop_helper_top() {
			
		if ( is_active_sidebar( 'slider' ) ) {
			echo '<div class="slider-wrap"><div class="slider-inner">';
			dynamic_sidebar( 'slider' );
			echo '</div><!-- end .slider-wrap --></div><!-- end .slider-inner -->';
		}
		
		// if ( is_active_sidebar( 'welcome' ) ) {
		// 	echo '<div class="welcome-wrap"><div class="welcome-inner">';
		// 	dynamic_sidebar( 'welcome' );
		// 	echo '</div><!-- end .welcome-wrap --></div><!-- end .welcome-inner -->';
		// }
		
}
/**
 * Display widget content for "slider" and "welcome" sections.
 *
 */
function legacy_home_loop_helper_bottom() {
			
		// if ( is_active_sidebar( 'slider' ) ) {
		// 	echo '<div class="slider-wrap"><div class="slider-inner">';
		// 	dynamic_sidebar( 'slider' );
		// 	echo '</div><!-- end .slider-wrap --></div><!-- end .slider-inner -->';
		// }
		
		if ( is_active_sidebar( 'welcome' ) ) {
			echo '<div class="welcome-wrap"><div class="welcome-inner">';
			dynamic_sidebar( 'welcome' );
			echo '</div><!-- end .welcome-wrap --></div><!-- end .welcome-inner -->';
		}
		
}

/**
 * Display widget content for "home bottom #1", "home bottom #2"  and "home bottom #3" sections.
 *
 */
function legacy_home_loop_helper() {

		echo '<div id="home-bottom-bg"><div id="home-bottom">';

		if ( is_active_sidebar( 'home-bottom-1' ) ) {
			echo '<div class="home-bottom-1">';
			dynamic_sidebar( 'home-bottom-1' );
			echo '</div><!-- end .home-bottom-1 -->';
		}
		
		if ( is_active_sidebar( 'home-bottom-2' ) ) {
			echo '<div class="home-bottom-2">';
			dynamic_sidebar( 'home-bottom-2' );
			echo '</div><!-- end .home-bottom-2 -->';
		}
				
		if ( is_active_sidebar( 'home-bottom-3' ) ) {
			echo '<div class="home-bottom-3">';
			dynamic_sidebar( 'home-bottom-3' );
			echo '</div><!-- end .home-bottom-3 -->';
		}
		
		echo '</div><!-- end #home-bottom-bg --></div><!-- end #home-bottom -->';
		
}

genesis();