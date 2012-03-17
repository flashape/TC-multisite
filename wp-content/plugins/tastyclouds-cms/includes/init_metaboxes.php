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
	global $order_details_metabox;
	$orderID = $post_id;
	// remove the save action handler so it doesnt fire if/when we need to save new posts of other types (like contacts or payments)
	$order_details_metabox->remove_action('save', 'onOrderDetailsMetaboxSaveAction');
	
	
	
	// if the tc_selected_contact var is empty, and user info was submitted, save a new contact
	$customerFirstName = $_POST['customer_address_first_name'];
	$customerLastName = $_POST['customer_address_last_name'];
	$customerEmail = $_POST['customer_email'];
	$customerPhone = $_POST['customer_phone'];
	$customerCompany = $_POST['customer_company'];
	
	$contactModel = array(
		'customerFirstName'=>$customerFirstName,
		'customerLastName'=>$customerLastName,
		'customerEmail'=>$customerEmail,
		'customerPhone'=>$customerPhone,
		'customerCompany'=>$customerCompany
	);
	
	if (empty($_POST['tc_selected_contact'] ) ){
		if( !empty($customerFirstName) || !empty($customerLastName) || !empty($customerEmail) || !empty($customerPhone) || !empty($customerCompany) ){
 			
			$contactID = ContactProxy::createNew(array('use_post'=>true));

			//store the contact meta info with the post
			$contactModel['contactID'] = $contactID;
			ContactProxy::updateMeta($contactModel);
			
			// link the order with the contact
			p2p_type( 'contact_to_order' )->connect( $contactID, $orderID, array(
				'date' => current_time('mysql'),			
			) );
		}
	}else{
		$contactID = $_POST['tc_selected_contact'];
	}
	
	// check for billing address submission
	$billingAddress = ContactProxy::getAddressFromPost('billing');
	$billingAddressString = implode('', $billingAddress);
	if (!empty($billingAddressString)){
		$addressID = ContactProxy::insertNewAddress(array('contactID'=>$contactID, 'address'=>$billingAddress, 'type'=>'billing'));
		
		//TODO:  might have to move this when we use a previously saved billing address
		if( isset($data['attach_to_order_id']) ){
			p2p_type( $addressType.'_address_to_order' )->connect( $addressID, $orderID );
		}
	}
	
		
	// check for shipping address submission
	$shippingAddress = ContactProxy::getAddressFromPost('shipping');
	$shippingAddressString = implode('', $shippingAddress);
	if (!empty($shippingAddressString)){
		$addressID = ContactProxy::insertNewAddress(array('contactID'=>$contactID, 'address'=>$shippingAddress, 'type'=>'shipping'));
		
		//TODO:  might have to move this when we use a previously saved shipping address
		if( isset($data['attach_to_order_id']) ){
			p2p_type( $addressType.'_address_to_order' )->connect( $addressID, $orderID );
		}
	}
	
	
	// save payment info if submitted with order
	if (!empty($_POST['payment_amount'] ) ){
		$paymentID = PaymentProxy::insertNew(array('use_post'=>true, 'orderID'=>$orderID));
	
		p2p_type( 'payment_to_order' )->connect( $paymentID, $orderID, array(
			'date' => current_time('mysql'),			
		) );
		
	}

	OrderProxy::removeContactTaxonomyTerms($orderID);
	
	OrderProxy::setOrderTypeTaxonomyTerms($orderID);
	
	if(isset($_POST['_tc_event_date'])){
		update_post_meta( $orderID, '_tc_event_date', $_POST['_tc_event_date'] );					
	}
	
	
	
	if ( defined( 'IS_NEW_ORDER_POST' ) ){
		//if this is a new order, check to see if we need to create an invoice on Freshbooks.
		
		$cartID = $_POST['cartID'];
		$cart = CartAjax::getCartById($cartID);

		OrderProxy::saveCart($cart, $orderID, $cartID);
		
		// TODO: determine if we want to save this invoice to FB.
		$orderType = $_POST['_tc_order_type'];
		
		// if we are saving any type of order except "Walk In", link with freshbooks
		// to send customer an invoice.
		if ($orderType == "36"){ // 36 is a walk-in order, we dont need an invoice on Freshbooks for that.
			return;
		}
		
		// Freshbooks requires a valid email address for a client,
		// so make sure we have one before attempting to add. 
		if (empty($customerEmail) || filter_var($customerEmail, FILTER_VALIDATE_EMAIL) === FALSE){
			error_log("\n\nNo valid email provided, skipping Freshbooks invoice.\n\n");								
			return;
		}
		
		require_once(TASTY_CMS_PLUGIN_LIBS_DIR .'freshbooks/FreshbooksService.php');
		require_once(TASTY_CMS_PLUGIN_LIBS_DIR .'freshbooks/FreshbooksUtils.php');
		$freshbooksService = new FreshbooksService();
		
		$fbClientID = FreshbooksUtils::getFreshbooksClientID($contactID);
		
		if (empty($fbClientID)){
			$clientObj = FreshbooksUtils::createClientObject(array('contact'=>$contactModel, 'address'=>$billingAddress));
			
			$createClientResult = $freshbooksService->createNewClient($clientObj);
			$response = $createClientResult['response'];
			
			if ($createClientResult['success']){
				error_log("\n\nSuccessfully created new client on freshbooks!");
				$fbClientID = $response['client_id'];
				update_post_meta($contactID, '_tc_fb_id', $fbClientID);
			}else{
				// throw a fit
				error_log("\n\nError adding client to freshbooks");
				error_log(print_r($response, 1));
				error_log(print_r($createClientResult['error'], 1));
				return;
			}	
		}
		
		/**********************************************
		 * Now that we have a client id for Freshbooks,
		 * create a new invoice for the order.
		//  **********************************************/
		$invoice = FreshbooksUtils::getInvoiceFromCart($fbClientID, $cart);
		error_log(var_export($invoice,1));
		
		$createInvoiceResult = $freshbooksService->createInvoice($invoice);
		$invoiceResponse = $createInvoiceResult['response'];
		
		if ($createInvoiceResult['success']){
			error_log("\n\nSuccessfully created new invoice on freshbooks!");								
			$invoiceID = $invoiceResponse['invoice_id'];
		}else{
			error_log("\n\nError adding invoice to fresbooks");
			error_log(print_r($invoiceResponse, 1));
			error_log(print_r($createInvoiceResult['error'], 1));
			return;
		}
		
		
		/**********************************************
		 * If there was a payment submitted with this order,
		 * save the payment as a post, save it to Freshbooks, 
		 * and add the payment to the invoice
		//  **********************************************/
		if ( isset($paymentID) ){
			// save payment to Freshbooks
			$payment = FreshbooksUtils::createNewInvoicePaymentFromPost($invoiceID);
			$createPaymentResult = $freshbooksService->createPaymentForInvoice($payment);
			$paymentResponse = $createPaymentResult['response'];
			
			if ($createPaymentResult['success']){
				error_log("\n\nSuccessfully created new payment on freshbooks!");
				$invoicePaymentID = $paymentResponse['payment_id'];
				update_post_meta($paymentID, '_tc_fb_payment_id', $invoicePaymentID);
			}else{
				error_log("\n\nError adding payment to freshbooks");
				error_log(print_r($paymentResponse, 1));
				error_log(print_r($createPaymentResult['error'], 1));
				return;
			}
		}
		
		
		/**********************************************
		 * Now that the invoice is ready, email to the client
		//  **********************************************/
		$emailInfo = array();
		$emailInfo['invoice_id'] = $invoiceID;
		$emailInfo['message'] = 'You have a new invoice. Get it here: ::invoice link::';
		$emailInfo['subject'] = 'Tasty Clouds Cotton Candy Company : Invoice';
		
		$sendInvoiceResult = $freshbooksService->sendInvoiceByEmail($emailInfo);
		$sendInvoiceResponse = $sendInvoiceResult['response'];
		
		if ($sendInvoiceResult['success']){
			error_log("\n\nSuccessfully send email!");
			
		}else{
			error_log("\n\nError sending email");
			error_log(print_r($sendInvoiceResponse, 1));
			error_log(print_r($sendInvoiceResult['error'], 1));
			return;
		}
		
		
			
	}
	

	
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
	'mode' => WPALCHEMY_MODE_ARRAY,
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
	//'output_filter'=>'enterPaymentMetaboxOutputFilter',
	// 'head_action'=>'onOrderStatusMetaboxHeadAction',
	// 'foot_action'=>'onOrderStatusMetaboxFooterAction',
	'template' => TASTY_CMS_PLUGIN_METABOX_DIR . 'PaymentMetabox.php',
));

function enterPaymentMetaboxOutputFilter(){
	global $pagenow;
	// $isEditPost = $pagenow == 'post.php';
	// return $isEditPost;
	
	return $pagenow != 'post-new.php';
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