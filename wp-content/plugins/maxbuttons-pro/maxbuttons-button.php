<?php
include_once 'maxbuttons-arrays.php';
include_once 'maxbuttons-constants.php';

global $wpdb;

if ($_GET['id'] != '') {
	$button = $wpdb->get_row($wpdb->prepare("SELECT * FROM " . mbpro_get_buttons_table_name() . " WHERE id = %d", $_GET['id']));
}

$maxbutton_name_value = isset($button) ? $button->name : '';
$maxbutton_description_value = isset($button) ? $button->description : '';
$maxbutton_url_value = isset($button) ? $button->url : '';
$maxbutton_new_window_value = isset($button) ? $button->new_window : '';
$maxbutton_width_value = isset($button) ? $button->width : '';
$maxbutton_height_value = isset($button) ? $button->height : '';
$maxbutton_icon_url_value = isset($button) ? $button->icon_url : '';
$maxbutton_icon_position_value = isset($button) ? $button->icon_position : '';
$maxbutton_icon_position_display = ($maxbutton_icon_position_value != '') ? $maxbutton_icon_position_value : $maxbutton_icon_position_default;
$maxbutton_icon_padding_top_value = isset($button) ? $button->icon_padding_top : '';
$maxbutton_icon_padding_top_display = ($maxbutton_icon_padding_top_value != '') ? $maxbutton_icon_padding_top_value : $maxbutton_icon_padding_top_default;
$maxbutton_icon_padding_bottom_value = isset($button) ? $button->icon_padding_bottom : '';
$maxbutton_icon_padding_bottom_display = ($maxbutton_icon_padding_bottom_value != '') ? $maxbutton_icon_padding_bottom_value : $maxbutton_icon_padding_bottom_default;
$maxbutton_icon_padding_left_value = isset($button) ? $button->icon_padding_left : '';
$maxbutton_icon_padding_left_display = ($maxbutton_icon_padding_left_value != '') ? $maxbutton_icon_padding_left_value : $maxbutton_icon_padding_left_default;
$maxbutton_icon_padding_right_value = isset($button) ? $button->icon_padding_right : '';
$maxbutton_icon_padding_right_display = ($maxbutton_icon_padding_right_value != '') ? $maxbutton_icon_padding_right_value : $maxbutton_icon_padding_right_default;
$maxbutton_icon_alt_value = isset($button) ? $button->icon_alt : '';
$maxbutton_text_value = isset($button) ? $button->text : '';
$maxbutton_text_font_family_value = isset($button) ? $button->text_font_family : '';
$maxbutton_text_font_family_display = ($maxbutton_text_font_family_value != '') ? $maxbutton_text_font_family_value : $maxbutton_text_font_family_default;
$maxbutton_text_font_size_value = isset($button) ? $button->text_font_size : '';
$maxbutton_text_font_size_display = ($maxbutton_text_font_size_value != '') ? $maxbutton_text_font_size_value : $maxbutton_text_font_size_default;
$maxbutton_text_font_style_value = isset($button) ? $button->text_font_style : '';
$maxbutton_text_font_style_display = ($maxbutton_text_font_style_value != '') ? $maxbutton_text_font_style_value : $maxbutton_text_font_style_default;
$maxbutton_text_font_weight_value = isset($button) ? $button->text_font_weight : '';
$maxbutton_text_font_weight_display = ($maxbutton_text_font_weight_value != '') ? $maxbutton_text_font_weight_value : $maxbutton_text_font_weight_default;
$maxbutton_text_align_value = isset($button) ? $button->text_align : '';
$maxbutton_text_align_display = ($maxbutton_text_align_value != '') ? $maxbutton_text_align_value : $maxbutton_text_align_default;
$maxbutton_text2_value = isset($button) ? $button->text2 : '';
$maxbutton_text2_font_family_value = isset($button) ? $button->text2_font_family : '';
$maxbutton_text2_font_family_display = ($maxbutton_text2_font_family_value != '') ? $maxbutton_text2_font_family_value : $maxbutton_text2_font_family_default;
$maxbutton_text2_font_size_value = isset($button) ? $button->text2_font_size : '';
$maxbutton_text2_font_size_display = ($maxbutton_text2_font_size_value != '') ? $maxbutton_text2_font_size_value : $maxbutton_text2_font_size_default;
$maxbutton_text2_font_style_value = isset($button) ? $button->text2_font_style : '';
$maxbutton_text2_font_style_display = ($maxbutton_text2_font_style_value != '') ? $maxbutton_text2_font_style_value : $maxbutton_text2_font_style_default;
$maxbutton_text2_font_weight_value = isset($button) ? $button->text2_font_weight : '';
$maxbutton_text2_font_weight_display = ($maxbutton_text2_font_weight_value != '') ? $maxbutton_text2_font_weight_value : $maxbutton_text2_font_weight_default;
$maxbutton_text2_align_value = isset($button) ? $button->text2_align : '';
$maxbutton_text2_align_display = ($maxbutton_text2_align_value != '') ? $maxbutton_text2_align_value : $maxbutton_text2_align_default;
$maxbutton_text_color_value = isset($button) ? $button->text_color : '';
$maxbutton_text_color_display = ($maxbutton_text_color_value != '') ? $maxbutton_text_color_value : $maxbutton_text_color_default;
$maxbutton_text_color_hover_value = isset($button) ? $button->text_color_hover : '';
$maxbutton_text_color_hover_display = ($maxbutton_text_color_hover_value != '') ? $maxbutton_text_color_hover_value : $maxbutton_text_color_hover_default;
$maxbutton_text_shadow_color_value = isset($button) ? $button->text_shadow_color : '';
$maxbutton_text_shadow_color_display = ($maxbutton_text_shadow_color_value != '') ? $maxbutton_text_shadow_color_value : $maxbutton_text_shadow_color_default;
$maxbutton_text_shadow_color_hover_value = isset($button) ? $button->text_shadow_color_hover : '';
$maxbutton_text_shadow_color_hover_display = ($maxbutton_text_shadow_color_hover_value != '') ? $maxbutton_text_shadow_color_hover_value : $maxbutton_text_shadow_color_hover_default;
$maxbutton_text_shadow_offset_left_value = isset($button) ? $button->text_shadow_offset_left : '';
$maxbutton_text_shadow_offset_left_display = ($maxbutton_text_shadow_offset_left_value != '') ? $maxbutton_text_shadow_offset_left_value : $maxbutton_text_shadow_offset_left_default;
$maxbutton_text_shadow_offset_top_value = isset($button) ? $button->text_shadow_offset_top : '';
$maxbutton_text_shadow_offset_top_display = ($maxbutton_text_shadow_offset_top_value != '') ? $maxbutton_text_shadow_offset_top_value : $maxbutton_text_shadow_offset_top_default;
$maxbutton_text_shadow_width_value = isset($button) ? $button->text_shadow_width : '';
$maxbutton_text_shadow_width_display = ($maxbutton_text_shadow_width_value != '') ? $maxbutton_text_shadow_width_value : $maxbutton_text_shadow_width_default;
$maxbutton_text_padding_top_value = isset($button) ? $button->text_padding_top : '';
$maxbutton_text_padding_top_display = ($maxbutton_text_padding_top_value != '') ? $maxbutton_text_padding_top_value : $maxbutton_text_padding_top_default;
$maxbutton_text_padding_bottom_value = isset($button) ? $button->text_padding_bottom : '';
$maxbutton_text_padding_bottom_display = ($maxbutton_text_padding_bottom_value != '') ? $maxbutton_text_padding_bottom_value : $maxbutton_text_padding_bottom_default;
$maxbutton_text_padding_left_value = isset($button) ? $button->text_padding_left : '';
$maxbutton_text_padding_left_display = ($maxbutton_text_padding_left_value != '') ? $maxbutton_text_padding_left_value : $maxbutton_text_padding_left_default;
$maxbutton_text_padding_right_value = isset($button) ? $button->text_padding_right : '';
$maxbutton_text_padding_right_display = ($maxbutton_text_padding_right_value != '') ? $maxbutton_text_padding_right_value : $maxbutton_text_padding_right_default;
$maxbutton_text2_padding_top_value = isset($button) ? $button->text2_padding_top : '';
$maxbutton_text2_padding_top_display = ($maxbutton_text2_padding_top_value != '') ? $maxbutton_text2_padding_top_value : $maxbutton_text2_padding_top_default;
$maxbutton_text2_padding_bottom_value = isset($button) ? $button->text2_padding_bottom : '';
$maxbutton_text2_padding_bottom_display = ($maxbutton_text2_padding_bottom_value != '') ? $maxbutton_text2_padding_bottom_value : $maxbutton_text2_padding_bottom_default;
$maxbutton_text2_padding_left_value = isset($button) ? $button->text2_padding_left : '';
$maxbutton_text2_padding_left_display = ($maxbutton_text2_padding_left_value != '') ? $maxbutton_text2_padding_left_value : $maxbutton_text2_padding_left_default;
$maxbutton_text2_padding_right_value = isset($button) ? $button->text2_padding_right : '';
$maxbutton_text2_padding_right_display = ($maxbutton_text2_padding_right_value != '') ? $maxbutton_text2_padding_right_value : $maxbutton_text2_padding_right_default;
$maxbutton_border_radius_top_left_value = isset($button) ? $button->border_radius_top_left : '';
$maxbutton_border_radius_top_left_display = ($maxbutton_border_radius_top_left_value != '') ? $maxbutton_border_radius_top_left_value : $maxbutton_border_radius_top_left_default;
$maxbutton_border_radius_top_right_value = isset($button) ? $button->border_radius_top_right : '';
$maxbutton_border_radius_top_right_display = ($maxbutton_border_radius_top_right_value != '') ? $maxbutton_border_radius_top_right_value : $maxbutton_border_radius_top_right_default;
$maxbutton_border_radius_bottom_left_value = isset($button) ? $button->border_radius_bottom_left : '';
$maxbutton_border_radius_bottom_left_display = ($maxbutton_border_radius_bottom_left_value != '') ? $maxbutton_border_radius_bottom_left_value : $maxbutton_border_radius_bottom_left_default;
$maxbutton_border_radius_bottom_right_value = isset($button) ? $button->border_radius_bottom_right : '';
$maxbutton_border_radius_bottom_right_display = ($maxbutton_border_radius_bottom_right_value != '') ? $maxbutton_border_radius_bottom_right_value : $maxbutton_border_radius_bottom_right_default;
$maxbutton_border_style_value = isset($button) ? $button->border_style : '';
$maxbutton_border_style_display = ($maxbutton_border_style_value != '') ? $maxbutton_border_style_value : $maxbutton_border_style_default;
$maxbutton_border_width_value = isset($button) ? $button->border_width : '';
$maxbutton_border_width_display = ($maxbutton_border_width_value != '') ? $maxbutton_border_width_value : $maxbutton_border_width_default;
$maxbutton_gradient_start_color_value = isset($button) ? $button->gradient_start_color : '';
$maxbutton_gradient_start_color_display = ($maxbutton_gradient_start_color_value != '') ? $maxbutton_gradient_start_color_value : $maxbutton_gradient_start_color_default;
$maxbutton_gradient_start_color_hover_value = isset($button) ? $button->gradient_start_color_hover : '';
$maxbutton_gradient_start_color_hover_display = ($maxbutton_gradient_start_color_hover_value != '') ? $maxbutton_gradient_start_color_hover_value : $maxbutton_gradient_start_color_hover_default;
$maxbutton_gradient_end_color_value = isset($button) ? $button->gradient_end_color : '';
$maxbutton_gradient_end_color_display = ($maxbutton_gradient_end_color_value != '') ? $maxbutton_gradient_end_color_value : $maxbutton_gradient_end_color_default;
$maxbutton_gradient_end_color_hover_value = isset($button) ? $button->gradient_end_color_hover : '';
$maxbutton_gradient_end_color_hover_display = ($maxbutton_gradient_end_color_hover_value != '') ? $maxbutton_gradient_end_color_hover_value : $maxbutton_gradient_end_color_hover_default;
$maxbutton_border_color_value = isset($button) ? $button->border_color : '';
$maxbutton_border_color_display = ($maxbutton_border_color_value != '') ? $maxbutton_border_color_value : $maxbutton_border_color_default;
$maxbutton_border_color_hover_value = isset($button) ? $button->border_color_hover : '';
$maxbutton_border_color_hover_display = ($maxbutton_border_color_hover_value != '') ? $maxbutton_border_color_hover_value : $maxbutton_border_color_hover_default;
$maxbutton_box_shadow_color_value = isset($button) ? $button->box_shadow_color : '';
$maxbutton_box_shadow_color_display = ($maxbutton_box_shadow_color_value != '') ? $maxbutton_box_shadow_color_value : $maxbutton_box_shadow_color_default;
$maxbutton_box_shadow_color_hover_value = isset($button) ? $button->box_shadow_color_hover : '';
$maxbutton_box_shadow_color_hover_display = ($maxbutton_box_shadow_color_hover_value != '') ? $maxbutton_box_shadow_color_hover_value : $maxbutton_box_shadow_color_hover_default;
$maxbutton_box_shadow_offset_left_value = isset($button) ? $button->box_shadow_offset_left : '';
$maxbutton_box_shadow_offset_left_display = ($maxbutton_box_shadow_offset_left_value != '') ? $maxbutton_box_shadow_offset_left_value : $maxbutton_box_shadow_offset_left_default;
$maxbutton_box_shadow_offset_top_value = isset($button) ? $button->box_shadow_offset_top : '';
$maxbutton_box_shadow_offset_top_display = ($maxbutton_box_shadow_offset_top_value != '') ? $maxbutton_box_shadow_offset_top_value : $maxbutton_box_shadow_offset_top_default;
$maxbutton_box_shadow_width_value = isset($button) ? $button->box_shadow_width : '';
$maxbutton_box_shadow_width_display = ($maxbutton_box_shadow_width_value != '') ? $maxbutton_box_shadow_width_value : $maxbutton_box_shadow_width_default;
$maxbutton_gradient_stop_value = isset($button) ? $button->gradient_stop : '';
$maxbutton_gradient_stop_display = ($maxbutton_gradient_stop_value != '') ? $maxbutton_gradient_stop_value : $maxbutton_gradient_stop_default;
$maxbutton_gradient_stop_display = strlen($maxbutton_gradient_stop_display) == 1 ? '0' . $maxbutton_gradient_stop_display : $maxbutton_gradient_stop_display;
$maxbutton_container_enabled_value = isset($button) ? $button->container_enabled : 'on';
$maxbutton_container_width_value = isset($button) ? $button->container_width : '';
$maxbutton_container_margin_top_value = isset($button) ? $button->container_margin_top : '';
$maxbutton_container_margin_right_value = isset($button) ? $button->container_margin_right : '';
$maxbutton_container_margin_bottom_value = isset($button) ? $button->container_margin_bottom : '';
$maxbutton_container_margin_left_value = isset($button) ? $button->container_margin_left : '';
$maxbutton_container_alignment_value = isset($button) ? $button->container_alignment : '';

$redirect = false;
$button_id = 0;

