<?php
add_shortcode('maxbutton', 'mbpro_button_shortcode');
function mbpro_button_shortcode($atts) {
	extract(shortcode_atts(array(
		'id' => '',
		'text' => '',
		'text2' => '',
		'url' => '',
		'window' => ''
	), $atts));
	
	$button_id = "{$id}";
	
	if ($button_id != '') {
		global $wpdb;
		$button = $wpdb->get_row($wpdb->prepare("SELECT * FROM " . mbpro_get_buttons_table_name() . " WHERE id = %d", $button_id));
		
		if (isset($button)) {
			if ($button->gradient_stop != '') {
				$gradient_stop = strlen($button->gradient_stop) == 1 ? '0' . $button->gradient_stop : $button->gradient_stop;
			} else {
				$gradient_stop = '45'; // Default
			}
			
			$show_icon = false;
			if ($button->icon_url != '') {
				$show_icon = true;
			}
			
			// Create the <script> tag to load the web font
			$script = '<script type="text/javascript">';
			$script .= 'mbpro_loadFontFamilyStylesheet("' . $button->text_font_family . '");';
			$script .= 'mbpro_loadFontFamilyStylesheet("' . $button->text2_font_family . '");';
			$script .= '</script>';
			
			// Begin style element
			$style = '<style type="text/css">';
			
			// The container style
			if ($button->container_enabled == 'on') {
				$style .= 'div#maxbutton-' . $button->id . '-container { ';

				if ($button->container_alignment != '') {
					$style .= $button->container_alignment . '; ';
				}
				
				if ($button->container_width != '') {
					$style .= 'width: ' . $button->container_width . '; ';
				}
				
				if ($button->container_margin_top != '') {
					$style .= 'margin-top: ' . $button->container_margin_top . '; ';
				}

				if ($button->container_margin_right != '') {
					$style .= 'margin-right: ' . $button->container_margin_right . '; ';
				}
				
				if ($button->container_margin_bottom != '') {
					$style .= 'margin-bottom: ' . $button->container_margin_bottom . '; ';
				}
				
				if ($button->container_margin_left != '') {
					$style .= 'margin-left: ' . $button->container_margin_left . '; ';
				}
				
				$style .= '} ';
			}
			
			// The button style
			$style .= 'a#maxbutton-' . $button->id . ' { ';
			$style .= 'text-decoration: none; ';
			$style .= 'color: ' . $button->text_color . '; ';
			$style .= '} ';
			$style .= 'a#maxbutton-' . $button->id . ' .maxbutton { ';
			$style .= 'width: ' . $button->width . '; ';
			$style .= 'height: ' . $button->height . '; ';
			$style .= 'background-color: ' . $button->gradient_start_color . '; ';
			$style .= 'background: linear-gradient(' . $button->gradient_start_color . ' ' . $gradient_stop . '%, ' . $button->gradient_end_color . '); ';
			$style .= 'background: -moz-linear-gradient(' . $button->gradient_start_color . ' ' . $gradient_stop . '%, ' . $button->gradient_end_color . '); ';
			$style .= 'background: -o-linear-gradient(' . $button->gradient_start_color . ' ' . $gradient_stop . '%, ' . $button->gradient_end_color . '); ';
			$style .= 'background: -webkit-gradient(linear, left top, left bottom, color-stop(.' . $gradient_stop . ', ' . $button->gradient_start_color . '), color-stop(1, ' . $button->gradient_end_color . ')); ';
			//$style .= 'filter: progid:DXImageTransform.Microsoft.gradient(startColorStr="' . $button->gradient_start_color . '", endColorStr="' . $button->gradient_end_color . '"); ';
			//$style .= '-ms-filter: progid:DXImageTransform.Microsoft.gradient(startColorStr="' . $button->gradient_start_color . '", endColorStr="' . $button->gradient_end_color . '"); ';
			$style .= 'border-style: ' . $button->border_style . '; ';
			$style .= 'border-width: ' . $button->border_width . '; ';
			$style .= 'border-color: ' . $button->border_color . '; ';
			$style .= 'border-top-left-radius: ' . $button->border_radius_top_left . '; ';
			$style .= 'border-top-right-radius: ' . $button->border_radius_top_right . '; ';
			$style .= 'border-bottom-left-radius: ' . $button->border_radius_bottom_left . '; ';
			$style .= 'border-bottom-right-radius: ' . $button->border_radius_bottom_right . '; ';
			$style .= '-moz-border-radius-topleft: ' . $button->border_radius_top_left . '; ';
			$style .= '-moz-border-radius-topright: ' . $button->border_radius_top_right . '; ';
			$style .= '-moz-border-radius-bottomleft: ' . $button->border_radius_bottom_left . '; ';
			$style .= '-moz-border-radius-bottomright: ' . $button->border_radius_bottom_right . '; ';
			$style .= '-webkit-border-top-left-radius: ' . $button->border_radius_top_left . '; ';
			$style .= '-webkit-border-top-right-radius: ' . $button->border_radius_top_right . '; ';
			$style .= '-webkit-border-bottom-left-radius: ' . $button->border_radius_bottom_left . '; ';
			$style .= '-webkit-border-bottom-right-radius: ' . $button->border_radius_bottom_right . '; ';
			$style .= 'text-shadow: ' . $button->text_shadow_offset_left . ' ' . $button->text_shadow_offset_top . ' ' . $button->text_shadow_width . ' ' . $button->text_shadow_color . '; ';
			$style .= 'box-shadow: ' . $button->box_shadow_offset_left . ' ' . $button->box_shadow_offset_top . ' ' . $button->box_shadow_width . ' ' . $button->box_shadow_color . '; ';
			$style .= '} ';			
			$style .= 'a#maxbutton-' . $button->id . ' .maxbutton .text { ';
			$style .= 'color: ' . $button->text_color . '; ';
			$style .= 'font-family: ' . $button->text_font_family . '; ';
			$style .= 'font-size: ' . $button->text_font_size . '; ';
			$style .= 'font-style: ' . $button->text_font_style . '; ';
			$style .= 'font-weight: ' . $button->text_font_weight . '; ';
			$style .= 'text-align: ' . $button->text_align . '; ';
			$style .= 'padding-top: ' . $button->text_padding_top . '; ';
			$style .= 'padding-right: ' . $button->text_padding_right . '; ';
			$style .= 'padding-bottom: ' . $button->text_padding_bottom . '; ';
			$style .= 'padding-left: ' . $button->text_padding_left . '; ';
			$style .= 'line-height: 1.0em; ';
			$style .= '} ';
			$style .= 'a#maxbutton-' . $button->id . ' .maxbutton .text2 { ';
			$style .= 'color: ' . $button->text_color . '; ';
			$style .= 'font-family: ' . $button->text2_font_family . '; ';
			$style .= 'font-size: ' . $button->text2_font_size . '; ';
			$style .= 'font-style: ' . $button->text2_font_style . '; ';
			$style .= 'font-weight: ' . $button->text2_font_weight . '; ';
			$style .= 'text-align: ' . $button->text2_align . '; ';
			$style .= 'padding-top: ' . $button->text2_padding_top . '; ';
			$style .= 'padding-right: ' . $button->text2_padding_right . '; ';
			$style .= 'padding-bottom: ' . $button->text2_padding_bottom . '; ';
			$style .= 'padding-left: ' . $button->text2_padding_left . '; ';
			$style .= 'line-height: 1.0em; ';
			$style .= '} ';
			
			if ($show_icon) {
				$style .= 'a#maxbutton-' . $button->id . ' .maxbutton .icon { ';
				$style .= 'padding-top: ' . $button->icon_padding_top . '; ';
				$style .= 'padding-right: ' . $button->icon_padding_right . '; ';
				$style .= 'padding-bottom: ' . $button->icon_padding_bottom . '; ';
				$style .= 'padding-left: ' . $button->icon_padding_left . '; ';
				$style .= '} ';

				// These help avoid theme image styles from creeping into the button
				$style .= 'a#maxbutton-' . $button->id . ' .maxbutton .icon img { ';
				$style .= 'background: none; ';
				$style .= 'border: none; ';
				$style .= 'padding: 0px; ';
				$style .= 'margin: 0px; ';
				$style .= '} ';
				
				if ($button->icon_position == 'left') {
					$style .= 'a#maxbutton-' . $button->id . ' .maxbutton .icon.left { ';
					$style .= 'float: left; ';
					$style .= '} ';
				}
				
				if ($button->icon_position == 'right') {
					$style .= 'a#maxbutton-' . $button->id . ' .maxbutton .icon.right { ';
					$style .= 'float: right; ';
					$style .= '} ';
				}
				
				if ($button->icon_position == 'top') {
					$style .= 'a#maxbutton-' . $button->id . ' .maxbutton .icon.top { ';
					$style .= 'text-align: center; ';
					$style .= '} ';
				}
				
				if ($button->icon_position == 'bottom') {
					$style .= 'a#maxbutton-' . $button->id . ' .maxbutton .icon.bottom { ';
					$style .= 'text-align: center; ';
					$style .= '} ';
				}
			}
			
			// The button style - visited
			$style .= 'a#maxbutton-' . $button->id . ':visited { ';
			$style .= 'text-decoration: none; ';
			$style .= 'color: ' . $button->text_color . '; ';
			$style .= '} ';
			
			// The button style - hover
			$style .= 'a#maxbutton-' . $button->id . ':hover { ';
			$style .= 'text-decoration: none; ';
			$style .= 'color: ' . $button->text_color_hover . '; ';
			$style .= '} ';
			$style .= 'a#maxbutton-' . $button->id . ':hover .maxbutton { ';
			$style .= 'background-color: ' . $button->gradient_start_color_hover . '; ';
			$style .= 'background: linear-gradient(' . $button->gradient_start_color_hover . ' ' . $gradient_stop . '%, ' . $button->gradient_end_color_hover . '); ';
			$style .= 'background: -moz-linear-gradient(' . $button->gradient_start_color_hover . ' ' . $gradient_stop . '%, ' . $button->gradient_end_color_hover . '); ';
			$style .= 'background: -o-linear-gradient(' . $button->gradient_start_color_hover . ' ' . $gradient_stop . '%, ' . $button->gradient_end_color_hover . '); ';
			$style .= 'background: -webkit-gradient(linear, left top, left bottom, color-stop(.' . $gradient_stop . ', ' . $button->gradient_start_color_hover . '), color-stop(1, ' . $button->gradient_end_color_hover . ')); ';
			//$style .= 'filter: progid:DXImageTransform.Microsoft.gradient(startColorStr="' . $button->gradient_start_color_hover . '", endColorStr="' . $button->gradient_end_color_hover . '"); ';
			//$style .= '-ms-filter: progid:DXImageTransform.Microsoft.gradient(startColorStr="' . $button->gradient_start_color_hover . '", endColorStr="' . $button->gradient_end_color_hover . '"); ';
			$style .= 'border-color: ' . $button->border_color_hover . '; ';
			$style .= 'text-shadow: ' . $button->text_shadow_offset_left . ' ' . $button->text_shadow_offset_top . ' ' . $button->text_shadow_width . ' ' . $button->text_shadow_color_hover . '; ';
			$style .= 'box-shadow: ' . $button->box_shadow_offset_left . ' ' . $button->box_shadow_offset_top . ' ' . $button->box_shadow_width . ' ' . $button->box_shadow_color_hover . '; ';
			$style .= '} ';
			$style .= 'a#maxbutton-' . $button->id . ':hover .maxbutton .text { ';
			$style .= 'color: ' . $button->text_color_hover . '; ';
			$style .= '} ';
			$style .= 'a#maxbutton-' . $button->id . ':hover .maxbutton .text2 { ';
			$style .= 'color: ' . $button->text_color_hover . '; ';
			$style .= '} ';
			
			// End the style element
			$style .= '</style>';
			
			// Get the vars
			$button_text = "{$text}" != '' ? "{$text}" : $button->text;
			$button_text2 = "{$text2}" != '' ? "{$text2}" : $button->text2;
			$button_url = "{$url}" != '' ? "{$url}" : $button->url;
			$button_window = '';
			
			// Check to open the link in a new window
			if ("{$window}" != '') {
				if ("{$window}" == 'new') {
					$button_window = 'target="_blank"';
				}
			} else {
				if ($button->new_window == 'on') {
					$button_window = 'target="_blank"';
				}
			}
			
			// Start building the output
			$output = $script;
			$output .= $style;
			
			// Check to add the container
			if ($button->container_enabled == 'on') {				
				$output .= '<div id="maxbutton-' . $button->id . '-container">';
			}
			
			$output .= '<a id="maxbutton-' . $button->id . '" href="' . $button_url . '" ' . $button_window . '>';
			$output .= '<div class="maxbutton">';
			
			if ($show_icon && $button->icon_position == 'left') {
				$output .= '<div class="icon left"><img src="' . $button->icon_url . '" alt="' . $button->icon_alt . '" border="0" /></div>';
			}

			if ($show_icon && $button->icon_position == 'right') {
				$output .= '<div class="icon right"><img src="' . $button->icon_url . '" alt="' . $button->icon_alt . '" border="0" /></div>';
			}
			
			if ($show_icon && $button->icon_position == 'top') {
				$output .= '<div class="icon top"><img src="' . $button->icon_url . '" alt="' . $button->icon_alt . '" border="0" /></div>';
			}
			
			if ($button_text != '') {
				$output .= '<div class="text">' . $button_text . '</div>';
			}
			
			if ($button_text2 != '') {
				$output .= '<div class="text2">' . $button_text2 . '</div>';
			}
			
			if ($show_icon && $button->icon_position == 'bottom') {
				$output .= '<div class="icon bottom"><img src="' . $button->icon_url . '" alt="' . $button->icon_alt . '" border="0" /></div>';
			}
			
			if ($show_icon) {
				// This clear div is only needed if an icon is present
				$output .= '<div style="clear: both;"></div>';			
			}
			
			$output .= '</div>';
			$output .= '</a>';
			
			// Check to close the container
			if ($button->container_enabled == 'on') {
				$output .= '</div>';
				
				// Might need to clear the float
				if ($button->container_alignment == 'float: right' || $button->container_alignment == 'float: left') {
					$output .= '<div style="clear: both;"></div>';
				}
			}
			
			return $output;
		}
	}
}
?>