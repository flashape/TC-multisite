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
	'title' => 'Product Details',
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
	'mode' => WPALCHEMY_MODE_EXTRACT,
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




$order_details_metabox = new WPAlchemy_MetaBox(array
(
	'id' => 'order_details',
	'title' => 'Order Info',
	'types' => array('tc_order'),
	'mode' => WPALCHEMY_MODE_ARRAY,
	'prefix' => '_tc_order_details_',
	'hide_editor' => true,
	'head_action'=>'onOrderDetailsMetaboxHeadAction',
	'foot_action'=>'onOrderDetailsMetaboxFooterAction',
	'template' => TASTY_CMS_PLUGIN_METABOX_DIR . 'OrderDetailsMetabox.php',
));




$service_default_details_metabox = new WPAlchemy_MetaBox(array
(
	'id' => 'service_details',
	'title' => 'Default Details',
	'types' => array('tc_service'),
	'mode' => WPALCHEMY_MODE_ARRAY,
	'prefix' => '_tc_service_details_',	
	'context' => 'side',
	'template' => TASTY_CMS_PLUGIN_METABOX_DIR . 'ServiceDefaultDetailsMetabox.php',

));




function onOrderDetailsMetaboxHeadAction(){
	
	remove_meta_box( 'tagsdiv-tc_order_type', 'tc_order', 'side' );      
	remove_meta_box( 'tc_event_typediv', 'tc_order', 'side' );      
	
	wp_enqueue_script( 'caret', TC_SHARED_JS_URL. 'jquery.caret.1.02.js');
	//wp_enqueue_script( 'caret', TC_JS_DIR. 'jquery.caret.1.02.js');
	//wp_enqueue_script('jquery-forcepriceonly', TC_JS_DIR.'tc/jquery.forcepriceonly.js', array('caret'));
	wp_enqueue_script('jquery-forcepriceonly', TC_SHARED_JS_URL.'jquery.forcepriceonly.js', array('caret'));
	// wp_enqueue_script('jquery-ba-outside-events', TC_SHARED_JS_URL.'jquery.ba-outside-events.js');
	
	wp_enqueue_script('tc-utils', TC_SHARED_JS_URL.'utils.js');
	
	wp_enqueue_script( 'signals', TC_SHARED_JS_URL . 'signals.js');
	wp_enqueue_script( 'js-class', TC_SHARED_JS_URL . 'jsclassextend/js.class.js');
	wp_enqueue_script( 'js-error', TC_SHARED_JS_URL . 'jsclassextend/js.error.js');
	wp_enqueue_script( 'js-eventdispatcher', TC_SHARED_JS_URL . 'jsclassextend/js.error.js');
	wp_enqueue_script( 'js-interface', TC_SHARED_JS_URL . 'jsclassextend/js.interface.js');
	wp_enqueue_script( 'js-utils', TC_SHARED_JS_URL . 'jsclassextend/js.utils.js');
	
	
	//wp_enqueue_script('tc-signal-context', TC_SHARED_JS_URL.'SignalContext.js');
	wp_enqueue_script('tc-orders-ajax-service', TC_SHARED_JS_URL.'orders/service/OrdersAjaxService.js');
	wp_enqueue_script('tc-customer-info-view-mediator', TC_SHARED_JS_URL.'orders/view/mediators/CustomerInfoViewMediator.js');
	wp_enqueue_script('tc-order-items-view-mediator', TC_SHARED_JS_URL.'orders/view/mediators/OrderItemsViewMediator.js');
	wp_enqueue_script('tc-product-manager', TC_SHARED_JS_URL.'orders/controller/TC_ProductManager.js');
	
	
	//wp_enqueue_script('tc-crm-move-order-metaboxes', TC_SHARED_JS_URL . 'admin_orders.js' );
	wp_enqueue_script('jquery-ui-widget');
	wp_enqueue_script('jquery-ui-autocomplete');
	wp_enqueue_script( 'jquery-ui-tabs' );
	wp_enqueue_script('jquery-ui-datepicker', TC_SHARED_JS_URL . 'jquery.ui.datepicker.min.js', array('jquery', 'jquery-ui-core') );
	
	//wp_enqueue_script('jquery-ui-accordion', TC_SHARED_JS_URL . 'jquery.ui.accordion.min.js', array('jquery', 'jquery-ui-core', 'jquery-ui-widget') );	
	
}



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