<?php
add_action( 'genesis_settings_sanitizer_init', 'legacy_sanitization' ); 
/** 
* Add style switcher setting to Genesis sanitization 
* 
*/ 
function legacy_sanitization( $pagehook ) { 
	genesis_add_option_filter( 'no_html', GENESIS_SETTINGS_FIELD, 'style_selection' ); 
} 

add_action( 'genesis_theme_settings_metaboxes', 'legacy_settings_metaboxes' );
/**
 * Add metaboxes to the Genesis settings page
 *
 */
function legacy_settings_metaboxes( $pagehook ) {
	add_meta_box( 'genesis-theme-settings-style', __( 'Legacy Color Scheme', 'legacy' ), 'legacy_theme_settings_style_box', $pagehook, 'main', 'high' );
}

/**
 * Outputs the HTML necessary to display the extra form elements on Theme Settings
 *
 */
function legacy_theme_settings_style_box() {

	$color_schemes = apply_filters( 'legacy_colors', array(
		// 'legacy-blue'		=> __( 'Legacy Blue', 'legacy' ),
		// 'legacy-green'	=> __( 'Legacy Green', 'legacy' ),
		// 'legacy-orange'		=> __( 'Legacy Orange', 'legacy' ),
		// 'legacy-purple'		=> __( 'Legacy Purple', 'legacy' ),
		// 'legacy-red'	=> __( 'Legacy Red', 'legacy' ),
		// 'legacy-silver'		=> __( 'Legacy Silver', 'legacy' ),
		'legacy-pink'		=> __( 'Legacy Pink', 'legacy' ),
	) );
	
?>

	<p><label><?php _e( 'Color Scheme', 'legacy' ); ?>:
		<select name="<?php echo GENESIS_SETTINGS_FIELD; ?>[style_selection]">
			<option value=""><?php _e( 'Legacy Black', 'legacy' ); ?></option>
			<?php foreach ( $color_schemes as $id => $label ) {
				printf( '<option value="%s" %s>%s</option>', $id, selected( $id, genesis_get_option( 'style_selection' ), 0 ), $label );
			} ?>
		</select>
	</label></p>
	<p><span class="description"><?php _e( 'Please select the Legacy color scheme from the drop down list and save your settings.', 'legacy' ); ?></span></p>
	
	<p><span class="description"><?php printf( __( 'You can also choose an appropriate header, or upload your own, using the <a href="%s">custom header</a> tool', 'legacy' ), admin_url( 'themes.php?page=custom-header' ) ); ?></span></p>

<?php
}

add_filter( 'body_class', 'legacy_style_body_class' );
/**
 * Filters the body classes to add the proper style-specific class.
 *
 */
function legacy_style_body_class( $classes ) {

	if ( $style = genesis_get_option( 'style_selection' ) ) {
		$classes[] = esc_attr( sanitize_html_class( $style ) );
	}

	return $classes;

}