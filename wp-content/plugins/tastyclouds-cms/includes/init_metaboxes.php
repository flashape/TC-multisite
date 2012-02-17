<?php
// include the class in your theme or plugin
//include_once 'wpalchemy/MetaBox.php';
include_once TC_SHARED_DIR.'wpalchemy/MetaBox.php';






$product_options_metabox = new WPAlchemy_MetaBox(array
(
	'id' => 'product_options',
	'title' => 'Variation Options',
	'types' => array('tc_product_variation'),
	'mode' => WPALCHEMY_MODE_ARRAY,
	'prefix' => '_tc_product_options_',
	'hide_title' => true,
	'init_action' => 'onProductOptionsMetaboxInitAction',
	'foot_action' => 'onProductOptionsMetaboxFooterAction',
	'template' => TASTY_CMS_PLUGIN_METABOX_DIR . 'ProductOptionsMetabox.php',

));

function onProductOptionsMetaboxInitAction() {
	add_filter( 'post_updated_messages', 'product_options_messages_filter' );
	
}

function product_options_messages_filter($messages){
	$messages['tc_product_variation'][6] =  __('Variation saved successfully.');
	return $messages;
}


?>