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
	'head_action' => 'onVariationItemsMetaboxHeadAction',
	'foot_action' => 'onVariationItemsMetaboxFooterAction',
	'template' => TASTY_CMS_PLUGIN_METABOX_DIR . 'VariationItemsMetabox.php',

));

$product_variation_rules_metabox = new WPAlchemy_MetaBox(array
(
	'id' => 'variation_rules',
	'title' => 'Variation Rules',
	'types' => array('tc_products'),
	'mode' => WPALCHEMY_MODE_ARRAY,
	'prefix' => '_tc_variation_rules_',
	'hide_title' => false,
	'head_action' => 'onProductVariationRulesMetaboxHeadAction',
	'foot_action' => 'onProductVariationRulesMetaboxFooterAction',
	'template' => TASTY_CMS_PLUGIN_METABOX_DIR . 'ProductVariationRulesMetabox.php',

));


$product_sku_metabox = new WPAlchemy_MetaBox(array
(
	'id' => 'product_details',
	'title' => 'Product SKU And Details',
	'types' => array('tc_products'),
	'mode' => WPALCHEMY_MODE_EXTRACT,
	'prefix' => '_tc_product_details_',
	'hide_title' => false,
	'context' => 'side',
	// 'head_action' => 'onProductDetailsMetaboxHeadAction',
	// 'foot_action' => 'onProductDetailsMetaboxFooterAction',
	'template' => TASTY_CMS_PLUGIN_METABOX_DIR . 'ProductDetailsMetabox.php',

));


$coupon_details_metabox = new WPAlchemy_MetaBox(array
(
	'id' => 'coupon_details',
	'title' => 'Coupon Details',
	'types' => array('tc_coupon'),
	'mode' => WPALCHEMY_MODE_ARRAY,
	'prefix' => '_tc_coupon_',	
	'template' => TASTY_CMS_PLUGIN_METABOX_DIR . 'CouponDetailsMetabox.php',

));

$coupon_save_metabox = new WPAlchemy_MetaBox(array
(
	'id' => 'coupon_save',
	'title' => 'Save',
	'types' => array('tc_coupon'),
	'mode' => WPALCHEMY_MODE_EXTRACT,
	'prefix' => '_tc_coupon_',
	'template' => TASTY_CMS_PLUGIN_METABOX_DIR . 'CouponSaveMetabox.php',
	'foot_action'=>'onCouponSaveMetaboxFooterAction',
	'head_action'=>'onCouponSaveMetaboxHeadAction',
	'init_action'=>'onCouponSaveMetaboxInitAction'
));


$shipping_box_size_metabox = new WPAlchemy_MetaBox(array
(
	'id' => 'shipping_box_size',
	'title' => 'Shipping Box Size',
	'types' => array('tc_order'),
	'mode' => WPALCHEMY_MODE_ARRAY,
	'prefix' => '_tc_ship_box_size_',
	'context' => 'side',
	'save_filter' => 'onShippingBoxSizeSaveFilter', // defaults to NULL
	'template' => TASTY_CMS_PLUGIN_METABOX_DIR . 'ShippingBoxSizeMetabox.php',
));











function onProductVariationRulesMetaboxHeadAction(){
	wp_enqueue_script( 'caret', TC_SHARED_JS_URL. 'jquery.caret.1.02.js');
	//wp_enqueue_script( 'caret', TC_JS_DIR. 'jquery.caret.1.02.js');
	//wp_enqueue_script('jquery-forcepriceonly', TC_JS_DIR.'tc/jquery.forcepriceonly.js', array('caret'));
	wp_enqueue_script('jquery-forcepriceonly', TC_SHARED_JS_URL.'jquery.forcepriceonly.js', array('caret'));	
}


function onCouponSaveMetaboxHeadAction(){
	wp_enqueue_script('jquery-ui-datepicker', TC_SHARED_JS_URL . 'jquery.ui.datepicker.min.js', array('jquery', 'jquery-ui-core') );
}

function onVariationItemsMetaboxHeadAction(){
	wp_enqueue_script( 'jquery-ui-button' );
}

function onCouponSaveMetaboxInitAction(){
	add_action( 'admin_enqueue_scripts', 'tc_disable_autosave_for_coupons' );
}     




function tc_disable_autosave_for_coupons(){
	global $post_type, $current_screen; 
	if($post_type == 'tc_coupon' ) {
		wp_deregister_script( 'autosave' );
	}
}






// function onVariantOptionsMetaboxInitAction() {
// 	add_filter( 'post_updated_messages', 'variant_options_messages_filter' );
// 	
// }

function variant_options_messages_filter($messages){
	$messages['tc_product_variation'][6] =  __('Variation saved successfully.');
	return $messages;
}


?>