if ($_POST) {
	$data = array(
		'name' => $_POST[$maxbutton_name_key] != '' ? stripslashes($_POST[$maxbutton_name_key]) : 'Unnamed Button',
		'description' => stripslashes($_POST[$maxbutton_description_key]),
		'url' => stripslashes($_POST[$maxbutton_url_key]),
		'new_window' => $wpdb->escape($_POST[$maxbutton_new_window_key]),
		'width' => $_POST[$maxbutton_width_key] != '' ? $wpdb->escape($_POST[$maxbutton_width_key]) . 'px' : $maxbutton_width_default,
		'height' => $_POST[$maxbutton_height_key] != '' ? $wpdb->escape($_POST[$maxbutton_height_key]) . 'px' : $maxbutton_height_default,
		'icon_url' => stripslashes($_POST[$maxbutton_icon_url_key]),
		'icon_position' => $_POST[$maxbutton_icon_position_key] != '' ? $wpdb->escape($_POST[$maxbutton_icon_position_key]) : $maxbutton_icon_position_default,
		'icon_padding_top' => $_POST[$maxbutton_icon_padding_top_key] != '' ? $wpdb->escape($_POST[$maxbutton_icon_padding_top_key]) . 'px' : $maxbutton_icon_padding_top_default,
		'icon_padding_bottom' => $_POST[$maxbutton_icon_padding_bottom_key] != '' ? $wpdb->escape($_POST[$maxbutton_icon_padding_bottom_key]) . 'px' : $maxbutton_icon_padding_bottom_default,
		'icon_padding_left' => $_POST[$maxbutton_icon_padding_left_key] != '' ? $wpdb->escape($_POST[$maxbutton_icon_padding_left_key]) . 'px' : $maxbutton_icon_padding_left_default,
		'icon_padding_right' => $_POST[$maxbutton_icon_padding_right_key] != '' ? $wpdb->escape($_POST[$maxbutton_icon_padding_right_key]) . 'px' : $maxbutton_icon_padding_right_default,
		'icon_alt' => stripslashes($_POST[$maxbutton_icon_alt_key]),
		'text' => stripslashes($_POST[$maxbutton_text_key]),
		'text_font_family' => $_POST[$maxbutton_text_font_family_key] != '' ? $wpdb->escape($_POST[$maxbutton_text_font_family_key]) : $maxbutton_text_font_family_default,
		'text_font_size' => $_POST[$maxbutton_text_font_size_key] != '' ? $wpdb->escape($_POST[$maxbutton_text_font_size_key]) : $maxbutton_text_font_size_default,
		'text_font_style' => $_POST[$maxbutton_text_font_style_key] != '' ? $wpdb->escape($_POST[$maxbutton_text_font_style_key]) : $maxbutton_text_font_style_default,
		'text_font_weight' => $_POST[$maxbutton_text_font_weight_key] != '' ? $wpdb->escape($_POST[$maxbutton_text_font_weight_key]) : $maxbutton_text_font_weight_default,
		'text_align' => $_POST[$maxbutton_text_align_key] != '' ? $wpdb->escape($_POST[$maxbutton_text_align_key]) : $maxbutton_text_align_default,
		'text_padding_top' => $_POST[$maxbutton_text_padding_top_key] != '' ? $wpdb->escape($_POST[$maxbutton_text_padding_top_key]) . 'px' : $maxbutton_text_padding_top_default,
		'text_padding_bottom' => $_POST[$maxbutton_text_padding_bottom_key] != '' ? $wpdb->escape($_POST[$maxbutton_text_padding_bottom_key]) . 'px' : $maxbutton_text_padding_bottom_default,
		'text_padding_left' => $_POST[$maxbutton_text_padding_left_key] != '' ? $wpdb->escape($_POST[$maxbutton_text_padding_left_key]) . 'px' : $maxbutton_text_padding_left_default,
		'text_padding_right' => $_POST[$maxbutton_text_padding_right_key] != '' ? $wpdb->escape($_POST[$maxbutton_text_padding_right_key]) . 'px' : $maxbutton_text_padding_right_default,
		'text2' => stripslashes($_POST[$maxbutton_text2_key]),
		'text2_font_family' => $_POST[$maxbutton_text2_font_family_key] != '' ? $wpdb->escape($_POST[$maxbutton_text2_font_family_key]) : $maxbutton_text2_font_family_default,
		'text2_font_size' => $_POST[$maxbutton_text2_font_size_key] != '' ? $wpdb->escape($_POST[$maxbutton_text2_font_size_key]) : $maxbutton_text2_font_size_default,
		'text2_font_style' => $_POST[$maxbutton_text2_font_style_key] != '' ? $wpdb->escape($_POST[$maxbutton_text2_font_style_key]) : $maxbutton_text2_font_style_default,
		'text2_font_weight' => $_POST[$maxbutton_text2_font_weight_key] != '' ? $wpdb->escape($_POST[$maxbutton_text2_font_weight_key]) : $maxbutton_text2_font_weight_default,
		'text2_align' => $_POST[$maxbutton_text2_align_key] != '' ? $wpdb->escape($_POST[$maxbutton_text2_align_key]) : $maxbutton_text2_align_default,
		'text2_padding_top' => $_POST[$maxbutton_text2_padding_top_key] != '' ? $wpdb->escape($_POST[$maxbutton_text2_padding_top_key]) . 'px' : $maxbutton_text2_padding_top_default,
		'text2_padding_bottom' => $_POST[$maxbutton_text2_padding_bottom_key] != '' ? $wpdb->escape($_POST[$maxbutton_text2_padding_bottom_key]) . 'px' : $maxbutton_text2_padding_bottom_default,
		'text2_padding_left' => $_POST[$maxbutton_text2_padding_left_key] != '' ? $wpdb->escape($_POST[$maxbutton_text2_padding_left_key]) . 'px' : $maxbutton_text2_padding_left_default,
		'text2_padding_right' => $_POST[$maxbutton_text2_padding_right_key] != '' ? $wpdb->escape($_POST[$maxbutton_text2_padding_right_key]) . 'px' : $maxbutton_text2_padding_right_default,
		'text_color' => $_POST[$maxbutton_text_color_key] != '' ? $wpdb->escape($_POST[$maxbutton_text_color_key]) : $maxbutton_text_color_default,
		'text_color_hover' => $_POST[$maxbutton_text_color_hover_key] != '' ? $wpdb->escape($_POST[$maxbutton_text_color_hover_key]) : $maxbutton_text_color_hover_default,
		'text_shadow_offset_left' => $_POST[$maxbutton_text_shadow_offset_left_key] != '' ? $wpdb->escape($_POST[$maxbutton_text_shadow_offset_left_key]) .'px' : $maxbutton_text_shadow_offset_left_default,
		'text_shadow_offset_top' => $_POST[$maxbutton_text_shadow_offset_top_key] != '' ? $wpdb->escape($_POST[$maxbutton_text_shadow_offset_top_key]) .'px' : $maxbutton_text_shadow_offset_top_default,
		'text_shadow_width' => $_POST[$maxbutton_text_shadow_width_key] != '' ? $wpdb->escape($_POST[$maxbutton_text_shadow_width_key]) .'px' : $maxbutton_text_shadow_width_default,
		'text_shadow_color' => $_POST[$maxbutton_text_shadow_color_key] != '' ? $wpdb->escape($_POST[$maxbutton_text_shadow_color_key]) : $maxbutton_text_shadow_color_default,
		'text_shadow_color_hover' => $_POST[$maxbutton_text_shadow_color_hover_key] != '' ? $wpdb->escape($_POST[$maxbutton_text_shadow_color_hover_key]) : $maxbutton_text_shadow_color_hover_default,
		'border_radius_top_left' => $_POST[$maxbutton_border_radius_top_left_key] != '' ? $wpdb->escape($_POST[$maxbutton_border_radius_top_left_key]) . 'px' : $maxbutton_border_radius_top_left_default,
		'border_radius_top_right' => $_POST[$maxbutton_border_radius_top_right_key] != '' ? $wpdb->escape($_POST[$maxbutton_border_radius_top_right_key]) . 'px' : $maxbutton_border_radius_top_right_default,
		'border_radius_bottom_left' => $_POST[$maxbutton_border_radius_bottom_left_key] != '' ? $wpdb->escape($_POST[$maxbutton_border_radius_bottom_left_key]) . 'px' : $maxbutton_border_radius_bottom_left_default,
		'border_radius_bottom_right' => $_POST[$maxbutton_border_radius_bottom_right_key] != '' ? $wpdb->escape($_POST[$maxbutton_border_radius_bottom_right_key]) . 'px' : $maxbutton_border_radius_bottom_right_default,
		'border_style' => $_POST[$maxbutton_border_style_key] != '' ? $wpdb->escape($_POST[$maxbutton_border_style_key]) : $maxbutton_border_style_default,
		'border_width' => $_POST[$maxbutton_border_width_key] != '' ? $wpdb->escape($_POST[$maxbutton_border_width_key]) . 'px' : $maxbutton_border_width_default,
		'border_color' => $_POST[$maxbutton_border_color_key] != '' ? $wpdb->escape($_POST[$maxbutton_border_color_key]) : $maxbutton_border_color_default,
		'border_color_hover' => $_POST[$maxbutton_border_color_hover_key] != '' ? $wpdb->escape($_POST[$maxbutton_border_color_hover_key]) : $maxbutton_border_color_hover_default,
		'box_shadow_offset_left' => $_POST[$maxbutton_box_shadow_offset_left_key] != '' ? $wpdb->escape($_POST[$maxbutton_box_shadow_offset_left_key]) . 'px' : $maxbutton_box_shadow_offset_left_default,
		'box_shadow_offset_top' => $_POST[$maxbutton_box_shadow_offset_top_key] != '' ? $wpdb->escape($_POST[$maxbutton_box_shadow_offset_top_key]) . 'px' : $maxbutton_box_shadow_offset_top_default,
		'box_shadow_width' => $_POST[$maxbutton_box_shadow_width_key] != '' ? $wpdb->escape($_POST[$maxbutton_box_shadow_width_key]) . 'px' : $maxbutton_box_shadow_width_default,
		'box_shadow_color' => $_POST[$maxbutton_box_shadow_color_key] != '' ? $wpdb->escape($_POST[$maxbutton_box_shadow_color_key]) : $maxbutton_box_shadow_color_default,
		'box_shadow_color_hover' => $_POST[$maxbutton_box_shadow_color_hover_key] != '' ? $wpdb->escape($_POST[$maxbutton_box_shadow_color_hover_key]) : $maxbutton_box_shadow_color_hover_default,
		'gradient_start_color' => $_POST[$maxbutton_gradient_start_color_key] != '' ? $wpdb->escape($_POST[$maxbutton_gradient_start_color_key]) : $maxbutton_gradient_start_color_default,
		'gradient_start_color_hover' => $_POST[$maxbutton_gradient_start_color_hover_key] != '' ? $wpdb->escape($_POST[$maxbutton_gradient_start_color_hover_key]) : $maxbutton_gradient_start_color_hover_default,
		'gradient_end_color' => $_POST[$maxbutton_gradient_end_color_key] != '' ? $wpdb->escape($_POST[$maxbutton_gradient_end_color_key]) : $maxbutton_gradient_end_color_default,
		'gradient_end_color_hover' => $_POST[$maxbutton_gradient_end_color_hover_key] != '' ? $wpdb->escape($_POST[$maxbutton_gradient_end_color_hover_key]) : $maxbutton_gradient_end_color_hover_default,
		'gradient_stop' => $_POST[$maxbutton_gradient_stop_key] != '' ? $wpdb->escape($_POST[$maxbutton_gradient_stop_key]) : $maxbutton_gradient_stop_default,
		'container_enabled' => $wpdb->escape($_POST[$maxbutton_container_enabled_key]),
		'container_width' => $_POST[$maxbutton_container_width_key] != '' ? $wpdb->escape($_POST[$maxbutton_container_width_key]) . 'px' : '',
		'container_margin_top' => $_POST[$maxbutton_container_margin_top_key] != '' ? $wpdb->escape($_POST[$maxbutton_container_margin_top_key]) . 'px' : '',
		'container_margin_right' => $_POST[$maxbutton_container_margin_right_key] != '' ? $wpdb->escape($_POST[$maxbutton_container_margin_right_key]) . 'px' : '',
		'container_margin_bottom' => $_POST[$maxbutton_container_margin_bottom_key] != '' ? $wpdb->escape($_POST[$maxbutton_container_margin_bottom_key]) . 'px' : '',
		'container_margin_left' => $_POST[$maxbutton_container_margin_left_key] != '' ? $wpdb->escape($_POST[$maxbutton_container_margin_left_key]) . 'px' : '',
		'container_alignment' => $_POST[$maxbutton_container_alignment_key] != '' ? $wpdb->escape($_POST[$maxbutton_container_alignment_key]) : ''
	);

	if ($_GET['id'] == '') {
		// This is a new button
		$wpdb->insert(mbpro_get_buttons_table_name(), $data);
		$button_id = $wpdb->insert_id;
	} else {
		// Updating an existing button
		$where = array('id' => $_GET['id']);
		$data_format = array('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s');
		$where_format = array('%d');
		$wpdb->update(mbpro_get_buttons_table_name(), $data, $where, $data_format, $where_format);
		$button_id = $_GET['id'];
	}
	
	$redirect = true;
}
?>

