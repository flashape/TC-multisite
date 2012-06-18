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
	//'save_filter' => 'onShippingBoxSizeSaveFilter', // defaults to NULL
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
	'autosave' => FALSE,
	'init_action'=>'onOrderDetailsMetaboxInitAction',
	'head_action'=>'onOrderDetailsMetaboxHeadAction',
	'foot_action'=>'onOrderDetailsMetaboxFooterAction',
	'save_action'=>'onOrderDetailsMetaboxSaveAction',
	'template' => TASTY_CMS_PLUGIN_METABOX_DIR . 'OrderDetailsMetabox.php',
));


function onOrderDetailsMetaboxSaveAction($meta, $post_id){
	$saveOrderCommand = new SaveOrderCommand($post_id);
	$saveOrderCommand->execute();
	
}


function onOrderDetailsMetaboxInitAction() {
	add_filter( 'post_updated_messages', 'tc_order_messages_filter' );
}

function tc_order_messages_filter($messages){
	$messages['tc_order'][6] =  __('New order saved successfully.');
	return $messages;
}





$order_status_metabox = new WPAlchemy_MetaBox(array
(
	'id' => 'order_status',
	'title' => 'Order Status',
	'types' => array('tc_order'),
	'mode' => WPALCHEMY_MODE_EXTRACT,
	'prefix' => '_tc_order_status_',
	'hide_editor' => true,
	// 'head_action'=>'onOrderStatusMetaboxHeadAction',
	// 'foot_action'=>'onOrderStatusMetaboxFooterAction',
	'template' => TASTY_CMS_PLUGIN_METABOX_DIR . 'OrderStatusMetabox.php',
));



$enter_payment_metabox = new WPAlchemy_MetaBox(array
(
	'id' => 'enter_payment',
	'title' => 'Enter Payment',
	'types' => array('tc_order'),
	'mode' => WPALCHEMY_MODE_ARRAY,
	'prefix' => '_tc_enter_payment_',
	'output_filter'=>'enterPaymentMetaboxOutputFilter',
	// 'head_action'=>'onOrderStatusMetaboxHeadAction',
	// 'foot_action'=>'onOrderStatusMetaboxFooterAction',
	'template' => TASTY_CMS_PLUGIN_METABOX_DIR . 'PaymentMetabox.php',
));

function enterPaymentMetaboxOutputFilter($post_id){
	// global $pagenow;
	// // $isEditPost = $pagenow == 'post.php';
	// // return $isEditPost;
	// 
	// return $pagenow != 'post-new.php';
	return !(OrderProxy::isWebsiteOrder($post_id));
}




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


$activity_metabox = new WPAlchemy_MetaBox(array
(
	'id' => '_activity_metabox',
	'title' => 'Activities',
	'types' => array('tc_contact', 'tc_project'),
	'mode' => WPALCHEMY_MODE_EXTRACT,
	'prefix' => '_tc_activity_',
	'foot_action' => 'onActivityMetaboxFooterAction',
	'output_filter' => 'activityMetaboxOutputFilter',
	'template' => TASTY_CMS_PLUGIN_METABOX_DIR . 'ActivityMetabox.php',
	
));
add_action( 'add_meta_boxes_tc_contact', 'onActivityMetaboxInit' );
add_action( 'add_meta_boxes_tc_project', 'onActivityMetaboxInit' );
add_action( 'add_meta_boxes_tc_project', 'add_metaboxes_tc_project' );

function add_metaboxes_tc_project(){
	global $pagenow;
	
	if ( $pagenow != "post.php"){
		add_action('admin_footer', 'tc_project_admin_footer');
	}
}
function tc_project_admin_footer(){
	global $pagenow;
	
	if ( $pagenow != "post.php"){
	?>
	<script>
		jQuery(document).ready(function($){
			if (adminpage != 'post-php'){
				$('#titlewrap').append('<span class="description">Enter title of project and save to enable Activities.</span>');
			}
		});
	</script>
	<?php	
	}
}




function onActivityMetaboxInit(){
	//remove_meta_box( 'submitdiv', 'tc_crm_coupon', 'normal' );     
	error_log('onActivityMetaboxInit'); 
	remove_meta_box( 'commentsdiv', 'tc_contact', 'normal' );      
	remove_meta_box( 'commentstatusdiv', 'tc_contact', 'normal' );      	
	remove_meta_box( 'commentsdiv', 'tc_project', 'normal' );      
	remove_meta_box( 'commentstatusdiv', 'tc_project', 'normal' );      
	add_action( 'admin_enqueue_scripts', 'tc_enqueue_contact_scripts' );
}

function activityMetaboxOutputFilter(){
	global $pagenow;
	
	$isEditPost = $pagenow == 'post.php';
	
	return $isEditPost;
}


function tc_enqueue_contact_scripts(){
	error_log('tc_enqueue_contact_scripts');
	wp_enqueue_script( 'jquery-ui-core' );
	wp_enqueue_script( 'jquery-ui-button' );
	
	wp_enqueue_script('tc-activities-js', TC_SHARED_JS_URL . 'activities.js' );
	wp_enqueue_script('jquery-calendrical-js', TC_SHARED_JS_URL . 'jquery.calendrical.js' );
	wp_enqueue_script('jquery-tablesorter-js', TC_SHARED_JS_URL . 'jquery.tablesorter.min.js', array('jquery') );
	wp_enqueue_script('jquery-ui-datepicker', TC_SHARED_JS_URL . 'jquery.ui.datepicker.min.js', array('jquery', 'jquery-ui-core') );
	wp_enqueue_script( 'caret', TC_SHARED_JS_URL. 'jquery.caret.1.02.js');
	wp_enqueue_script('jquery-forcepriceonly', TC_SHARED_JS_URL.'jquery.forcepriceonly.js', array('caret'));
	
	wp_enqueue_script('timeago', TC_SHARED_JS_URL . 'jquery.timeago.js' );
	wp_enqueue_style('calendrical', TC_SHARED_CSS_URL .'calendrical.css');
	
	wp_enqueue_script( 'jquery-ui-tabs' );
	wp_enqueue_style('jquery.tablesorter.blue', TC_SHARED_CSS_URL .'tablesorter/style.css');
	


	
}





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


// function foobar_updated_messages($messages ) {
//     global $post, $post_ID;
// 
//     $name = $this->get_foobar_name();
// 
//     $messages['foobar'] = array(
//         0 => '', // Unused. Messages start at index 1.
//         1 => __($name . ' updated.'),
//         2 => '', //not used
//         3 => '', //not used
//         4 => __($name . ' updated.'),
//         /* translators: %s: date and time of the revision */
//         5 => '', //not used
//         6 => __($name . ' created'),
//         7 => __($name . ' saved.'),
//         8 => '', //not used
//         9 => sprintf( __($name . ' scheduled for: <strong>%1$s</strong>'),
//         // translators: Publish box date format, see http://php.net/date
//         date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ) ),
//         10 => __($name . ' draft updated')
//     );
// 
//     return $messages;
// }





// function onVariantOptionsMetaboxInitAction() {
// 	add_filter( 'post_updated_messages', 'variant_options_messages_filter' );
// }

function variant_options_messages_filter($messages){
	$messages['tc_product_variation'][6] =  __('Variation saved successfully.');
	return $messages;
}


?>