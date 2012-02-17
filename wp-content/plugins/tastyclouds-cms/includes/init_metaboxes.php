<?php
// include the class in your theme or plugin
//include_once 'wpalchemy/MetaBox.php';
include_once TC_SHARED_DIR.'wpalchemy/MetaBox.php';






$variation_options_metabox = new WPAlchemy_MetaBox(array
(
	'id' => 'variation_options',
	'title' => 'Variation Options',
	'types' => array('tc_product_variation'),
	'mode' => WPALCHEMY_MODE_ARRAY,
	'prefix' => '_tc_variation_options_',
	'hide_title' => true,
	'foot_action' => 'onVariantOptionsMetaboxFooterAction',
	'template' => TASTY_CMS_PLUGIN_METABOX_DIR . 'VariantOptionsMetabox.php',

));

$variation_items_metabox = new WPAlchemy_MetaBox(array
(
	'id' => 'variation_items',
	'title' => 'Variation Items',
	'types' => array('tc_product_variation'),
	'mode' => WPALCHEMY_MODE_ARRAY,
	'prefix' => '_tc_variation_items_',
	'hide_title' => false,
	'foot_action' => 'onVariationItemsMetaboxFooterAction',
	'template' => TASTY_CMS_PLUGIN_METABOX_DIR . 'VariationItemsMetabox.php',

));

// function onVariantOptionsMetaboxInitAction() {
// 	add_filter( 'post_updated_messages', 'variant_options_messages_filter' );
// 	
// }

function variant_options_messages_filter($messages){
	$messages['tc_product_variation'][6] =  __('Variation saved successfully.');
	return $messages;
}


?>