<script type="text/javascript">
	<?php if ($redirect == true) { ?>
		window.location = "<?php echo admin_url() ?>admin.php?page=maxbuttons-controller&action=button&id=<?php echo $button_id ?>";
	<?php } ?>
	
	jQuery(document).ready(function() {		
		<?php if ($_GET['id'] > 0) { ?>
			jQuery("#maxbuttons .message").show();
		<?php } ?>
		
		mbpro_attachMediaUploader("<?php echo $maxbutton_icon_url_key ?>", true);
		mbpro_loadFontFamilyStylesheet("<?php echo $maxbutton_text_font_family_display ?>");
		mbpro_loadFontFamilyStylesheet("<?php echo $maxbutton_text2_font_family_display ?>");
		
		jQuery("#maxbuttons .output").draggable();
		jQuery("#maxbuttons .output .result a .button-output .text").css("text-align", "<?php echo $maxbutton_text_align_display ?>");
		jQuery("#maxbuttons .output .result a .button-output .text2").css("text-align", "<?php echo $maxbutton_text2_align_display ?>");

		showColorPickerForButtonTextColor();
		showColorPickerForButtonTextHoverColor();
		showColorPickerForButtonTextShadowColor();
		showColorPickerForButtonTextShadowHoverColor();
		showColorPickerForButtonGradientStartColor();
		showColorPickerForButtonGradientStartHoverColor();
		showColorPickerForButtonGradientEndColor();
		showColorPickerForButtonGradientEndHoverColor();
		showColorPickerForButtonBorderColor();
		showColorPickerForButtonBorderHoverColor();
		showColorPickerForButtonBoxShadowColor();
		showColorPickerForButtonBoxShadowHoverColor();
		showColorPickerForOutputBackgroundColor();
		
		jQuery("#save-button").click(function() {			
			jQuery("#new-button-form").submit();
			return false;
		});
		
		jQuery("#<?php echo $maxbutton_url_key ?>").keyup(function() {
			jQuery("#maxbuttons .output .result a").attr("href", jQuery(this).val());
		});
		
		jQuery("#<?php echo $maxbutton_width_key ?>").keyup(function() {
			width = jQuery(this).val() != "" ? jQuery(this).val() + "px" : "";
			jQuery("#maxbuttons .output .result a .button-output").css("width", width);
		});
		
		jQuery("#<?php echo $maxbutton_height_key ?>").keyup(function() {
			height = jQuery(this).val() != "" ? jQuery(this).val() + "px" : "";
			jQuery("#maxbuttons .output .result a .button-output").css("height", height);
		});
		
		jQuery("#<?php echo $maxbutton_icon_url_key ?>").change(function() {
			var icon_url = jQuery(this).val() != "" ? jQuery(this).val() : "";
			var icon_position = jQuery("#<?php echo $maxbutton_icon_position_key ?>").val() != "" ? jQuery("#<?php echo $maxbutton_icon_position_key ?>").val() : "";
			
			if (icon_url != "") {
				jQuery("#maxbuttons .output .result a .button-output .icon").remove();
				
				if (icon_position == "left") {
					jQuery("#maxbuttons .output .result a .button-output").prepend("<div class='icon left'><img src='" + icon_url + "' /></div>");
					jQuery("#maxbuttons .output .result a .button-output .icon.left").css("float", icon_position);
				}

				if (icon_position == "right") {
					jQuery("#maxbuttons .output .result a .button-output").prepend("<div class='icon right'><img src='" + icon_url + "' /></div>");
					jQuery("#maxbuttons .output .result a .button-output .icon.right").css("float", icon_position);
				}
				
				if (icon_position == "top") {
					jQuery("#maxbuttons .output .result a .button-output").prepend("<div class='icon top'><img src='" + icon_url + "' /></div>");
					jQuery("#maxbuttons .output .result a .button-output .icon.top").css("text-align", "center");
				}
				
				if (icon_position == "bottom") {
					jQuery("#maxbuttons .output .result a .button-output").append("<div class='icon bottom'><img src='" + icon_url + "' /></div>");
					jQuery("#maxbuttons .output .result a .button-output .icon.bottom").css("text-align", "center");
				}
			}
		});
		
		jQuery("#<?php echo $maxbutton_icon_position_key ?>").change(function() {
			var icon_url = jQuery("#<?php echo $maxbutton_icon_url_key ?>").val() != "" ? jQuery("#<?php echo $maxbutton_icon_url_key ?>").val() : "";
			var icon_position = jQuery(this).val() != "" ? jQuery(this).val() : "<?php echo $maxbutton_icon_position_default ?>";
			
			if (icon_url != '') {
				jQuery("#maxbuttons .output .result a .button-output .icon").remove();
				
				if (icon_position == "left") {
					jQuery("#maxbuttons .output .result a .button-output").prepend("<div class='icon left'><img src='" + icon_url + "' /></div>");
					jQuery("#maxbuttons .output .result a .button-output .icon.left").css("float", icon_position);
				}

				if (icon_position == "right") {
					jQuery("#maxbuttons .output .result a .button-output").prepend("<div class='icon right'><img src='" + icon_url + "' /></div>");
					jQuery("#maxbuttons .output .result a .button-output .icon.right").css("float", icon_position);
				}
				
				if (icon_position == "top") {
					jQuery("#maxbuttons .output .result a .button-output").prepend("<div class='icon top'><img src='" + icon_url + "' /></div>");
					jQuery("#maxbuttons .output .result a .button-output .icon.top").css("text-align", "center");
				}
				
				if (icon_position == "bottom") {
					jQuery("#maxbuttons .output .result a .button-output").append("<div class='icon bottom'><img src='" + icon_url + "' /></div>");
					jQuery("#maxbuttons .output .result a .button-output .icon.bottom").css("text-align", "center");
				}
			}
		});
		
		jQuery("#<?php echo $maxbutton_icon_padding_top_key ?>").keyup(function() {
			icon_padding_top = jQuery(this).val() != "" ? jQuery(this).val() + "px" : "";
			jQuery("#maxbuttons .output .result a .button-output .icon").css("padding-top", icon_padding_top);
		});
		
		jQuery("#<?php echo $maxbutton_icon_padding_bottom_key ?>").keyup(function() {
			icon_padding_bottom = jQuery(this).val() != "" ? jQuery(this).val() + "px" : "";
			jQuery("#maxbuttons .output .result a .button-output .icon").css("padding-bottom", icon_padding_bottom);
		});
		
		jQuery("#<?php echo $maxbutton_icon_padding_left_key ?>").keyup(function() {
			icon_padding_left = jQuery(this).val() != "" ? jQuery(this).val() + "px" : "";
			jQuery("#maxbuttons .output .result a .button-output .icon").css("padding-left", icon_padding_left);
		});
		
		jQuery("#<?php echo $maxbutton_icon_padding_right_key ?>").keyup(function() {
			icon_padding_right = jQuery(this).val() != "" ? jQuery(this).val() + "px" : "";
			jQuery("#maxbuttons .output .result a .button-output .icon").css("padding-right", icon_padding_right);
		});
		
		jQuery("#<?php echo $maxbutton_text_key ?>").keyup(function() {
			jQuery("#maxbuttons .output .result a .button-output .text").text(jQuery(this).val());
		});
		
		jQuery("#<?php echo $maxbutton_text_font_family_key ?>").change(function() {
			var font_family = jQuery(this).val() != "" ? jQuery(this).val() : "<?php echo $maxbutton_text_font_family_default ?>";
			mbpro_loadFontFamilyStylesheet(font_family);
			jQuery("#maxbuttons .output .result a .button-output .text").css("font-family", font_family);
		});
		
		jQuery("#<?php echo $maxbutton_text_font_size_key ?>").change(function() {
			var font_size = jQuery(this).val() != "" ? jQuery(this).val() : "<?php echo $maxbutton_text_font_size_default ?>";
			jQuery("#maxbuttons .output .result a .button-output .text").css("font-size", font_size);
		});
		
		jQuery("#<?php echo $maxbutton_text_font_style_key ?>").change(function() {
			var font_style = jQuery(this).val() != "" ? jQuery(this).val() : "<?php echo $maxbutton_text_font_style_default ?>";
			jQuery("#maxbuttons .output .result a .button-output .text").css("font-style", font_style);
		});
		
		jQuery("#<?php echo $maxbutton_text_font_weight_key ?>").change(function() {
			var font_weight = jQuery(this).val() != "" ? jQuery(this).val() : "<?php echo $maxbutton_text_font_weight_default ?>";
			jQuery("#maxbuttons .output .result a .button-output .text").css("font-weight", font_weight);
		});

		jQuery("#<?php echo $maxbutton_text_align_key ?>").change(function() {
			var align = jQuery(this).val() != "" ? jQuery(this).val() : "<?php echo $maxbutton_text_align_default ?>";
			jQuery("#maxbuttons .output .result a .button-output .text").css("text-align", align);
		});
		
		jQuery("#<?php echo $maxbutton_text_padding_top_key ?>").keyup(function() {
			var padding_top = jQuery(this).val() != "" ? jQuery(this).val() + "px" : "<?php echo $maxbutton_text_padding_top_default ?>";
			jQuery("#maxbuttons .output .result a .button-output .text").css("padding-top", padding_top);
		});
		
		jQuery("#<?php echo $maxbutton_text_padding_bottom_key ?>").keyup(function() {
			var padding_bottom = jQuery(this).val() != "" ? jQuery(this).val() + "px" : "<?php echo $maxbutton_text_padding_bottom_default ?>";
			jQuery("#maxbuttons .output .result a .button-output .text").css("padding-bottom", padding_bottom);
		});
		
		jQuery("#<?php echo $maxbutton_text_padding_left_key ?>").keyup(function() {
			var padding_left = jQuery(this).val() != "" ? jQuery(this).val() + "px" : "<?php echo $maxbutton_text_padding_left_default ?>";
			jQuery("#maxbuttons .output .result a .button-output .text").css("padding-left", padding_left);
		});
		
		jQuery("#<?php echo $maxbutton_text_padding_right_key ?>").keyup(function() {
			var padding_right = jQuery(this).val() != "" ? jQuery(this).val() + "px" : "<?php echo $maxbutton_text_padding_right_default ?>";
			jQuery("#maxbuttons .output .result a .button-output .text").css("padding-right", padding_right);
		});
		
		jQuery("#<?php echo $maxbutton_text2_key ?>").keyup(function() {
			jQuery("#maxbuttons .output .result a .button-output .text2").text(jQuery(this).val());
		});
		
		jQuery("#<?php echo $maxbutton_text2_font_family_key ?>").change(function() {
			var font_family = jQuery(this).val() != "" ? jQuery(this).val() : "<?php echo $maxbutton_text2_font_family_default ?>";
			mbpro_loadFontFamilyStylesheet(font_family);
			jQuery("#maxbuttons .output .result a .button-output .text2").css("font-family", font_family);
		});
		
		jQuery("#<?php echo $maxbutton_text2_font_size_key ?>").change(function() {
			var font_size = jQuery(this).val() != "" ? jQuery(this).val() : "<?php echo $maxbutton_text2_font_size_default ?>";
			jQuery("#maxbuttons .output .result a .button-output .text2").css("font-size", font_size);
		});
		
		jQuery("#<?php echo $maxbutton_text2_font_style_key ?>").change(function() {
			var font_style = jQuery(this).val() != "" ? jQuery(this).val() : "<?php echo $maxbutton_text2_font_style_default ?>";
			jQuery("#maxbuttons .output .result a .button-output .text2").css("font-style", font_style);
		});
		
		jQuery("#<?php echo $maxbutton_text2_font_weight_key ?>").change(function() {
			var font_weight = jQuery(this).val() != "" ? jQuery(this).val() : "<?php echo $maxbutton_text2_font_weight_default ?>";
			jQuery("#maxbuttons .output .result a .button-output .text2").css("font-weight", font_weight);
		});

		jQuery("#<?php echo $maxbutton_text2_align_key ?>").change(function() {
			var align = jQuery(this).val() != "" ? jQuery(this).val() : "<?php echo $maxbutton_text2_align_default ?>";
			jQuery("#maxbuttons .output .result a .button-output .text2").css("text-align", align);
		});
		
		jQuery("#<?php echo $maxbutton_text2_padding_top_key ?>").keyup(function() {
			var padding_top = jQuery(this).val() != "" ? jQuery(this).val() + "px" : "<?php echo $maxbutton_text2_padding_top_default ?>";
			jQuery("#maxbuttons .output .result a .button-output .text2").css("padding-top", padding_top);
		});
		
		jQuery("#<?php echo $maxbutton_text2_padding_bottom_key ?>").keyup(function() {
			var padding_bottom = jQuery(this).val() != "" ? jQuery(this).val() + "px" : "<?php echo $maxbutton_text2_padding_bottom_default ?>";
			jQuery("#maxbuttons .output .result a .button-output .text2").css("padding-bottom", padding_bottom);
		});
		
		jQuery("#<?php echo $maxbutton_text2_padding_left_key ?>").keyup(function() {
			var padding_left = jQuery(this).val() != "" ? jQuery(this).val() + "px" : "<?php echo $maxbutton_text2_padding_left_default ?>";
			jQuery("#maxbuttons .output .result a .button-output .text2").css("padding-left", padding_left);
		});
		
		jQuery("#<?php echo $maxbutton_text2_padding_right_key ?>").keyup(function() {
			var padding_right = jQuery(this).val() != "" ? jQuery(this).val() + "px" : "<?php echo $maxbutton_text2_padding_right_default ?>";
			jQuery("#maxbuttons .output .result a .button-output .text2").css("padding-right", padding_right);
		});
		
		jQuery("#<?php echo $maxbutton_border_radius_top_left_key ?>").keyup(function() {
			var radius_top_left = jQuery(this).val() != "" ? jQuery(this).val() + "px" : "<?php echo $maxbutton_border_radius_top_left_default ?>";
			jQuery("#maxbuttons .output .result a .button-output").css("border-top-left-radius", radius_top_left);
			jQuery("#maxbuttons .output .result a .button-output").css("-moz-border-radius-topleft", radius_top_left);
			jQuery("#maxbuttons .output .result a .button-output").css("-webkit-border-top-left-radius", radius_top_left);
		});
		
		jQuery("#<?php echo $maxbutton_border_radius_top_right_key ?>").keyup(function() {
			var radius_top_right = jQuery(this).val() != "" ? jQuery(this).val() + "px" : "<?php echo $maxbutton_border_radius_top_right_default ?>";
			jQuery("#maxbuttons .output .result a .button-output").css("border-top-right-radius", radius_top_right);
			jQuery("#maxbuttons .output .result a .button-output").css("-moz-border-radius-topright", radius_top_right);
			jQuery("#maxbuttons .output .result a .button-output").css("-webkit-border-top-right-radius", radius_top_right);
		});
		
		jQuery("#<?php echo $maxbutton_border_radius_bottom_left_key ?>").keyup(function() {
			var radius_bottom_left = jQuery(this).val() != "" ? jQuery(this).val() + "px" : "<?php echo $maxbutton_border_radius_bottom_left_default ?>";
			jQuery("#maxbuttons .output .result a .button-output").css("border-bottom-left-radius", radius_bottom_left);
			jQuery("#maxbuttons .output .result a .button-output").css("-moz-border-radius-bottomleft", radius_bottom_left);
			jQuery("#maxbuttons .output .result a .button-output").css("-webkit-border-bottom-left-radius", radius_bottom_left);
		});
		
		jQuery("#<?php echo $maxbutton_border_radius_bottom_right_key ?>").keyup(function() {
			var radius_bottom_right = jQuery(this).val() != "" ? jQuery(this).val() + "px" : "<?php echo $maxbutton_border_radius_bottom_right_default ?>";
			jQuery("#maxbuttons .output .result a .button-output").css("border-bottom-right-radius", radius_bottom_right);
			jQuery("#maxbuttons .output .result a .button-output").css("-moz-border-radius-bottomright", radius_bottom_right);
			jQuery("#maxbuttons .output .result a .button-output").css("-webkit-border-bottom-right-radius", radius_bottom_right);
		});
		
		jQuery("#<?php echo $maxbutton_border_style_key ?>").change(function() {
			var border_style = jQuery(this).val() != "" ? jQuery(this).val() : "<?php echo $maxbutton_border_style_default ?>";
			jQuery("#maxbuttons .output .result a .button-output").css("border-style", border_style);
		});
		
		jQuery("#<?php echo $maxbutton_border_width_key ?>").keyup(function() {
			var border_width = jQuery(this).val() != "" ? jQuery(this).val() + "px" : "<?php echo $maxbutton_border_width_default ?>";
			jQuery("#maxbuttons .output .result a .button-output").css("border-width", border_width);
		});
		
		jQuery("#maxbuttons .output .result a").css("text-decoration", "none");
		jQuery("#maxbuttons .output .result a").css("color", "<?php echo $maxbutton_text_color_display ?>");
		jQuery("#maxbuttons .output .result a .button-output").css("width", "<?php echo $maxbutton_width_value ?>");
		jQuery("#maxbuttons .output .result a .button-output").css("height", "<?php echo $maxbutton_height_value ?>");
		jQuery("#maxbuttons .output .result a .button-output .icon").css("padding-top", "<?php echo $maxbutton_icon_padding_top_display ?>");
		jQuery("#maxbuttons .output .result a .button-output .icon").css("padding-bottom", "<?php echo $maxbutton_icon_padding_bottom_display ?>");
		jQuery("#maxbuttons .output .result a .button-output .icon").css("padding-left", "<?php echo $maxbutton_icon_padding_left_display ?>");
		jQuery("#maxbuttons .output .result a .button-output .icon").css("padding-right", "<?php echo $maxbutton_icon_padding_right_display ?>");
		jQuery("#maxbuttons .output .result a .button-output .icon.left").css("float", "left");
		jQuery("#maxbuttons .output .result a .button-output .icon.right").css("float", "right");
		jQuery("#maxbuttons .output .result a .button-output .icon.top").css("text-align", "center");
		jQuery("#maxbuttons .output .result a .button-output .icon.bottom").css("text-align", "center");
		jQuery("#maxbuttons .output .result a .button-output .text").css("color", "<?php echo $maxbutton_text_color_display ?>");
		jQuery("#maxbuttons .output .result a .button-output .text").css("font-family", "<?php echo $maxbutton_text_font_family_display ?>");
		jQuery("#maxbuttons .output .result a .button-output .text").css("font-size", "<?php echo $maxbutton_text_font_size_display ?>");
		jQuery("#maxbuttons .output .result a .button-output .text").css("font-style", "<?php echo $maxbutton_text_font_style_display ?>");
		jQuery("#maxbuttons .output .result a .button-output .text").css("font-weight", "<?php echo $maxbutton_text_font_weight_display ?>");
		jQuery("#maxbuttons .output .result a .button-output .text").css("padding-top", "<?php echo $maxbutton_text_padding_top_display ?>");
		jQuery("#maxbuttons .output .result a .button-output .text").css("padding-bottom", "<?php echo $maxbutton_text_padding_bottom_display ?>");
		jQuery("#maxbuttons .output .result a .button-output .text").css("padding-left", "<?php echo $maxbutton_text_padding_left_display ?>");
		jQuery("#maxbuttons .output .result a .button-output .text").css("padding-right", "<?php echo $maxbutton_text_padding_right_display ?>");
		jQuery("#maxbuttons .output .result a .button-output .text").css("line-height", "1.0em");
		jQuery("#maxbuttons .output .result a .button-output .text2").css("color", "<?php echo $maxbutton_text_color_display ?>");
		jQuery("#maxbuttons .output .result a .button-output .text2").css("font-family", "<?php echo $maxbutton_text2_font_family_display ?>");
		jQuery("#maxbuttons .output .result a .button-output .text2").css("font-size", "<?php echo $maxbutton_text2_font_size_display ?>");
		jQuery("#maxbuttons .output .result a .button-output .text2").css("font-style", "<?php echo $maxbutton_text2_font_style_display ?>");
		jQuery("#maxbuttons .output .result a .button-output .text2").css("font-weight", "<?php echo $maxbutton_text2_font_weight_display ?>");
		jQuery("#maxbuttons .output .result a .button-output .text2").css("padding-top", "<?php echo $maxbutton_text2_padding_top_display ?>");
		jQuery("#maxbuttons .output .result a .button-output .text2").css("padding-bottom", "<?php echo $maxbutton_text2_padding_bottom_display ?>");
		jQuery("#maxbuttons .output .result a .button-output .text2").css("padding-left", "<?php echo $maxbutton_text2_padding_left_display ?>");
		jQuery("#maxbuttons .output .result a .button-output .text2").css("padding-right", "<?php echo $maxbutton_text2_padding_right_display ?>");
		jQuery("#maxbuttons .output .result a .button-output .text2").css("line-height", "1.0em");
		jQuery("#maxbuttons .output .result a .button-output").css("background-color", "<?php echo $maxbutton_gradient_start_color_display ?>");
		jQuery("#maxbuttons .output .result a .button-output").css("background", "linear-gradient(<?php echo $maxbutton_gradient_start_color_display ?> <?php echo $maxbutton_gradient_stop_display ?>%, <?php echo $maxbutton_gradient_end_color_display ?>)");
		jQuery("#maxbuttons .output .result a .button-output").css("background", "-moz-linear-gradient(<?php echo $maxbutton_gradient_start_color_display ?> <?php echo $maxbutton_gradient_stop_display ?>%, <?php echo $maxbutton_gradient_end_color_display ?>)");
		jQuery("#maxbuttons .output .result a .button-output").css("background", "-o-linear-gradient(<?php echo $maxbutton_gradient_start_color_display ?> <?php echo $maxbutton_gradient_stop_display ?>%, <?php echo $maxbutton_gradient_end_color_display ?>)");
		jQuery("#maxbuttons .output .result a .button-output").css("background", "-webkit-gradient(linear, left top, left bottom, color-stop(.<?php echo $maxbutton_gradient_stop_display ?>, <?php echo $maxbutton_gradient_start_color_display ?>), color-stop(1, <?php echo $maxbutton_gradient_end_color_display ?>))");
		jQuery("#maxbuttons .output .result a .button-output").css("filter", "progid:DXImageTransform.Microsoft.gradient(startColorStr='<?php echo $maxbutton_gradient_start_color_display ?>', endColorStr='<?php echo $maxbutton_gradient_end_color_display ?>')");
		jQuery("#maxbuttons .output .result a .button-output").css("-ms-filter", "progid:DXImageTransform.Microsoft.gradient(startColorStr='<?php echo $maxbutton_gradient_start_color_display ?>', endColorStr='<?php echo $maxbutton_gradient_end_color_display ?>')");
		jQuery("#maxbuttons .output .result a .button-output").css("border-style", "<?php echo $maxbutton_border_style_display ?>");
		jQuery("#maxbuttons .output .result a .button-output").css("border-width", "<?php echo $maxbutton_border_width_display ?>");
		jQuery("#maxbuttons .output .result a .button-output").css("border-color", "<?php echo $maxbutton_border_color_display ?>");
		jQuery("#maxbuttons .output .result a .button-output").css("border-top-left-radius", "<?php echo $maxbutton_border_radius_top_left_display ?>");
		jQuery("#maxbuttons .output .result a .button-output").css("border-top-right-radius", "<?php echo $maxbutton_border_radius_top_right_display ?>");
		jQuery("#maxbuttons .output .result a .button-output").css("border-bottom-left-radius", "<?php echo $maxbutton_border_radius_bottom_left_display ?>");
		jQuery("#maxbuttons .output .result a .button-output").css("border-bottom-right-radius", "<?php echo $maxbutton_border_radius_bottom_right_display ?>");
		jQuery("#maxbuttons .output .result a .button-output").css("-moz-border-radius-topleft", "<?php echo $maxbutton_border_radius_top_left_display ?>");
		jQuery("#maxbuttons .output .result a .button-output").css("-moz-border-radius-topright", "<?php echo $maxbutton_border_radius_top_right_display ?>");
		jQuery("#maxbuttons .output .result a .button-output").css("-moz-border-radius-bottomleft", "<?php echo $maxbutton_border_radius_bottom_left_display ?>");
		jQuery("#maxbuttons .output .result a .button-output").css("-moz-border-radius-bottomright", "<?php echo $maxbutton_border_radius_bottom_right_display ?>");
		jQuery("#maxbuttons .output .result a .button-output").css("-webkit-border-top-left-radius", "<?php echo $maxbutton_border_radius_top_left_display ?>");
		jQuery("#maxbuttons .output .result a .button-output").css("-webkit-border-top-right-radius", "<?php echo $maxbutton_border_radius_top_right_display ?>");
		jQuery("#maxbuttons .output .result a .button-output").css("-webkit-border-bottom-left-radius", "<?php echo $maxbutton_border_radius_bottom_left_display ?>");
		jQuery("#maxbuttons .output .result a .button-output").css("-webkit-border-bottom-right-radius", "<?php echo $maxbutton_border_radius_bottom_right_display ?>");
		jQuery("#maxbuttons .output .result a .button-output").css("text-shadow", "<?php echo $maxbutton_text_shadow_offset_left_display ?> <?php echo $maxbutton_text_shadow_offset_top_display ?> <?php echo $maxbutton_text_shadow_width_display ?> <?php echo $maxbutton_text_shadow_color_display ?>");
		jQuery("#maxbuttons .output .result a .button-output").css("box-shadow", "<?php echo $maxbutton_box_shadow_offset_left_display ?> <?php echo $maxbutton_box_shadow_offset_top_display ?> <?php echo $maxbutton_box_shadow_width_display ?> <?php echo $maxbutton_box_shadow_color_display ?>");

		jQuery("#maxbuttons .output .result a.hover").css("text-decoration", "none");
		jQuery("#maxbuttons .output .result a.hover").css("color", "<?php echo $maxbutton_text_color_hover_display ?>");
		jQuery("#maxbuttons .output .result a.hover .button-output").css("background-color", "<?php echo $maxbutton_gradient_start_color_hover_display ?>");
		jQuery("#maxbuttons .output .result a.hover .button-output").css("background", "linear-gradient(<?php echo $maxbutton_gradient_start_color_hover_display ?> <?php echo $maxbutton_gradient_stop_display ?>%, <?php echo $maxbutton_gradient_end_color_hover_display ?>)");
		jQuery("#maxbuttons .output .result a.hover .button-output").css("background", "-moz-linear-gradient(<?php echo $maxbutton_gradient_start_color_hover_display ?> <?php echo $maxbutton_gradient_stop_display ?>%, <?php echo $maxbutton_gradient_end_color_hover_display ?>)");
		jQuery("#maxbuttons .output .result a.hover .button-output").css("background", "-o-linear-gradient(<?php echo $maxbutton_gradient_start_color_hover_display ?> <?php echo $maxbutton_gradient_stop_display ?>%, <?php echo $maxbutton_gradient_end_color_hover_display ?>)");
		jQuery("#maxbuttons .output .result a.hover .button-output").css("background", "-webkit-gradient(linear, left top, left bottom, color-stop(.<?php echo $maxbutton_gradient_stop_display ?>, <?php echo $maxbutton_gradient_start_color_hover_display ?>), color-stop(1, <?php echo $maxbutton_gradient_end_color_hover_display ?>))");
		jQuery("#maxbuttons .output .result a.hover .button-output").css("filter", "progid:DXImageTransform.Microsoft.gradient(startColorStr='<?php echo $maxbutton_gradient_start_color_hover_display ?>', endColorStr='<?php echo $maxbutton_gradient_end_color_hover_display ?>')");
		jQuery("#maxbuttons .output .result a.hover .button-output").css("-ms-filter", "progid:DXImageTransform.Microsoft.gradient(startColorStr='<?php echo $maxbutton_gradient_start_color_hover_display ?>', endColorStr='<?php echo $maxbutton_gradient_end_color_hover_display ?>')");
		jQuery("#maxbuttons .output .result a.hover .button-output").css("border-color", "<?php echo $maxbutton_border_color_hover_display ?>");
		jQuery("#maxbuttons .output .result a.hover .button-output").css("text-shadow", "<?php echo $maxbutton_text_shadow_offset_left_display ?> <?php echo $maxbutton_text_shadow_offset_top_display ?> <?php echo $maxbutton_text_shadow_width_display ?> <?php echo $maxbutton_text_shadow_color_hover_display ?>");
		jQuery("#maxbuttons .output .result a.hover .button-output").css("box-shadow", "<?php echo $maxbutton_box_shadow_offset_left_display ?> <?php echo $maxbutton_box_shadow_offset_top_display ?> <?php echo $maxbutton_box_shadow_width_display ?> <?php echo $maxbutton_box_shadow_color_hover_display ?>");
		jQuery("#maxbuttons .output .result a.hover .button-output .text").css("color", "<?php echo $maxbutton_text_color_hover_display ?>");
		jQuery("#maxbuttons .output .result a.hover .button-output .text2").css("color", "<?php echo $maxbutton_text_color_hover_display ?>");
	});
	
	function showColorPickerForButtonTextColor() {
		jQuery('#<?php echo $maxbutton_text_color_key ?>_box span').css('background-color', '<?php echo $maxbutton_text_color_display ?>');
		jQuery('#<?php echo $maxbutton_text_color_key ?>_box span').ColorPicker({
			'color': '<?php echo $maxbutton_text_color_display ?>',
			'onShow': function(colpkr) { jQuery(colpkr).fadeIn(500); return false; },
			'onHide': function(colpkr) { jQuery(colpkr).fadeOut(500); return false; },
			'onChange': function(hsb, hex, rgb) {
				jQuery('#<?php echo $maxbutton_text_color_key ?>').attr('value', '#' + hex);
				jQuery('#<?php echo $maxbutton_text_color_key ?>_box span').css('background-color', '#' + hex);
				jQuery("#button-result").css("color", '#' + hex);
				jQuery("#button-result .text").css("color", '#' + hex);
				jQuery("#button-result .text2").css("color", '#' + hex);
				
				// Need this so that the hover color doesn't change when the normal color changes
				var text_color_hover = jQuery("#<?php echo $maxbutton_text_color_hover_key ?>").val();
				jQuery("#button-result-hover").css("color", text_color_hover);
				jQuery("#button-result-hover .text").css("color", text_color_hover);
				jQuery("#button-result-hover .text2").css("color", text_color_hover);
			}
		});
	}
	
	function showColorPickerForButtonTextHoverColor() {
		jQuery('#<?php echo $maxbutton_text_color_hover_key ?>_box span').css('background-color', '<?php echo $maxbutton_text_color_hover_display ?>');
		jQuery('#<?php echo $maxbutton_text_color_hover_key ?>_box span').ColorPicker({
			'color': '<?php echo $maxbutton_text_color_hover_display ?>',
			'onShow': function(colpkr) { jQuery(colpkr).fadeIn(500); return false; },
			'onHide': function(colpkr) { jQuery(colpkr).fadeOut(500); return false; },
			'onChange': function(hsb, hex, rgb) {
				jQuery('#<?php echo $maxbutton_text_color_hover_key ?>').attr('value', '#' + hex);
				jQuery('#<?php echo $maxbutton_text_color_hover_key ?>_box span').css('background-color', '#' + hex);
				jQuery("#button-result-hover").css("color", '#' + hex);
				jQuery("#button-result-hover .text").css("color", '#' + hex);
				jQuery("#button-result-hover .text2").css("color", '#' + hex);
				
				// Need this so that the normal color doesn't change when the hover color changes
				var text_color = jQuery("#<?php echo $maxbutton_text_color_key ?>").val();
				jQuery("#button-result").css("color", text_color);
				jQuery("#button-result .text").css("color", text_color);
				jQuery("#button-result .text2").css("color", text_color);
			}
		});
	}
	
	function showColorPickerForButtonTextShadowColor() {
		jQuery('#<?php echo $maxbutton_text_shadow_color_key ?>_box span').css('background-color', '<?php echo $maxbutton_text_shadow_color_display ?>');
		jQuery('#<?php echo $maxbutton_text_shadow_color_key ?>_box span').ColorPicker({
			'color': '<?php echo $maxbutton_text_shadow_color_display ?>',
			'onShow': function(colpkr) { jQuery(colpkr).fadeIn(500); return false; },
			'onHide': function(colpkr) { jQuery(colpkr).fadeOut(500); return false; },
			'onChange': function(hsb, hex, rgb) {
				jQuery('#<?php echo $maxbutton_text_shadow_color_key ?>').attr('value', '#' + hex);
				jQuery('#<?php echo $maxbutton_text_shadow_color_key ?>_box span').css('background-color', '#' + hex);
				jQuery("#button-result").css("text-shadow", "<?php echo $maxbutton_text_shadow_offset_left_display ?> <?php echo $maxbutton_text_shadow_offset_top_display ?> <?php echo $maxbutton_text_shadow_width_display ?> " + '#' + hex);
				jQuery("#button-result .text").css("text-shadow", "<?php echo $maxbutton_text_shadow_offset_left_display ?> <?php echo $maxbutton_text_shadow_offset_top_display ?> <?php echo $maxbutton_text_shadow_width_display ?> " + '#' + hex);
				jQuery("#button-result .text2").css("text-shadow", "<?php echo $maxbutton_text_shadow_offset_left_display ?> <?php echo $maxbutton_text_shadow_offset_top_display ?> <?php echo $maxbutton_text_shadow_width_display ?> " + '#' + hex);
				
				// Need this so that the hover color doesn't change when the normal color changes
				var text_shadow_color_hover = jQuery("#<?php echo $maxbutton_text_shadow_color_hover_key ?>").val();
				jQuery("#button-result").jQuery("#button-result").css("text-shadow", "<?php echo $maxbutton_text_shadow_offset_left_display ?> <?php echo $maxbutton_text_shadow_offset_top_display ?> <?php echo $maxbutton_text_shadow_width_display ?> " + text_shadow_color_hover);
				jQuery("#button-result-hover .text").jQuery("#button-result").css("text-shadow", "<?php echo $maxbutton_text_shadow_offset_left_display ?> <?php echo $maxbutton_text_shadow_offset_top_display ?> <?php echo $maxbutton_text_shadow_width_display ?> " + text_shadow_color_hover);
				jQuery("#button-result-hover .text2").css("text-shadow", "<?php echo $maxbutton_text_shadow_offset_left_display ?> <?php echo $maxbutton_text_shadow_offset_top_display ?> <?php echo $maxbutton_text_shadow_width_display ?> " + text_shadow_color_hover);
			}
		});
	}
	
	function showColorPickerForButtonTextShadowHoverColor() {
		jQuery('#<?php echo $maxbutton_text_shadow_color_hover_key ?>_box span').css('background-color', '<?php echo $maxbutton_text_shadow_color_hover_display ?>');
		jQuery('#<?php echo $maxbutton_text_shadow_color_hover_key ?>_box span').ColorPicker({
			'color': '<?php echo $maxbutton_text_shadow_color_hover_display ?>',
			'onShow': function(colpkr) { jQuery(colpkr).fadeIn(500); return false; },
			'onHide': function(colpkr) { jQuery(colpkr).fadeOut(500); return false; },
			'onChange': function(hsb, hex, rgb) {
				jQuery('#<?php echo $maxbutton_text_shadow_color_hover_key ?>').attr('value', '#' + hex);
				jQuery('#<?php echo $maxbutton_text_shadow_color_hover_key ?>_box span').css('background-color', '#' + hex);
				jQuery("#button-result-hover").css("text-shadow", "<?php echo $maxbutton_text_shadow_offset_left_display ?> <?php echo $maxbutton_text_shadow_offset_top_display ?> <?php echo $maxbutton_text_shadow_width_display ?> " + '#' + hex);
				jQuery("#button-result-hover .text").css("text-shadow", "<?php echo $maxbutton_text_shadow_offset_left_display ?> <?php echo $maxbutton_text_shadow_offset_top_display ?> <?php echo $maxbutton_text_shadow_width_display ?> " + '#' + hex);
				jQuery("#button-result-hover .text2").css("text-shadow", "<?php echo $maxbutton_text_shadow_offset_left_display ?> <?php echo $maxbutton_text_shadow_offset_top_display ?> <?php echo $maxbutton_text_shadow_width_display ?> " + '#' + hex);
				
				// Need this so that the normal color doesn't change when the hover color changes
				var text_shadow_color = jQuery("#<?php echo $maxbutton_text_shadow_color_key ?>").val();
				jQuery("#button-result").jQuery("#button-result").css("text-shadow", "<?php echo $maxbutton_text_shadow_offset_left_display ?> <?php echo $maxbutton_text_shadow_offset_top_display ?> <?php echo $maxbutton_text_shadow_width_display ?> " + text_shadow_color);
				jQuery("#button-result .text").jQuery("#button-result").css("text-shadow", "<?php echo $maxbutton_text_shadow_offset_left_display ?> <?php echo $maxbutton_text_shadow_offset_top_display ?> <?php echo $maxbutton_text_shadow_width_display ?> " + text_shadow_color);
				jQuery("#button-result .text2").css("text-shadow", "<?php echo $maxbutton_text_shadow_offset_left_display ?> <?php echo $maxbutton_text_shadow_offset_top_display ?> <?php echo $maxbutton_text_shadow_width_display ?> " + text_shadow_color);
			}
		});
	}
	
	function showColorPickerForButtonGradientStartColor() {
		jQuery('#<?php echo $maxbutton_gradient_start_color_key ?>_box span').css('background-color', '<?php echo $maxbutton_gradient_start_color_display ?>');
		jQuery('#<?php echo $maxbutton_gradient_start_color_key ?>_box span').ColorPicker({
			'color': '<?php echo $maxbutton_gradient_start_color_display ?>',
			'onShow': function(colpkr) { jQuery(colpkr).fadeIn(500); return false; },
			'onHide': function(colpkr) { jQuery(colpkr).fadeOut(500); return false; },
			'onChange': function(hsb, hex, rgb) {
				jQuery('#<?php echo $maxbutton_gradient_start_color_key ?>').attr('value', '#' + hex);
				jQuery('#<?php echo $maxbutton_gradient_start_color_key ?>_box span').css('background-color', '#' + hex);
				
				var start_color = '#' + hex;
				var end_color = jQuery("#<?php echo $maxbutton_gradient_end_color_key ?>").val() != "" ? jQuery("#<?php echo $maxbutton_gradient_end_color_key ?>").val() : "<?php echo $maxbutton_gradient_end_color_default ?>";
				jQuery("#button-result .button-output").css("background-color", start_color);
				jQuery("#button-result .button-output").css("background", "linear-gradient(" + start_color + " <?php echo $maxbutton_gradient_stop_display ?>%, " + end_color + ")");
				jQuery("#button-result .button-output").css("background", "-moz-linear-gradient(" + start_color + " <?php echo $maxbutton_gradient_stop_display ?>%, " + end_color + ")");
				jQuery("#button-result .button-output").css("background", "-o-linear-gradient(" + start_color + " <?php echo $maxbutton_gradient_stop_display ?>%, " + end_color + ")");
				jQuery("#button-result .button-output").css("background", "-webkit-gradient(linear, left top, left bottom, color-stop(.<?php echo $maxbutton_gradient_stop_display ?>, " + start_color + "), color-stop(1, " + end_color + "))");
				jQuery("#button-result .button-output").css("filter", "progid:DXImageTransform.Microsoft.gradient(startColorStr='" + start_color + "', endColorStr='" + end_color + "')");
				jQuery("#button-result .button-output").css("-ms-filter", "progid:DXImageTransform.Microsoft.gradient(startColorStr='" + start_color + "', endColorStr='" + end_color + "')");
				
				// Need this so that the hover color doesn't change when the normal color changes
				var start_color_hover = jQuery("#<?php echo $maxbutton_gradient_start_color_hover_key ?>").val() != "" ? jQuery("#<?php echo $maxbutton_gradient_start_color_hover_key ?>").val() : "<?php echo $maxbutton_gradient_start_color_hover_default ?>";
				var end_color_hover = jQuery("#<?php echo $maxbutton_gradient_end_color_hover_key ?>").val() != "" ? jQuery("#<?php echo $maxbutton_gradient_end_color_hover_key ?>").val() : "<?php echo $maxbutton_gradient_end_color_hover_default ?>";
				jQuery("#button-result-hover").css("background-color", start_color_hover);
				jQuery("#button-result-hover").css("background", "linear-gradient(" + start_color_hover + " <?php echo $maxbutton_gradient_stop_display ?>%, " + end_color_hover + ")");
				jQuery("#button-result-hover").css("background", "-moz-linear-gradient(" + start_color_hover + " <?php echo $maxbutton_gradient_stop_display ?>%, " + end_color_hover + ")");
				jQuery("#button-result-hover").css("background", "-o-linear-gradient(" + start_color_hover + " <?php echo $maxbutton_gradient_stop_display ?>%, " + end_color_hover + ")");
				jQuery("#button-result-hover").css("background", "-webkit-gradient(linear, left top, left bottom, color-stop(.<?php echo $maxbutton_gradient_stop_display ?>, " + start_color_hover + "), color-stop(1, " + end_color_hover + "))");
				jQuery("#button-result-hover").css("filter", "progid:DXImageTransform.Microsoft.gradient(startColorStr='" + start_color_hover + "', endColorStr='" + end_color_hover + "')");
				jQuery("#button-result-hover").css("-ms-filter", "progid:DXImageTransform.Microsoft.gradient(startColorStr='" + start_color_hover + "', endColorStr='" + end_color_hover + "')");
			}
		});
	}
	
	function showColorPickerForButtonGradientStartHoverColor() {
		jQuery('#<?php echo $maxbutton_gradient_start_color_hover_key ?>_box span').css('background-color', '<?php echo $maxbutton_gradient_start_color_hover_display ?>');
		jQuery('#<?php echo $maxbutton_gradient_start_color_hover_key ?>_box span').ColorPicker({
			'color': '<?php echo $maxbutton_gradient_start_color_hover_display ?>',
			'onShow': function(colpkr) { jQuery(colpkr).fadeIn(500); return false; },
			'onHide': function(colpkr) { jQuery(colpkr).fadeOut(500); return false; },
			'onChange': function(hsb, hex, rgb) {
				jQuery('#<?php echo $maxbutton_gradient_start_color_hover_key ?>').attr('value', '#' + hex);
				jQuery('#<?php echo $maxbutton_gradient_start_color_hover_key ?>_box span').css('background-color', '#' + hex);
				
				var start_color_hover = '#' + hex;
				var end_color_hover = jQuery("#<?php echo $maxbutton_gradient_end_color_hover_key ?>").val() != "" ? jQuery("#<?php echo $maxbutton_gradient_end_color_hover_key ?>").val() : "<?php echo $maxbutton_gradient_end_color_hover_default ?>";
				jQuery("#button-result-hover .button-output").css("background-color", start_color_hover);
				jQuery("#button-result-hover .button-output").css("background", "linear-gradient(" + start_color_hover + " <?php echo $maxbutton_gradient_stop_display ?>%, " + end_color_hover + ")");
				jQuery("#button-result-hover .button-output").css("background", "-moz-linear-gradient(" + start_color_hover + " <?php echo $maxbutton_gradient_stop_display ?>%, " + end_color_hover + ")");
				jQuery("#button-result-hover .button-output").css("background", "-o-linear-gradient(" + start_color_hover + " <?php echo $maxbutton_gradient_stop_display ?>%, " + end_color_hover + ")");
				jQuery("#button-result-hover .button-output").css("background", "-webkit-gradient(linear, left top, left bottom, color-stop(.<?php echo $maxbutton_gradient_stop_display ?>, " + start_color_hover + "), color-stop(1, " + end_color_hover + "))");
				jQuery("#button-result-hover .button-output").css("filter", "progid:DXImageTransform.Microsoft.gradient(startColorStr='" + start_color_hover + "', endColorStr='" + end_color_hover + "')");
				jQuery("#button-result-hover .button-output").css("-ms-filter", "progid:DXImageTransform.Microsoft.gradient(startColorStr='" + start_color_hover + "', endColorStr='" + end_color_hover + "')");
				
				// Need this so that the normal color doesn't change when the hover color changes
				var start_color = jQuery("#<?php echo $maxbutton_gradient_start_color_key ?>").val() != "" ? jQuery("#<?php echo $maxbutton_gradient_start_color_key ?>").val() : "<?php echo $maxbutton_gradient_start_color_default ?>";
				var end_color = jQuery("#<?php echo $maxbutton_gradient_end_color_key ?>").val() != "" ? jQuery("#<?php echo $maxbutton_gradient_end_color_key ?>").val() : "<?php echo $maxbutton_gradient_end_color_default ?>";
				jQuery("#button-result").css("background-color", start_color);
				jQuery("#button-result").css("background", "linear-gradient(" + start_color + " <?php echo $maxbutton_gradient_stop_display ?>%, " + end_color + ")");
				jQuery("#button-result").css("background", "-moz-linear-gradient(" + start_color + " <?php echo $maxbutton_gradient_stop_display ?>%, " + end_color + ")");
				jQuery("#button-result").css("background", "-o-linear-gradient(" + start_color + " <?php echo $maxbutton_gradient_stop_display ?>%, " + end_color + ")");
				jQuery("#button-result").css("background", "-webkit-gradient(linear, left top, left bottom, color-stop(.<?php echo $maxbutton_gradient_stop_display ?>, " + start_color + "), color-stop(1, " + end_color + "))");
				jQuery("#button-result").css("filter", "progid:DXImageTransform.Microsoft.gradient(startColorStr='" + start_color + "', endColorStr='" + end_color + "')");
				jQuery("#button-result").css("-ms-filter", "progid:DXImageTransform.Microsoft.gradient(startColorStr='" + start_color + "', endColorStr='" + end_color + "')");
			}
		});
	}
	
	function showColorPickerForButtonGradientEndColor() {
		jQuery('#<?php echo $maxbutton_gradient_end_color_key ?>_box span').css('background-color', '<?php echo $maxbutton_gradient_end_color_display ?>');
		jQuery('#<?php echo $maxbutton_gradient_end_color_key ?>_box span').ColorPicker({
			'color': '<?php echo $maxbutton_gradient_end_color_display ?>',
			'onShow': function(colpkr) { jQuery(colpkr).fadeIn(500); return false; },
			'onHide': function(colpkr) { jQuery(colpkr).fadeOut(500); return false; },
			'onChange': function(hsb, hex, rgb) {
				jQuery('#<?php echo $maxbutton_gradient_end_color_key ?>').attr('value', '#' + hex);
				jQuery('#<?php echo $maxbutton_gradient_end_color_key ?>_box span').css('background-color', '#' + hex);
				
				var start_color = jQuery("#<?php echo $maxbutton_gradient_start_color_key ?>").val() != "" ? jQuery("#<?php echo $maxbutton_gradient_start_color_key ?>").val() : "<?php echo $maxbutton_gradient_start_color_default ?>";
				var end_color = '#' + hex;
				jQuery("#button-result .button-output").css("background-color", start_color);
				jQuery("#button-result .button-output").css("background", "linear-gradient(" + start_color + " <?php echo $maxbutton_gradient_stop_display ?>%, " + end_color + ")");
				jQuery("#button-result .button-output").css("background", "-moz-linear-gradient(" + start_color + " <?php echo $maxbutton_gradient_stop_display ?>%, " + end_color + ")");
				jQuery("#button-result .button-output").css("background", "-o-linear-gradient(" + start_color + " <?php echo $maxbutton_gradient_stop_display ?>%, " + end_color + ")");
				jQuery("#button-result .button-output").css("background", "-webkit-gradient(linear, left top, left bottom, color-stop(.<?php echo $maxbutton_gradient_stop_display ?>, " + start_color + "), color-stop(1, " + end_color + "))");
				jQuery("#button-result .button-output").css("filter", "progid:DXImageTransform.Microsoft.gradient(startColorStr='" + start_color + "', endColorStr='" + end_color + "')");
				jQuery("#button-result .button-output").css("-ms-filter", "progid:DXImageTransform.Microsoft.gradient(startColorStr='" + start_color + "', endColorStr='" + end_color + "')");
				
				// Need this so that the hover color doesn't change when the normal color changes
				var start_color_hover = jQuery("#<?php echo $maxbutton_gradient_start_color_hover_key ?>").val() != "" ? jQuery("#<?php echo $maxbutton_gradient_start_color_hover_key ?>").val() : "<?php echo $maxbutton_gradient_start_color_hover_default ?>";
				var end_color_hover = jQuery("#<?php echo $maxbutton_gradient_end_color_hover_key ?>").val() != "" ? jQuery("#<?php echo $maxbutton_gradient_end_color_hover_key ?>").val() : "<?php echo $maxbutton_gradient_end_color_hover_default ?>";
				jQuery("#button-result-hover").css("background-color", start_color_hover);
				jQuery("#button-result-hover").css("background", "linear-gradient(" + start_color_hover + " <?php echo $maxbutton_gradient_stop_display ?>%, " + end_color_hover + ")");
				jQuery("#button-result-hover").css("background", "-moz-linear-gradient(" + start_color_hover + " <?php echo $maxbutton_gradient_stop_display ?>%, " + end_color_hover + ")");
				jQuery("#button-result-hover").css("background", "-o-linear-gradient(" + start_color_hover + " <?php echo $maxbutton_gradient_stop_display ?>%, " + end_color_hover + ")");
				jQuery("#button-result-hover").css("background", "-webkit-gradient(linear, left top, left bottom, color-stop(.<?php echo $maxbutton_gradient_stop_display ?>, " + start_color_hover + "), color-stop(1, " + end_color_hover + "))");
				jQuery("#button-result-hover").css("filter", "progid:DXImageTransform.Microsoft.gradient(startColorStr='" + start_color_hover + "', endColorStr='" + end_color_hover + "')");
				jQuery("#button-result-hover").css("-ms-filter", "progid:DXImageTransform.Microsoft.gradient(startColorStr='" + start_color_hover + "', endColorStr='" + end_color_hover + "')");
			}
		});
	}
	
	function showColorPickerForButtonGradientEndHoverColor() {
		jQuery('#<?php echo $maxbutton_gradient_end_color_hover_key ?>_box span').css('background-color', '<?php echo $maxbutton_gradient_end_color_hover_display ?>');
		jQuery('#<?php echo $maxbutton_gradient_end_color_hover_key ?>_box span').ColorPicker({
			'color': '<?php echo $maxbutton_gradient_end_color_hover_display ?>',
			'onShow': function(colpkr) { jQuery(colpkr).fadeIn(500); return false; },
			'onHide': function(colpkr) { jQuery(colpkr).fadeOut(500); return false; },
			'onChange': function(hsb, hex, rgb) {
				jQuery('#<?php echo $maxbutton_gradient_end_color_hover_key ?>').attr('value', '#' + hex);
				jQuery('#<?php echo $maxbutton_gradient_end_color_hover_key ?>_box span').css('background-color', '#' + hex);
				
				var start_color_hover = jQuery("#<?php echo $maxbutton_gradient_start_color_hover_key ?>").val() != "" ? jQuery("#<?php echo $maxbutton_gradient_start_color_hover_key ?>").val() : "<?php echo $maxbutton_gradient_start_color_hover_default ?>";
				var end_color_hover = '#' + hex;
				jQuery("#button-result-hover .button-output").css("background-color", start_color_hover);
				jQuery("#button-result-hover .button-output").css("background", "linear-gradient(" + start_color_hover + " <?php echo $maxbutton_gradient_stop_display ?>%, " + end_color_hover + ")");
				jQuery("#button-result-hover .button-output").css("background", "-moz-linear-gradient(" + start_color_hover + " <?php echo $maxbutton_gradient_stop_display ?>%, " + end_color_hover + ")");
				jQuery("#button-result-hover .button-output").css("background", "-o-linear-gradient(" + start_color_hover + " <?php echo $maxbutton_gradient_stop_display ?>%, " + end_color_hover + ")");
				jQuery("#button-result-hover .button-output").css("background", "-webkit-gradient(linear, left top, left bottom, color-stop(.<?php echo $maxbutton_gradient_stop_display ?>, " + start_color_hover + "), color-stop(1, " + end_color_hover + "))");
				jQuery("#button-result-hover .button-output").css("filter", "progid:DXImageTransform.Microsoft.gradient(startColorStr='" + start_color_hover + "', endColorStr='" + end_color_hover + "')");
				jQuery("#button-result-hover .button-output").css("-ms-filter", "progid:DXImageTransform.Microsoft.gradient(startColorStr='" + start_color_hover + "', endColorStr='" + end_color_hover + "')");
				
				// Need this so that the normal color doesn't change when the hover color changes
				var start_color = jQuery("#<?php echo $maxbutton_gradient_start_color_key ?>").val() != "" ? jQuery("#<?php echo $maxbutton_gradient_start_color_key ?>").val() : "<?php echo $maxbutton_gradient_start_color_default ?>";
				var end_color = jQuery("#<?php echo $maxbutton_gradient_end_color_key ?>").val() != "" ? jQuery("#<?php echo $maxbutton_gradient_end_color_key ?>").val() : "<?php echo $maxbutton_gradient_end_color_default ?>";
				jQuery("#button-result").css("background-color", start_color);
				jQuery("#button-result").css("background", "linear-gradient(" + start_color + " <?php echo $maxbutton_gradient_stop_display ?>%, " + end_color + ")");
				jQuery("#button-result").css("background", "-moz-linear-gradient(" + start_color + " <?php echo $maxbutton_gradient_stop_display ?>%, " + end_color + ")");
				jQuery("#button-result").css("background", "-o-linear-gradient(" + start_color + " <?php echo $maxbutton_gradient_stop_display ?>%, " + end_color + ")");
				jQuery("#button-result").css("background", "-webkit-gradient(linear, left top, left bottom, color-stop(.<?php echo $maxbutton_gradient_stop_display ?>, " + start_color + "), color-stop(1, " + end_color + "))");
				jQuery("#button-result").css("filter", "progid:DXImageTransform.Microsoft.gradient(startColorStr='" + start_color + "', endColorStr='" + end_color + "')");
				jQuery("#button-result").css("-ms-filter", "progid:DXImageTransform.Microsoft.gradient(startColorStr='" + start_color + "', endColorStr='" + end_color + "')");
			}
		});
	}
	
	function showColorPickerForButtonBorderColor() {
		jQuery('#<?php echo $maxbutton_border_color_key ?>_box span').css('background-color', '<?php echo $maxbutton_border_color_display ?>');
		jQuery('#<?php echo $maxbutton_border_color_key ?>_box span').ColorPicker({
			'color': '<?php echo $maxbutton_border_color_display ?>',
			'onShow': function(colpkr) { jQuery(colpkr).fadeIn(500); return false; },
			'onHide': function(colpkr) { jQuery(colpkr).fadeOut(500); return false; },
			'onChange': function(hsb, hex, rgb) {
				jQuery('#<?php echo $maxbutton_border_color_key ?>').attr('value', '#' + hex);
				jQuery('#<?php echo $maxbutton_border_color_key ?>_box span').css('background-color', '#' + hex);
				jQuery("#button-result .button-output").css("border-color", '#' + hex);
				
				// Need this so that the hover color doesn't change when the normal color changes
				var border_color_hover = jQuery("#<?php echo $maxbutton_border_color_hover_key ?>").val() != "" ? jQuery("#<?php echo $maxbutton_border_color_hover_key ?>").val() : "<?php echo $maxbutton_border_color_hover_default ?>";
				jQuery("#button-result-hover .button-output").css("border-color", border_color_hover);
			}
		});
	}
	
	function showColorPickerForButtonBorderHoverColor() {
		jQuery('#<?php echo $maxbutton_border_color_hover_key ?>_box span').css('background-color', '<?php echo $maxbutton_border_color_hover_display ?>');
		jQuery('#<?php echo $maxbutton_border_color_hover_key ?>_box span').ColorPicker({
			'color': '<?php echo $maxbutton_border_color_hover_display ?>',
			'onShow': function(colpkr) { jQuery(colpkr).fadeIn(500); return false; },
			'onHide': function(colpkr) { jQuery(colpkr).fadeOut(500); return false; },
			'onChange': function(hsb, hex, rgb) {
				jQuery('#<?php echo $maxbutton_border_color_hover_key ?>').attr('value', '#' + hex);
				jQuery('#<?php echo $maxbutton_border_color_hover_key ?>_box span').css('background-color', '#' + hex);
				jQuery("#button-result-hover .button-output").css("border-color", '#' + hex);
				
				// Need this so that the normal color doesn't change when the hover color changes
				var border_color = jQuery("#<?php echo $maxbutton_border_color_key ?>").val() != "" ? jQuery("#<?php echo $maxbutton_border_color_key ?>").val() : "<?php echo $maxbutton_border_color_default ?>";
				jQuery("#button-result .button-output").css("border-color", border_color);
			}
		});
	}
	
	function showColorPickerForButtonBoxShadowColor() {
		jQuery('#<?php echo $maxbutton_box_shadow_color_key ?>_box span').css('background-color', '<?php echo $maxbutton_box_shadow_color_display ?>');
		jQuery('#<?php echo $maxbutton_box_shadow_color_key ?>_box span').ColorPicker({
			'color': '<?php echo $maxbutton_box_shadow_color_display ?>',
			'onShow': function(colpkr) { jQuery(colpkr).fadeIn(500); return false; },
			'onHide': function(colpkr) { jQuery(colpkr).fadeOut(500); return false; },
			'onChange': function(hsb, hex, rgb) {
				jQuery('#<?php echo $maxbutton_box_shadow_color_key ?>').attr('value', '#' + hex);
				jQuery('#<?php echo $maxbutton_box_shadow_color_key ?>_box span').css('background-color', '#' + hex);
				jQuery("#button-result .button-output").css("box-shadow", "<?php echo $maxbutton_box_shadow_offset_left_default ?> <?php echo $maxbutton_box_shadow_offset_top_default ?> <?php echo $maxbutton_box_shadow_width_default ?> " + '#' + hex);
				
				// Need this so that the hover color doesn't change when the normal color changes
				var box_shadow_color_hover = jQuery("#<?php echo $maxbutton_box_shadow_color_hover_key ?>").val() != "" ? jQuery("#<?php echo $maxbutton_box_shadow_color_hover_key ?>").val() : "<?php echo $maxbutton_box_shadow_color_hover_default ?>";
				jQuery("#button-result-hover .button-output").css("box-shadow", "<?php echo $maxbutton_box_shadow_offset_left_default ?> <?php echo $maxbutton_box_shadow_offset_top_default ?> <?php echo $maxbutton_box_shadow_width_default ?> " + box_shadow_color_hover);
			}
		});
	}
	
	function showColorPickerForButtonBoxShadowHoverColor() {
		jQuery('#<?php echo $maxbutton_box_shadow_color_hover_key ?>_box span').css('background-color', '<?php echo $maxbutton_box_shadow_color_hover_display ?>');
		jQuery('#<?php echo $maxbutton_box_shadow_color_hover_key ?>_box span').ColorPicker({
			'color': '<?php echo $maxbutton_box_shadow_color_hover_display ?>',
			'onShow': function(colpkr) { jQuery(colpkr).fadeIn(500); return false; },
			'onHide': function(colpkr) { jQuery(colpkr).fadeOut(500); return false; },
			'onChange': function(hsb, hex, rgb) {
				jQuery('#<?php echo $maxbutton_box_shadow_color_hover_key ?>').attr('value', '#' + hex);
				jQuery('#<?php echo $maxbutton_box_shadow_color_hover_key ?>_box span').css('background-color', '#' + hex);
				jQuery("#button-result-hover .button-output").css("box-shadow", "<?php echo $maxbutton_box_shadow_offset_left_default ?> <?php echo $maxbutton_box_shadow_offset_top_default ?> <?php echo $maxbutton_box_shadow_width_default ?> " + '#' + hex);
				
				// Need this so that the normal color doesn't change when the hover color changes
				var box_shadow_color = jQuery("#<?php echo $maxbutton_box_shadow_color_key ?>").val() != "" ? jQuery("#<?php echo $maxbutton_box_shadow_color_key ?>").val() : "<?php echo $maxbutton_box_shadow_color_default ?>";
				jQuery("#button-result .button-output").css("box-shadow", "<?php echo $maxbutton_box_shadow_offset_left_default ?> <?php echo $maxbutton_box_shadow_offset_top_default ?> <?php echo $maxbutton_box_shadow_width_default ?> " + box_shadow_color);
			}
		});
	}
	
	function showColorPickerForOutputBackgroundColor() {
		jQuery('#button_output_box span').css('background-color', '#ffffff');
		jQuery('#button_output_box span').ColorPicker({
			'color': '#ffffff',
			'onShow': function(colpkr) { jQuery(colpkr).fadeIn(500); return false; },
			'onHide': function(colpkr) { jQuery(colpkr).fadeOut(500); return false; },
			'onChange': function(hsb, hex, rgb) {
				jQuery('#button_output').attr('value', '#' + hex);
				jQuery('#button_output_box span').css('background-color', '#' + hex);
				jQuery('#maxbuttons .output').css('background-color', '#' + hex);
			}
		});
	}
</script>

<div id="maxbuttons">
	<div class="wrap">
		<div class="icon32">
			<a href="http://maxbuttons.com" target="_blank"><img src="<?php echo MAXBUTTONS_PRO_PLUGIN_URL ?>/images/mb-32.png" alt="MaxButtons" /></a>
		</div>
		
		<h2 class="title">MaxButtons Pro: Add/Edit Button</h2>
		
		<div class="logo">
			Brought to you by
			<a href="http://maxfoundry.com" target="_blank"><img src="<?php echo MAXBUTTONS_PRO_PLUGIN_URL ?>/images/max-foundry.png" alt="Max Foundry" /></a>
		</div>
		
		<div class="clear"></div>

		<h2 class="tabs">
			<span class="spacer"></span>
			<a class="nav-tab nav-tab-active" href="">Button</a>
		</h2>
	
		<form id="new-button-form" method="post">
			<div class="form-actions">
				<a id="save-button" class="button-primary">Save</a>
				<a id="make-copy-button" class="button" href="<?php admin_url() ?>admin.php?page=maxbuttons-controller&action=copy&id=<?php echo $_GET['id'] ?>">Copy</a>
				<a id="delete-button" class="button" href="<?php admin_url() ?>admin.php?page=maxbuttons-controller&action=delete&id=<?php echo $_GET['id'] ?>">Delete</a>
			</div>
			
			<div class="message">
				To use this button, place the following shortcode anywhere in your site content:
				<strong>[maxbutton id="<?php echo $_GET['id'] ?>"]</strong>
			</div>
			
			<div class="option-container">
				<div class="title">Basics</div>
				<div class="inside">
					<div class="option">
						<div class="label">Name</div>
						<div class="note">Something that you can quickly identify the button with.</div>
						<div class="clear"></div>
						<div class="input">
							<input type="text" id="<?php echo $maxbutton_name_key ?>" name="<?php echo $maxbutton_name_key ?>" value="<?php echo $maxbutton_name_value ?>" maxlength="100" />
						</div>
					</div>
					
					<div class="option">
						<div class="label">Description</div>
						<div class="note">Brief explanation about how and where the button is used.</div>
						<div class="clear"></div>
						<div class="input">
							<textarea id="<?php echo $maxbutton_description_key ?>" name="<?php echo $maxbutton_description_key ?>" maxlength="500"><?php echo $maxbutton_description_value ?></textarea>
						</div>
					</div>
					
					<div class="option">
						<div class="label">URL</div>
						<div class="note">The link when the button is clicked.</div>
						<div class="clear"></div>
						<div class="input">
							<input type="text" id="<?php echo $maxbutton_url_key ?>" name="<?php echo $maxbutton_url_key ?>" value="<?php echo $maxbutton_url_value ?>" maxlength="250"/>
						</div>
					</div>
					
					<div class="option-design">
						<div class="label">Open in New Window</div>
						<div class="input">
							<input type="checkbox" id="<?php echo $maxbutton_new_window_key ?>" name="<?php echo $maxbutton_new_window_key ?>" <?php if ($maxbutton_new_window_value == 'on') { echo 'checked="checked"'; } else { echo ''; } ?>>
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
			
			<div class="option-container">
				<div class="title">Dimensions</div>
				<div class="inside">
					<div class="option-design">
						<div class="label">Button Width</div>
						<div class="input"><input class="tiny-nopad" type="text" id="<?php echo $maxbutton_width_key ?>" name="<?php echo $maxbutton_width_key ?>" value="<?php echo mbpro_strip_px($maxbutton_width_value) ?>" />px</div>
						<div class="clear"></div>
					</div>
					
					<div class="option-design">
						<div class="label">Button Height</div>
						<div class="input"><input class="tiny-nopad" type="text" id="<?php echo $maxbutton_height_key ?>" name="<?php echo $maxbutton_height_key ?>" value="<?php echo mbpro_strip_px($maxbutton_height_value) ?>" />px</div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
			
			<div class="option-container">
				<div class="title">Text</div>
				<div class="inside">
					<div class="option-design">
						<div class="input">
							<table class="text-line" border="0" cellpadding="0" cellspacing="0">
								<tr>
									<th>&nbsp;</th>
									<th>Words</th>
									<th>Font</th>
									<th>Size</th>
									<th>Style</th>
									<th>Weight</th>
									<th>Align</th>
									<th>Padding<br/>Top</th>
									<th>Padding<br/>Bottom</th>
									<th>Padding<br/>Left</th>
									<th>Padding<br/>Right</th>
								</tr>
								<tr>
									<td class="label">Line 1</td>
									<td>
										<input type="text" id="<?php echo $maxbutton_text_key ?>" name="<?php echo $maxbutton_text_key ?>" value="<?php echo $maxbutton_text_value ?>" maxlength="100" class="words" />
									</td>
									<td>
										<select id="<?php echo $maxbutton_text_font_family_key ?>" name="<?php echo $maxbutton_text_font_family_key ?>">
										<?php
										foreach ($mbpro_font_families as $name => $value) {
											$selected = ($maxbutton_text_font_family_value == $value) ? 'selected="selected"' : '';
											echo '<option value="' . $value . '" ' . $selected . '>' . $name . '</option>';
										}
										?>
										</select>
									</td>
									<td>
										<select id="<?php echo $maxbutton_text_font_size_key ?>" name="<?php echo $maxbutton_text_font_size_key ?>" class="small">
										<?php
										foreach ($mbpro_font_sizes as $name => $value) {
											$selected = ($maxbutton_text_font_size_value == $value) ? 'selected="selected"' : '';
											echo '<option value="' . $value . '" ' . $selected . '>' . $name . '</option>';
										}
										?>
										</select>
									</td>
									<td>
										<select id="<?php echo $maxbutton_text_font_style_key ?>" name="<?php echo $maxbutton_text_font_style_key ?>" class="medium">
										<?php
										foreach ($mbpro_font_styles as $name => $value) {
											$selected = ($maxbutton_text_font_style_value == $value) ? 'selected="selected"' : '';
											echo '<option value="' . $value . '" ' . $selected . '>' . $name . '</option>';
										}
										?>
										</select>
									</td>
									<td>
										<select id="<?php echo $maxbutton_text_font_weight_key ?>" name="<?php echo $maxbutton_text_font_weight_key ?>" class="medium">
										<?php
										foreach ($mbpro_font_weights as $name => $value) {
											$selected = ($maxbutton_text_font_weight_value == $value) ? 'selected="selected"' : '';
											echo '<option value="' . $value . '" ' . $selected . '>' . $name . '</option>';
										}
										?>
										</select>
									</td>
									<td>
										<select id="<?php echo $maxbutton_text_align_key ?>" name="<?php echo $maxbutton_text_align_key ?>" class="medium">
										<?php
										foreach ($mbpro_text_alignments as $name => $value) {
											$selected = ($maxbutton_text_align_value == $value) ? 'selected="selected"' : '';
											echo '<option value="' . $value . '" ' . $selected . '>' . $name . '</option>';
										}
										?>
										</select>
									</td>
									<td class="padding">
										<input class="tiny" type="text" id="<?php echo $maxbutton_text_padding_top_key ?>" name="<?php echo $maxbutton_text_padding_top_key ?>" value="<?php echo mbpro_strip_px($maxbutton_text_padding_top_value) ?>" />px
									</td>
									<td class="padding">
										<input class="tiny" type="text" id="<?php echo $maxbutton_text_padding_bottom_key ?>" name="<?php echo $maxbutton_text_padding_bottom_key ?>" value="<?php echo mbpro_strip_px($maxbutton_text_padding_bottom_value) ?>" />px
									</td>
									<td class="padding">
										<input class="tiny" type="text" id="<?php echo $maxbutton_text_padding_left_key ?>" name="<?php echo $maxbutton_text_padding_left_key ?>" value="<?php echo mbpro_strip_px($maxbutton_text_padding_left_value) ?>" />px
									</td>
									<td class="padding">
										<input class="tiny" type="text" id="<?php echo $maxbutton_text_padding_right_key ?>" name="<?php echo $maxbutton_text_padding_right_key ?>" value="<?php echo mbpro_strip_px($maxbutton_text_padding_right_value) ?>" />px
									</td>
								</tr>
								<tr>
									<td class="label">Line 2</td>
									<td>
										<input type="text" id="<?php echo $maxbutton_text2_key ?>" name="<?php echo $maxbutton_text2_key ?>" value="<?php echo $maxbutton_text2_value ?>" maxlength="100" class="words" />
									</td>
									<td>
										<select id="<?php echo $maxbutton_text2_font_family_key ?>" name="<?php echo $maxbutton_text2_font_family_key ?>">
										<?php
										foreach ($mbpro_font_families as $name => $value) {
											$selected = ($maxbutton_text2_font_family_value == $value) ? 'selected="selected"' : '';
											echo '<option value="' . $value . '" ' . $selected . '>' . $name . '</option>';
										}
										?>
										</select>
									</td>
									<td>
										<select id="<?php echo $maxbutton_text2_font_size_key ?>" name="<?php echo $maxbutton_text2_font_size_key ?>" class="small">
										<?php
										foreach ($mbpro_font_sizes as $name => $value) {
											$selected = ($maxbutton_text2_font_size_value == $value) ? 'selected="selected"' : '';
											echo '<option value="' . $value . '" ' . $selected . '>' . $name . '</option>';
										}
										?>
										</select>
									</td>
									<td>
										<select id="<?php echo $maxbutton_text2_font_style_key ?>" name="<?php echo $maxbutton_text2_font_style_key ?>" class="medium">
										<?php
										foreach ($mbpro_font_styles as $name => $value) {
											$selected = ($maxbutton_text2_font_style_value == $value) ? 'selected="selected"' : '';
											echo '<option value="' . $value . '" ' . $selected . '>' . $name . '</option>';
										}
										?>
										</select>
									</td>
									<td>
										<select id="<?php echo $maxbutton_text2_font_weight_key ?>" name="<?php echo $maxbutton_text2_font_weight_key ?>" class="medium">
										<?php
										foreach ($mbpro_font_weights as $name => $value) {
											$selected = ($maxbutton_text2_font_weight_value == $value) ? 'selected="selected"' : '';
											echo '<option value="' . $value . '" ' . $selected . '>' . $name . '</option>';
										}
										?>
										</select>
									</td>
									<td>
										<select id="<?php echo $maxbutton_text2_align_key ?>" name="<?php echo $maxbutton_text2_align_key ?>" class="medium">
										<?php
										foreach ($mbpro_text_alignments as $name => $value) {
											$selected = ($maxbutton_text2_align_value == $value) ? 'selected="selected"' : '';
											echo '<option value="' . $value . '" ' . $selected . '>' . $name . '</option>';
										}
										?>
										</select>
									</td>
									<td class="padding">
										<input class="tiny" type="text" id="<?php echo $maxbutton_text2_padding_top_key ?>" name="<?php echo $maxbutton_text2_padding_top_key ?>" value="<?php echo mbpro_strip_px($maxbutton_text2_padding_top_value) ?>" />px
									</td>
									<td class="padding">
										<input class="tiny" type="text" id="<?php echo $maxbutton_text2_padding_bottom_key ?>" name="<?php echo $maxbutton_text2_padding_bottom_key ?>" value="<?php echo mbpro_strip_px($maxbutton_text2_padding_bottom_value) ?>" />px
									</td>
									<td class="padding">
										<input class="tiny" type="text" id="<?php echo $maxbutton_text2_padding_left_key ?>" name="<?php echo $maxbutton_text2_padding_left_key ?>" value="<?php echo mbpro_strip_px($maxbutton_text2_padding_left_value) ?>" />px
									</td>
									<td class="padding">
										<input class="tiny" type="text" id="<?php echo $maxbutton_text2_padding_right_key ?>" name="<?php echo $maxbutton_text2_padding_right_key ?>" value="<?php echo mbpro_strip_px($maxbutton_text2_padding_right_value) ?>" />px
									</td>
								</tr>
							</table>
						</div>
						<div class="clear"></div>
					</div>
					
					<div class="option-design">
						<div class="label">Shadow Offset Left</div>
						<div class="input"><input class="tiny-nopad" type="text" id="<?php echo $maxbutton_text_shadow_offset_left_key ?>" name="<?php echo $maxbutton_text_shadow_offset_left_key ?>" value="<?php echo mbpro_strip_px($maxbutton_text_shadow_offset_left_value) ?>" />px</div>
						<div class="default">Default: <?php echo $maxbutton_text_shadow_offset_left_default ?></div>
						<div class="clear"></div>
					</div>
					
					<div class="option-design">
						<div class="label">Shadow Offset Top</div>
						<div class="input"><input class="tiny-nopad" type="text" id="<?php echo $maxbutton_text_shadow_offset_top_key ?>" name="<?php echo $maxbutton_text_shadow_offset_top_key ?>" value="<?php echo mbpro_strip_px($maxbutton_text_shadow_offset_top_value) ?>" />px</div>
						<div class="default">Default: <?php echo $maxbutton_text_shadow_offset_top_default ?></div>
						<div class="clear"></div>
					</div>
					
					<div class="option-design">
						<div class="label">Shadow Width</div>
						<div class="input"><input class="tiny-nopad" type="text" id="<?php echo $maxbutton_text_shadow_width_key ?>" name="<?php echo $maxbutton_text_shadow_width_key ?>" value="<?php echo mbpro_strip_px($maxbutton_text_shadow_width_value) ?>" />px</div>
						<div class="default">Default: <?php echo $maxbutton_text_shadow_width_default ?></div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
			
			<div class="option-container">
				<div class="title">Icon</div>
				<div class="inside">
					<div class="option-design">
						<div class="label">Image</div>
						<div class="input">
							<input type="text" id="<?php echo $maxbutton_icon_url_key ?>" name="<?php echo $maxbutton_icon_url_key ?>" value="<?php echo $maxbutton_icon_url_value ?>" />
							<input type="button" class="button" id="<?php echo $maxbutton_icon_url_key ?>_button" name="<?php echo $maxbutton_icon_url_key ?>_button" value="Select..." />
						</div>
						<div class="clear"></div>
					</div>
					
					<div class="option-design">
						<div class="label">Position</div>
						<div class="input">
							<select id="<?php echo $maxbutton_icon_position_key ?>" name="<?php echo $maxbutton_icon_position_key ?>">
							<?php
							foreach ($mbpro_icon_positions as $name => $value) {
								$selected = ($maxbutton_icon_position_value == $value) ? 'selected="selected"' : '';
								echo '<option value="' . $value . '" ' . $selected . '>' . $name . '</option>';
							}
							?>
							</select>
						</div>
						<div class="clear"></div>
					</div>
					
					<div class="option-design">
						<div class="label">Padding Top</div>
						<div class="input"><input class="tiny-nopad" type="text" id="<?php echo $maxbutton_icon_padding_top_key ?>" name="<?php echo $maxbutton_icon_padding_top_key ?>" value="<?php echo mbpro_strip_px($maxbutton_icon_padding_top_value) ?>" />px</div>
						<div class="default">Default: <?php echo $maxbutton_icon_padding_top_default ?></div>
						<div class="clear"></div>
					</div>
					
					<div class="option-design">
						<div class="label">Padding Bottom</div>
						<div class="input"><input class="tiny-nopad" type="text" id="<?php echo $maxbutton_icon_padding_bottom_key ?>" name="<?php echo $maxbutton_icon_padding_bottom_key ?>" value="<?php echo mbpro_strip_px($maxbutton_icon_padding_bottom_value) ?>" />px</div>
						<div class="default">Default: <?php echo $maxbutton_icon_padding_bottom_default ?></div>
						<div class="clear"></div>
					</div>
					
					<div class="option-design">
						<div class="label">Padding Left</div>
						<div class="input"><input class="tiny-nopad" type="text" id="<?php echo $maxbutton_icon_padding_left_key ?>" name="<?php echo $maxbutton_icon_padding_left_key ?>" value="<?php echo mbpro_strip_px($maxbutton_icon_padding_left_value) ?>" />px</div>
						<div class="default">Default: <?php echo $maxbutton_icon_padding_left_default ?></div>
						<div class="clear"></div>
					</div>
					
					<div class="option-design">
						<div class="label">Padding Right</div>
						<div class="input"><input class="tiny-nopad" type="text" id="<?php echo $maxbutton_icon_padding_right_key ?>" name="<?php echo $maxbutton_icon_padding_right_key ?>" value="<?php echo mbpro_strip_px($maxbutton_icon_padding_right_value) ?>" />px</div>
						<div class="default">Default: <?php echo $maxbutton_icon_padding_right_default ?></div>
						<div class="clear"></div>
					</div>
					
					<div class="option-design">
						<div class="label">Alt Text</div>
						<div class="input">
							<input type="text" id="<?php echo $maxbutton_icon_alt_key ?>" name="<?php echo $maxbutton_icon_alt_key ?>" value="<?php echo $maxbutton_icon_alt_value ?>" />
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
			
			<div class="option-container">
				<div class="title">Border</div>
				<div class="inside">
					<div class="option-design">
						<div class="label">Radius Top Left</div>
						<div class="input"><input class="tiny-nopad" type="text" id="<?php echo $maxbutton_border_radius_top_left_key ?>" name="<?php echo $maxbutton_border_radius_top_left_key ?>" value="<?php echo mbpro_strip_px($maxbutton_border_radius_top_left_value) ?>" />px</div>
						<div class="default">Default: <?php echo $maxbutton_border_radius_top_left_default ?></div>
						<div class="clear"></div>
					</div>
					
					<div class="option-design">
						<div class="label">Radius Top Right</div>
						<div class="input"><input class="tiny-nopad" type="text" id="<?php echo $maxbutton_border_radius_top_right_key ?>" name="<?php echo $maxbutton_border_radius_top_right_key ?>" value="<?php echo mbpro_strip_px($maxbutton_border_radius_top_right_value) ?>" />px</div>
						<div class="default">Default: <?php echo $maxbutton_border_radius_top_right_default ?></div>
						<div class="clear"></div>
					</div>
					
					<div class="option-design">
						<div class="label">Radius Bottom Left</div>
						<div class="input"><input class="tiny-nopad" type="text" id="<?php echo $maxbutton_border_radius_bottom_left_key ?>" name="<?php echo $maxbutton_border_radius_bottom_left_key ?>" value="<?php echo mbpro_strip_px($maxbutton_border_radius_bottom_left_value) ?>" />px</div>
						<div class="default">Default: <?php echo $maxbutton_border_radius_bottom_left_default ?></div>
						<div class="clear"></div>
					</div>
					
					<div class="option-design">
						<div class="label">Radius Bottom Right</div>
						<div class="input"><input class="tiny-nopad" type="text" id="<?php echo $maxbutton_border_radius_bottom_right_key ?>" name="<?php echo $maxbutton_border_radius_bottom_right_key ?>" value="<?php echo mbpro_strip_px($maxbutton_border_radius_bottom_right_value) ?>" />px</div>
						<div class="default">Default: <?php echo $maxbutton_border_radius_bottom_right_default ?></div>
						<div class="clear"></div>
					</div>
					
					<div class="option-design">
						<div class="label">Style</div>
						<div class="input">
							<select id="<?php echo $maxbutton_border_style_key ?>" name="<?php echo $maxbutton_border_style_key ?>">
							<?php
							foreach ($mbpro_border_styles as $name => $value) {
								$selected = ($maxbutton_border_style_value == $value) ? 'selected="selected"' : '';
								echo '<option value="' . $value . '" ' . $selected . '>' . $name . '</option>';
							}
							?>
							</select>
						</div>
						<div class="default">Default: <?php echo $maxbutton_border_style_default ?></div>
						<div class="clear"></div>
					</div>
					
					<div class="option-design">
						<div class="label">Width</div>
						<div class="input"><input class="tiny-nopad" type="text" id="<?php echo $maxbutton_border_width_key ?>" name="<?php echo $maxbutton_border_width_key ?>" value="<?php echo mbpro_strip_px($maxbutton_border_width_value) ?>" />px</div>
						<div class="default">Default: <?php echo $maxbutton_border_width_default ?></div>
						<div class="clear"></div>
					</div>
					
					<div class="option-design">
						<div class="label">Shadow Offset Left</div>
						<div class="input"><input class="tiny-nopad" type="text" id="<?php echo $maxbutton_box_shadow_offset_left_key ?>" name="<?php echo $maxbutton_box_shadow_offset_left_key ?>" value="<?php echo mbpro_strip_px($maxbutton_box_shadow_offset_left_value) ?>" />px</div>
						<div class="default">Default: <?php echo $maxbutton_box_shadow_offset_left_default ?></div>
						<div class="clear"></div>
					</div>
					
					<div class="option-design">
						<div class="label">Shadow Offset Top</div>
						<div class="input"><input class="tiny-nopad" type="text" id="<?php echo $maxbutton_box_shadow_offset_top_key ?>" name="<?php echo $maxbutton_box_shadow_offset_top_key ?>" value="<?php echo mbpro_strip_px($maxbutton_box_shadow_offset_top_value) ?>" />px</div>
						<div class="default">Default: <?php echo $maxbutton_box_shadow_offset_top_default ?></div>
						<div class="clear"></div>
					</div>
					
					<div class="option-design">
						<div class="label">Shadow Width</div>
						<div class="input"><input class="tiny-nopad" type="text" id="<?php echo $maxbutton_box_shadow_width_key ?>" name="<?php echo $maxbutton_box_shadow_width_key ?>" value="<?php echo mbpro_strip_px($maxbutton_box_shadow_width_value) ?>" />px</div>
						<div class="default">Default: <?php echo $maxbutton_box_shadow_width_default ?></div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
			
			<div class="option-container">
				<div class="title">Colors</div>
				<div class="inside">
					<div class="option-design">
						<div class="label">Gradient Stop</div>
						<div class="input"><input class="tiny-nopad" type="text" id="<?php echo $maxbutton_gradient_stop_key ?>" name="<?php echo $maxbutton_gradient_stop_key ?>" value="<?php echo $maxbutton_gradient_stop_value ?>" maxlength="2" /></div>
						<div class="default">Default: <?php echo $maxbutton_gradient_stop_default ?> (1 - 99 accepted)</div>
						<div class="clear"></div>
					</div>
					
					<div class="spacer"></div>
					
					<div class="option-design">
						<div class="input">
							<table class="color-line" border="0" cellpadding="0" cellspacing="0">
								<tr>
									<th>&nbsp;</th>
									<th>Text</th>
									<th>Text<br />Shadow</th>
									<th>Gradient<br />Start</th>
									<th>Gradient<br />End</th>
									<th>Border</th>
									<th>Border<br />Shadow</th>
								</tr>
								<tr>
									<td class="label">Normal</td>
									<td>
										<span class="colorpicker-box" id="<?php echo $maxbutton_text_color_key ?>_box">
											<span></span>
										</span>
										<input style="display: none;" type="text" id="<?php echo $maxbutton_text_color_key ?>" name="<?php echo $maxbutton_text_color_key ?>" value="<?php echo $maxbutton_text_color_value ?>" />
										<div class="clear"></div>
									</td>
									<td>
										<span class="colorpicker-box" id="<?php echo $maxbutton_text_shadow_color_key ?>_box">
											<span></span>
										</span>
										<input style="display: none;" type="text" id="<?php echo $maxbutton_text_shadow_color_key ?>" name="<?php echo $maxbutton_text_shadow_color_key ?>" value="<?php echo $maxbutton_text_shadow_color_value ?>" />
										<div class="clear"></div>
									</td>
									<td>
										<span class="colorpicker-box" id="<?php echo $maxbutton_gradient_start_color_key ?>_box">
											<span></span>
										</span>
										<input style="display: none;" type="text" id="<?php echo $maxbutton_gradient_start_color_key ?>" name="<?php echo $maxbutton_gradient_start_color_key ?>" value="<?php echo $maxbutton_gradient_start_color_value ?>" />
										<div class="clear"></div>
									</td>
									<td>
										<span class="colorpicker-box" id="<?php echo $maxbutton_gradient_end_color_key ?>_box">
											<span></span>
										</span>
										<input style="display: none;" type="text" id="<?php echo $maxbutton_gradient_end_color_key ?>" name="<?php echo $maxbutton_gradient_end_color_key ?>" value="<?php echo $maxbutton_gradient_end_color_value ?>" />
										<div class="clear"></div>
									</td>
									<td>
										<span class="colorpicker-box" id="<?php echo $maxbutton_border_color_key ?>_box">
											<span></span>
										</span>
										<input style="display: none;" type="text" id="<?php echo $maxbutton_border_color_key ?>" name="<?php echo $maxbutton_border_color_key ?>" value="<?php echo $maxbutton_border_color_value ?>" />
										<div class="clear"></div>
									</td>
									<td>
										<span class="colorpicker-box" id="<?php echo $maxbutton_box_shadow_color_key ?>_box">
											<span></span>
										</span>
										<input style="display: none;" type="text" id="<?php echo $maxbutton_box_shadow_color_key ?>" name="<?php echo $maxbutton_box_shadow_color_key ?>" value="<?php echo $maxbutton_box_shadow_color_value ?>" />
										<div class="clear"></div>
									</td>
								</tr>
								<tr>
									<td class="label">Hover</td>
									<td>
										<span class="colorpicker-box" id="<?php echo $maxbutton_text_color_hover_key ?>_box">
											<span></span>
										</span>
										<input style="display: none;" type="text" id="<?php echo $maxbutton_text_color_hover_key ?>" name="<?php echo $maxbutton_text_color_hover_key ?>" value="<?php echo $maxbutton_text_color_hover_value ?>" />
										<div class="clear"></div>
									</td>
									<td>
										<span class="colorpicker-box" id="<?php echo $maxbutton_text_shadow_color_hover_key ?>_box">
											<span></span>
										</span>
										<input style="display: none;" type="text" id="<?php echo $maxbutton_text_shadow_color_hover_key ?>" name="<?php echo $maxbutton_text_shadow_color_hover_key ?>" value="<?php echo $maxbutton_text_shadow_color_hover_value ?>" />
										<div class="clear"></div>
									</td>
									<td>
										<span class="colorpicker-box" id="<?php echo $maxbutton_gradient_start_color_hover_key ?>_box">
											<span></span>
										</span>
										<input style="display: none;" type="text" id="<?php echo $maxbutton_gradient_start_color_hover_key ?>" name="<?php echo $maxbutton_gradient_start_color_hover_key ?>" value="<?php echo $maxbutton_gradient_start_color_hover_value ?>" />
										<div class="clear"></div>
									</td>
									<td>
										<span class="colorpicker-box" id="<?php echo $maxbutton_gradient_end_color_hover_key ?>_box">
											<span></span>
										</span>
										<input style="display: none;" type="text" id="<?php echo $maxbutton_gradient_end_color_hover_key ?>" name="<?php echo $maxbutton_gradient_end_color_hover_key ?>" value="<?php echo $maxbutton_gradient_end_color_hover_value ?>" />
										<div class="clear"></div>
									</td>
									<td>
										<span class="colorpicker-box" id="<?php echo $maxbutton_border_color_hover_key ?>_box">
											<span></span>
										</span>
										<input style="display: none;" type="text" id="<?php echo $maxbutton_border_color_hover_key ?>" name="<?php echo $maxbutton_border_color_hover_key ?>" value="<?php echo $maxbutton_border_color_hover_value ?>" />
										<div class="clear"></div>
									</td>
									<td>
										<span class="colorpicker-box" id="<?php echo $maxbutton_box_shadow_color_hover_key ?>_box">
											<span></span>
										</span>
										<input style="display: none;" type="text" id="<?php echo $maxbutton_box_shadow_color_hover_key ?>" name="<?php echo $maxbutton_box_shadow_color_hover_key ?>" value="<?php echo $maxbutton_box_shadow_color_hover_value ?>" />
										<div class="clear"></div>
									</td>
								</tr>
							</table>
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
			
			<div class="option-container">
				<div class="title">Container</div>
				<div class="inside">					
					<div class="option-design">
						<div class="label">Use Container</div>
						<div class="input">
							<input type="checkbox" id="<?php echo $maxbutton_container_enabled_key ?>" name="<?php echo $maxbutton_container_enabled_key ?>" <?php if ($maxbutton_container_enabled_value == 'on') { echo 'checked="checked"'; } else { echo ''; } ?>>
						</div>
						<div class="clear"></div>
					</div>
					
					<div class="option-design">
						<div class="label">Width</div>
						<div class="input"><input class="tiny-nopad" type="text" id="<?php echo $maxbutton_container_width_key ?>" name="<?php echo $maxbutton_container_width_key ?>" value="<?php echo mbpro_strip_px($maxbutton_container_width_value) ?>" />px</div>
						<div class="clear"></div>
					</div>
					
					<div class="option-design">
						<div class="label">Margin Top</div>
						<div class="input"><input class="tiny-nopad" type="text" id="<?php echo $maxbutton_container_margin_top_key ?>" name="<?php echo $maxbutton_container_margin_top_key ?>" value="<?php echo mbpro_strip_px($maxbutton_container_margin_top_value) ?>" />px</div>
						<div class="clear"></div>
					</div>
					
					<div class="option-design">
						<div class="label">Margin Right</div>
						<div class="input"><input class="tiny-nopad" type="text" id="<?php echo $maxbutton_container_margin_right_key ?>" name="<?php echo $maxbutton_container_margin_right_key ?>" value="<?php echo mbpro_strip_px($maxbutton_container_margin_right_value) ?>" />px</div>
						<div class="clear"></div>
					</div>
					
					<div class="option-design">
						<div class="label">Margin Bottom</div>
						<div class="input"><input class="tiny-nopad" type="text" id="<?php echo $maxbutton_container_margin_bottom_key ?>" name="<?php echo $maxbutton_container_margin_bottom_key ?>" value="<?php echo mbpro_strip_px($maxbutton_container_margin_bottom_value) ?>" />px</div>
						<div class="clear"></div>
					</div>

					<div class="option-design">
						<div class="label">Margin Left</div>
						<div class="input"><input class="tiny-nopad" type="text" id="<?php echo $maxbutton_container_margin_left_key ?>" name="<?php echo $maxbutton_container_margin_left_key ?>" value="<?php echo mbpro_strip_px($maxbutton_container_margin_left_value) ?>" />px</div>
						<div class="clear"></div>
					</div>
					
					<div class="option-design">
						<div class="label">Alignment</div>
						<div class="input">
							<select id="<?php echo $maxbutton_container_alignment_key ?>" name="<?php echo $maxbutton_container_alignment_key ?>">
							<?php
							foreach ($mbpro_container_alignments as $name => $value) {
								$selected = ($maxbutton_container_alignment_value == $value) ? 'selected="selected"' : '';
								echo '<option value="' . $value . '" ' . $selected . '>' . $name . '</option>';
							}
							?>
							</select>
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</form>
	
		<div class="output">
			<div class="header">Button Output</div>
			<div class="inner">
				The top is the normal button, the bottom one is the hover.
				<div class="result">
					<a href="<?php echo $maxbutton_url_value ?>" id="button-result">
						<div class="button-output">
							<?php if (($maxbutton_icon_url_value != '') && ($maxbutton_icon_position_display == 'left')) { ?>
								<div class="icon left"><img src="<?php echo $maxbutton_icon_url_value ?>" /></div>
							<?php } ?>

							<?php if (($maxbutton_icon_url_value != '') && ($maxbutton_icon_position_display == 'right')) { ?>
								<div class="icon right"><img src="<?php echo $maxbutton_icon_url_value ?>" /></div>
							<?php } ?>
							
							<?php if (($maxbutton_icon_url_value != '') && ($maxbutton_icon_position_display == 'top')) { ?>
								<div class="icon top"><img src="<?php echo $maxbutton_icon_url_value ?>" /></div>
							<?php } ?>
							
							<div class="text"><?php echo $maxbutton_text_value ?></div>
							<div class="text2"><?php echo $maxbutton_text2_value ?></div>
							
							<?php if (($maxbutton_icon_url_value != '') && ($maxbutton_icon_position_display == 'bottom')) { ?>
								<div class="icon bottom"><img src="<?php echo $maxbutton_icon_url_value ?>" /></div>
							<?php } ?>
							
							<div style="clear: both;"></div>
						</div>
					</a>

					<p>&nbsp;</p>

					<a href="<?php echo $maxbutton_url_value ?>" class="hover" id="button-result-hover">
						<div class="button-output">
							<?php if (($maxbutton_icon_url_value != '') && ($maxbutton_icon_position_display == 'left')) { ?>
								<div class="icon left"><img src="<?php echo $maxbutton_icon_url_value ?>" border="0" /></div>
							<?php } ?>

							<?php if (($maxbutton_icon_url_value != '') && ($maxbutton_icon_position_display == 'right')) { ?>
								<div class="icon right"><img src="<?php echo $maxbutton_icon_url_value ?>" border="0" /></div>
							<?php } ?>
							
							<?php if (($maxbutton_icon_url_value != '') && ($maxbutton_icon_position_display == 'top')) { ?>
								<div class="icon top"><img src="<?php echo $maxbutton_icon_url_value ?>" border="0" /></div>
							<?php } ?>
							
							<div class="text"><?php echo $maxbutton_text_value ?></div>
							<div class="text2"><?php echo $maxbutton_text2_value ?></div>
							
							<?php if (($maxbutton_icon_url_value != '') && ($maxbutton_icon_position_display == 'bottom')) { ?>
								<div class="icon bottom"><img src="<?php echo $maxbutton_icon_url_value ?>" border="0" /></div>
							<?php } ?>
							
							<div style="clear: both;"></div>
						</div>
					</a>
				</div>
				<span class="colorpicker-box" id="button_output_box">
					<span></span>
				</span>
				<input style="display: none;" type="text" id="button_output" name="button_output" value="" />
				<div class="note">Change this color to see your button on a different background.</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
</div>
