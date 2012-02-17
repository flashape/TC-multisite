<?php
/*
Plugin Name: Tasty Clouds CRM
Plugin URI: http://tastyclouds.com/
Description: Adds Customer Relationship Management capabilities to Admin Area for TastyClouds.com
Version: 0.1
Author: Rich Rodecker
Author URI: http://tastyclouds.com/
*/

if (!defined('TASTY_PLUGIN_DIR')) {
    define('TASTY_PLUGIN_DIR', plugin_dir_path( __FILE__ ));
}


if (!defined('TASTY_PLUGIN_INC_DIR')) {
    define('TASTY_PLUGIN_INC_DIR', TASTY_PLUGIN_DIR . 'includes/');
    define('TASTY_PLUGIN_METABOX_DIR', TASTY_PLUGIN_DIR . 'includes/metabox/');
}

if(!defined('TC_SHARED_DIR')){
    define('TC_SHARED_DIR', WP_CONTENT_DIR.'/tc_shared/');
}

if(!defined('TC_SHARED_JS_URL')){
    define('TC_SHARED_JS_URL', WP_CONTENT_URL . '/tc_shared/js/');
}



define('TC_MENU_POSITION_CONTACT', 1);
define('TC_MENU_POSITION_ORDERS', 3);
define('TC_MENU_POSITION_PAYMENTS', 4);
define('TC_MENU_POSITION_COUPONS', 5);
define('TC_MENU_POSITION_PROJECTS', 6);

define('SWIFTMAIL_REQUIRED_FILE', ABSPATH . 'swiftmailer/lib/swift_required.php');



require_once(TASTY_PLUGIN_INC_DIR.'debug.php');
require_once(TASTY_PLUGIN_INC_DIR.'init_projects.php');

require_once(TASTY_PLUGIN_INC_DIR.'init_contacts.php');
require_once(TASTY_PLUGIN_INC_DIR.'init_payments.php');
require_once(TASTY_PLUGIN_INC_DIR.'init_coupons.php');
require_once(TASTY_PLUGIN_INC_DIR.'init_orders.php');
require_once(TASTY_PLUGIN_INC_DIR.'init_activities.php');
require_once(TASTY_PLUGIN_INC_DIR.'init_taxonomies.php');
require_once(TASTY_PLUGIN_INC_DIR.'init_p2p_connections.php');
require_once(TASTY_PLUGIN_INC_DIR.'ActivityAjax.php');
require_once(TASTY_PLUGIN_INC_DIR.'MailAjax.php');
require_once(TASTY_PLUGIN_INC_DIR.'panalo_email.php');
require_once('panalo-options.php');
require_once(TASTY_PLUGIN_INC_DIR.'TastyCart.php');


// Load the davispress library (plugin framework)
// including here as a temporary shortcut, since this lib already had tabbed metabox functionality
require_once( TASTY_PLUGIN_DIR . 'davispress-library/davispress-library.php' );
$davispress_library = new davispressLibrary();



if (!defined('SMARTY_DIR')) {
    define('SMARTY_DIR', dirname(__FILE__) . DIRECTORY_SEPARATOR);
}

if(!defined('TC_JS_DIR')){
    define('TC_JS_DIR', plugins_url('tastyclouds-crm/js/'));
	
}


// include the class in your theme or plugin
//include_once 'wpalchemy/MetaBox.php';
include_once TC_SHARED_DIR.'/wpalchemy/MetaBox.php';






$coupon_details_metabox = new WPAlchemy_MetaBox(array
(
	'id' => 'tasty_coupon_details_metabox',
	'title' => 'Coupon Details',
	'types' => array('tc_crm_coupon'),
	'mode' => WPALCHEMY_MODE_EXTRACT,
	'prefix' => '_tc_crm_coupon_',	
	'template' => TASTY_PLUGIN_METABOX_DIR . 'templates/CouponDetailsMetabox.php',

));
 
$coupon_save_metabox = new WPAlchemy_MetaBox(array
(
	'id' => 'tasty_coupon_save_metabox',
	'title' => 'Save',
	'types' => array('tc_crm_coupon'),
	'mode' => WPALCHEMY_MODE_EXTRACT,
	'prefix' => '_tc_crm_coupon_',
	'template' => TASTY_PLUGIN_METABOX_DIR . 'templates/CouponSaveMetabox.php',
	'foot_action'=>'onFooterAction',
	'init_action'=>'onCouponMetaboxInitAction'
));

$order_status_metabox = new WPAlchemy_MetaBox(array
(
	'id' => '_order_status_metabox',
	'title' => 'Order Status',
	'types' => array('tc_crm_order'),
	'mode' => WPALCHEMY_MODE_EXTRACT,
	'prefix' => '_panalo_order_',
	'context' => 'side',
	'template' => TASTY_PLUGIN_METABOX_DIR . 'templates/OrderStatusMetabox.php',
));


$shipping_size_metabox = new WPAlchemy_MetaBox(array
(
	'id' => '_shipping_size_metabox',
	'title' => 'Shipping Box Size',
	'types' => array('tc_crm_order'),
	'mode' => WPALCHEMY_MODE_EXTRACT,
	'prefix' => '_panalo_box_size_',
	'context' => 'side',
	'save_filter' => 'panalo_on_shipping_box_save', // defaults to NULL
	'template' => TASTY_PLUGIN_METABOX_DIR . 'templates/BoxSizeMetabox.php',
));
 


$activity_metabox = new WPAlchemy_MetaBox(array
(
	'id' => '_activity_metabox',
	'title' => 'Activities',
	'types' => array('tc_crm_contact', 'panalo_project'),
	'mode' => WPALCHEMY_MODE_EXTRACT,
	'prefix' => '_panalo_activity_',
	'foot_action' => 'onActivityMetaboxFooterAction',
	'output_filter' => 'activityMetaboxOutputFilter',
	'template' => TASTY_PLUGIN_METABOX_DIR . 'templates/ActivityMetabox.php',
));
add_action( 'add_meta_boxes_tc_crm_contact', 'onActivityMetaboxInit' );
add_action( 'add_meta_boxes_panalo_project', 'onActivityMetaboxInit' );


// 
// $project_activity_metabox = new WPAlchemy_MetaBox(array
// (
// 	'id' => '_proj_activity_metabox',
// 	'title' => 'Activities',
// 	'types' => array('panalo_project'),
// 	'mode' => WPALCHEMY_MODE_EXTRACT,
// 	'prefix' => '_panalo_proj_activity_',
// 	'foot_action' => 'onProjectActivityMetaboxFooterAction',
// 	'template' => TASTY_PLUGIN_METABOX_DIR . 'templates/ProjectActivityMetabox.php',
// ));

//add_action( 'add_meta_boxes_panalo_project', 'onProjectActivityMetaboxInit' );





function tc_crm_enqueue_custom_meta_css(){
	wp_enqueue_style('custom_meta_css', plugins_url('tastyclouds-crm/includes/metabox/templates/').'meta.css');
}
add_action( 'admin_enqueue_scripts', 'tc_crm_enqueue_custom_meta_css' );



function panalo_on_shipping_box_save($meta, $post_id){

	$prevBoxSize = get_post_meta($post_id, '_panalo_box_size_size', TRUE);
	$prevBoxWeight = get_post_meta($post_id, '_panalo_box_size_weight', TRUE);

	// if this is the first time we're saving the box size,
	// automatically assign the order to chelcie.
	if ( empty($prevBoxWeight) && empty($prevBoxSize) && !empty($meta) ){
		update_post_meta( $post_id, '_panalo_order_assignee', 5 );
		update_post_meta( $post_id, '_panalo_order_status', 8 );
	}
	
	return $meta;
	
}

function onCouponMetaboxInitAction(){
	//remove_meta_box( 'submitdiv', 'tc_crm_coupon', 'normal' );      
	add_action( 'admin_enqueue_scripts', 'tc_crm_disable_autosave_for_coupons' );
}     

function onActivityMetaboxInit(){
	//remove_meta_box( 'submitdiv', 'tc_crm_coupon', 'normal' );     
	error_log('onActivityMetaboxInit'); 
	remove_meta_box( 'commentsdiv', 'tc_crm_contact', 'normal' );      
	remove_meta_box( 'commentstatusdiv', 'tc_crm_contact', 'normal' );      	
	remove_meta_box( 'commentsdiv', 'panalo_project', 'normal' );      
	remove_meta_box( 'commentstatusdiv', 'panalo_project', 'normal' );      
	add_action( 'admin_enqueue_scripts', 'panalo_enqueue_contact_scripts' );
}

function activityMetaboxOutputFilter(){
	global $pagenow;
	
	$isEditPost = $pagenow == 'post.php';
	
	return $isEditPost;
}



// function onProjectActivityMetaboxInit(){
// 	//remove_meta_box( 'submitdiv', 'tc_crm_coupon', 'normal' );     
// 	error_log('onProjectActivityMetaboxInit');     	
// 	remove_meta_box( 'commentsdiv', 'panalo_project', 'normal' );      
// 	remove_meta_box( 'commentstatusdiv', 'panalo_project', 'normal' );      
// 	add_action( 'admin_enqueue_scripts', 'panalo_enqueue_project_scripts' );
// }


function panalo_enqueue_contact_scripts(){
	error_log('panalo_enqueue_contact_scripts');
	wp_enqueue_script( 'jquery-ui-core' );
	wp_enqueue_script( 'jquery-ui-button' );
	
	wp_enqueue_script('panalo-activities-js', TC_JS_DIR . 'activities.js' );
	wp_enqueue_script('jquery-calendrical-js', TC_JS_DIR . 'jquery.calendrical.js' );
	wp_enqueue_script('jquery-tablesorter-js', TC_JS_DIR . 'jquery.tablesorter.min.js', array('jquery') );
	
	wp_enqueue_script('timeago', TC_JS_DIR . 'jquery.timeago.js' );
	wp_enqueue_style('calendrical', plugins_url('/css/calendrical.css', __FILE__));
	wp_enqueue_script( 'jquery-ui-tabs' );
	wp_enqueue_style('jquery.tablesorter.blue', plugins_url('/css/tablesorter/style.css', __FILE__));
	


	
}   

// function panalo_enqueue_project_scripts(){
// 	error_log('panalo_enqueue_project_scripts');
// 	wp_enqueue_script( 'jquery-ui-core' );
// 	wp_enqueue_script( 'jquery-ui-button' );
// 	
// 	wp_enqueue_script('panalo-activities-js', TC_JS_DIR . 'activities.js' );
// 	wp_enqueue_script('jquery-calendrical-js', TC_JS_DIR . 'jquery.calendrical.js' );
// 	wp_enqueue_script('jquery-tablesorter-js', TC_JS_DIR . 'jquery.tablesorter.min.js', array('jquery') );
// 	
// 	wp_enqueue_script('timeago', TC_JS_DIR . 'jquery.timeago.js' );
// 	wp_enqueue_style('calendrical', plugins_url('/css/calendrical.css', __FILE__));
// 	wp_enqueue_script( 'jquery-ui-tabs' );
// 	wp_enqueue_style('jquery.tablesorter.blue', plugins_url('/css/tablesorter/style.css', __FILE__));
// 	
// 
// 
// 	
// }   

function tc_crm_disable_autosave_for_coupons(){
	global $post_type, $current_screen; 
	if($post_type == 'tc_crm_coupon' ) {
		wp_deregister_script( 'autosave' );
	}
}




add_action('plugins_loaded','tc_crm_init_session');
add_action('plugins_loaded','tc_crm_plugins_loaded');
add_action('load-post-new.php','tc_crm_on_load_post_new');
add_action('load-post.php','tc_crm_on_load_post');
add_action('transition_post_status','tc_crm_on_transition_post_status',10,3);
add_action( 'add_meta_boxes_panalo_project', 'add_metaboxes_panalo_project' );



add_filter('tc_crm_init_products_metabox', 'tc_crm_create_product_metabox');
add_action( 'wp_print_styles', 'tc_crm_styles' );
add_action( 'admin_head', 'tc_crm_scripts' );

add_action( 'wp_ajax_tc_crm_update_shipping_rates', 'tc_crm_retrieve_shipping_rates' );
add_action( 'wp_ajax_tc_crm_get_contact_details', 'tc_crm_retrieve_contact_details' );

add_action( 'wp_ajax_tc_add_to_cart', array('TastyCart', 'addItem') );
add_action( 'wp_ajax_tc_remove_from_cart', array('TastyCart', 'removeItem') );
add_action( 'wp_ajax_tc_update_item', array('TastyCart', 'updateItem') );

add_action( 'wp_ajax_tc_add_custom_item_to_cart', array('TastyCart', 'addCustomItem') );
add_action( 'wp_ajax_tc_remove_custom_item_from_cart', array('TastyCart', 'removeCustomItem') );
add_action( 'wp_ajax_tc_update_custom_item', array('TastyCart', 'updateCustomItem') );

add_action( 'wp_ajax_tc_add_service_item_to_cart', array('TastyCart', 'addServiceItem') );
add_action( 'wp_ajax_tc_remove_service_item_from_cart', array('TastyCart', 'removeServiceItem') );
add_action( 'wp_ajax_tc_update_service_item', array('TastyCart', 'updateServiceItem') );

add_action( 'wp_ajax_tc_add_delivery_item_to_cart', array('TastyCart', 'addDeliveryItem') );
add_action( 'wp_ajax_tc_remove_delivery_item_from_cart', array('TastyCart', 'removeDeliveryItem') );
add_action( 'wp_ajax_tc_update_delivery_item', array('TastyCart', 'updateDeliveryItem') );

add_action( 'wp_ajax_tc_update_discount', array('TastyCart', 'updateDiscount') );

add_action( 'wp_ajax_tc_validate_coupon', array('TastyCart', 'validateCoupon') );
add_action( 'wp_ajax_tc_remove_coupon', array('TastyCart', 'removeCoupon') );

add_action( 'wp_ajax_tc_get_cart', array('TastyCart', 'getCart') );
add_action( 'wp_ajax_tc_enable_tax', array('TastyCart', 'enableTax') );


add_action( 'wp_ajax_panalo_insert_activity', array('ActivityAjax', 'insertActivity') );
add_action( 'wp_ajax_panalo_update_activity', array('ActivityAjax', 'updateActivity') );
add_action( 'wp_ajax_panalo_delete_activity', array('ActivityAjax', 'deleteActivity') );
add_action( 'wp_ajax_panalo_get_activities_for_post', array('ActivityAjax', 'getActivitiesForPost') );
add_action( 'wp_ajax_panalo_get_mail_for_contact', array('MailAjax', 'getMailForContact') );

add_action( 'admin_enqueue_scripts', 'tc_crm_admin_enqueue_scripts', 10, 1 );
//add_action( 'admin_enqueue_styles', 'tc_crm_admin_enqueue_styles', 10, 1 );
add_action( 'admin_head', 'panalo_styles_inline' );
add_action( 'panalo_followup_reminder_cron_hook', 'panalo_send_followup_reminder_email', 10, 3);

add_filter('update_post_metadata', 'panalo_update_post_metadata', 10, 4);


// add_action( 'load-post-new.php', 'prefix_save_it' );
// function prefix_save_it() {
// 	
// 	if ( $_GET['post_type'] == 'panalo_project' ){
// 		add_filter('wp_insert_post_empty_content', '__return_false');
// 		
// 	    // define some basic variables
// 	    $quick = array();
// 	    $quick['post_status'] = 'publish'; // set as draft first
// 	    $quick['post_category'] = isset($_POST['post_category']) ? $_POST['post_category'] : null;
// 	    $quick['tax_input'] = isset($_POST['tax_input']) ? $_POST['tax_input'] : null;
// 	    $quick['post_title'] = isset($_POST['post_title']) ? $_POST['title'] : null;
// 	    $quick['post_content'] = isset($_POST['post_content']) ? $_POST['post_content'] : null;
// 	
// 	    // insert the post with nothing in it, to get an ID
// 	    $post_ID = wp_insert_post($quick, true);
// 	    if ( is_wp_error($post_ID) ){
// 	        wp_die($post_ID);
// 	
// 	        $quick['ID'] = $post_ID;
// 	        wp_update_post($quick);
// 	    }
// 	    return $post_ID;
// 	}
// }


function add_metaboxes_panalo_project(){
	global $pagenow;
	
	if ( $pagenow != "post.php"){
		add_action('admin_footer', 'panalo_project_admin_footer');
	}
}
function panalo_project_admin_footer(){
	global $pagenow;
	
	if ( $pagenow != "post.php"){
	?>
	<script>
		jQuery(document).ready(function($){
			$('#titlewrap').append('<span class="description">Enter title of project and save to enable Activities.</span>');
		});
	</script>
	<?php	
	}
}

// The update_post_metadata filter is called before saving metadata to the db.
// If anything is returned from this method, the metadata is not saved.
function panalo_update_post_metadata($dummy = NULL, $object_id, $meta_key, $meta_value){
	//error_log("object_id : $object_id, meta_key : $meta_key, meta_value : $meta_value");
	switch($meta_key){
		case '_panalo_order_assignee':
			$oldValue = get_post_meta($object_id, '_panalo_order_assignee', true);
			if ($oldValue != $meta_value){
				error_log('_panalo_order_assignee CHANGED!!!');
				wp_mail('rich@tastyclouds.com', 'An Order has been assigned to you', 'A new order has been assigned to you, click here to view: ');
			}
		break;
	}
}

//add_action('admin_menu', 'create_orders_menu');



// function create_orders_menu() {
// 	$topLevelSlug = 'edit.php?post_type=ticket&subtype=order';
// 	$shippingSlug = 'post-new.php?post_type=ticket&subtype=shipping_order';
// 	$eventSlug = 'post-new.php?post_type=ticket&subtype=event';
//     $hook = add_menu_page('Orders', 'Orders', 'edit_posts', $topLevelSlug , '', '', TC_MENU_POSITION_ORDERS); // menu position 1 here because custom contact post type uses 0
// 	add_submenu_page($topLevelSlug, 'Add New Shipping Order', 'New Shipping Order', 'edit_posts', $shippingSlug);
// 	add_submenu_page($topLevelSlug, 'Add New Event', 'Add New Event', 'edit_posts', $eventSlug);
// }


// When loading a new ticekt post, create a new cart to hold the order
// TODO:  only create the cart when we are actually entering an order.
function tc_crm_on_load_post_new(){
	//error_log('request post type : '.$_REQUEST['post_type']);
	if(is_order_post() ){
		global $newCartID;
		global $isNewCart;
		$isNewCart = true;
		// if the browser page is reloaded, find the cart 
		// with the current session_id and use the id from that,
		// otherwise create a new one.
		
		// TODO:  Fix this to allow for multiple carts per browser session.
		// foreach ($_SESSION as $key => $value) {
		// 	if ( strpos($key, 'cart_') !== false){
		// 		if( $value['session_id'] == session_id()){
		// 			$newCartID = $value['id'];
		// 			$isNewCart = false;
		// 			break;
		// 		}
		// 	}
		// }
		
		if (empty($newCartID)){
			$newCartID = TastyCart::create();
		}
		//echo "newCartID = $newCartID<br/>\n";
		//error_log("newCartID = $newCartID");
	}
}

// When reloading a saved order post, check if a cart was saved with the order.
// If yes, then unserialize the cart and put it back in the session:

// TODO:	
//	Determine if order is already complete and can be edited.
// 	For example, in-store purchases are final and shouldn't be re-edit,
//	but event reservation invoices with only a deposit received and a balance due can be.
	
function tc_crm_on_load_post(){
	
	if(is_order_post()){
		global $post;
		// error_log('tc_crm_on_load_post : ');
		// error_log("Session_id : ".session_id());
		
		//error_log(var_export($post, 1));
		// TODO:  What happens when two users edit the same post?
		$cartKey = genesis_get_custom_field('_tc_cart_id');
		
		if ($cartKey){
			global $wpdb;
			$tablename = $wpdb->prefix . 'tc_carts';
			$sql = "SELECT * FROM $tablename WHERE cart_id = $cartKey";
			$row = $wpdb->get_row($sql);
			//error_log(var_export($row, 1));
			$cart = unserialize(base64_decode($row->items));
			//error_log(var_export($cart, 1));
			$cart['session_id'] = session_id();
			
			global $newCartID;
			global $isNewCart;
			
			$newCartID = $cart['id'];
			$isNewCart = false;
			
			
			TastyCart::overwriteCartInSession($cart);
			//error_log(var_export($cart, 1));
			
			
		}
	}
}

function getProductByID($itemID, $productsArray){
	foreach ($productsArray as $product) {
		// $productName = $product['itemName'];
		// $productID = $product['itemID'];
		
		if ($product['itemID'] == $itemID){
			return $product;
		}
	}
}



function tc_crm_on_transition_post_status($new, $old, $post){
    // Make sure the post obj is present and complete. If not, bail.
    if(!is_object($post) || !isset($post->post_type)) {
        return;
    }

    switch($post->post_type) {

        case "tc_crm_order":
			
			if ($new == 'publish' && $old != 'publish'){
				error_log("\n tc_crm_on_transition_post_status \n");
				if (is_order_post()){

					
					
					$cartID = $_POST['cartID'];
					$cart = TastyCart::getCartById($cartID);
					
					tc_crm_save_cart_to_db($cart, $post);
					
					
					// Save a payment post first if necessary,  
					// since we'll want that regardless of saving to FB or not.
					$paymentPostID = savePaymentPost();
					
					// TODO: determine if we want to save this invoice to FB.
					$orderType = $_POST['_panalo_order_type'];
					
					
					// if we are saving any type of order except "Walk In", link with freshbooks
					// to send customer an invoice.
					if ($orderType == "113"){ // 113 is a walk-in order
						return;
					}
					
					// Freshbooks requires a valid email address for a client,
					// so make sure we have one before attempting to add. 
					$email = $_POST['_tc_crm_contact_personal_email'];
					
					if (empty($email) || filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE){
						error_log("\n\nNo valid email provided, skipping Freshbooks invoice.\n\n");								
						
						return;
					}
					
					
					
					require_once('freshbooks/FreshbooksService.php');
					require_once('freshbooks/FreshbooksUtils.php');
					$freshbooksService = new FreshbooksService();
					
					
					$contactID = $_POST['panalo_selected_contact'];
					
					
					$fbClientID = panalo_get_or_create_freshbooks_id($contactID, $freshbooksService);
					
					/**********************************************
					 * Now that we have a client id for Freshbooks,
					 * create a new invoice for the order.
					//  **********************************************/
					$invoice = FreshbooksUtils::getInvoiceFromCart($fbClientID, $cart);
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
					if ($paymentPostID !== false){
						// save payment to Freshbooks
						$payment = FreshbooksUtils::createNewInvoicePaymentFromPost($invoiceID);
						$createPaymentResult = $freshbooksService->createPaymentForInvoice($payment);
						$paymentResponse = $createPaymentResult['response'];
						
						if ($createPaymentResult['success']){
							error_log("\n\nSuccessfully created new payment on freshbooks!");
							$invoicePaymentID = $paymentResponse['payment_id'];
							update_post_meta($paymentPostID, '_tc_crm_payment_fbid', $invoicePaymentID);
						}else{
							error_log("\n\nError adding payment to fresbooks");
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
        break;
	}
}

function panalo_get_or_create_freshbooks_id($contactID, $freshbooksService){
	// if $contactID is not "null",
	// check and see if this contact already has 
	// an associated Freshbooks account.
	if ( is_numeric($contactID)){
		
		$fbClientID = get_post_meta($contactID, '_panalo_fb_id', true);
		if ( !empty($fbClientID)) {
			
			return $fbClientID;
		}
	}
	
	
	
	// if $contactID is "null",
	require_once('freshbooks/FreshbooksUtils.php');
	$client = FreshbooksUtils::createNewClientObjectFromPost();
	
	$createClientResult = $freshbooksService->createNewClient($client);
	//$createClientResult = tc_crm_create_new_freshbooks_client($freshbooksService);
	
	$response = $createClientResult['response'];
	error_log(var_export($response, 1));
	if ($createClientResult['success']){
		error_log("\n\nSuccessfully created new client on freshbooks!");
		$fbClientID = $response['client_id'];
		update_post_meta($contactID, '_panalo_fb_id', $fbClientID);
		return $fbClientID;
	}else{
		// throw a fit
		error_log("\n\nError adding client to fresbooks");
		error_log(print_r($response, 1));
		error_log(print_r($createClientResult['error'], 1));
		return;
	}
} 

function tc_crm_save_cart_to_db($cart, $post){
	// save the cart to the db from the session
	global $wpdb;
	$cartID = $_POST['cartID'];
	
	$serializedCart = base64_encode(serialize($cart));
	$tablename = $wpdb->prefix . 'tc_carts';
	$values = array(
		'name' => $cartID,
		'items' => $serializedCart,
		'inserted' => current_time('mysql')
	);
	$wpdb->insert($tablename, $values);
	
	// add the cartID to the order post metadata
	update_post_meta( $post->ID, '_tc_cart_id', $wpdb->insert_id );
	
}
// 
// 
// function tc_crm_create_new_freshbooks_client($freshbooksService){
// 	//require_once('freshbooks/FreshbooksService.php');
// 	require_once('freshbooks/FreshbooksUtils.php');
// 	$client = FreshbooksUtils::createNewClientObjectFromPost();
// 	
// 	$createClientResult = $freshbooksService->createNewClient($client);
// 	
// 	return $createClientResult;
// }

function savePaymentPost(){
	error_log("savePaymentPost()");
	
	$paymentType = $_POST['_tc_crm_payment_type'];
	$paymentAmount = $_POST['_tc_crm_payment_amount'];
	if (!empty($paymentType) && !empty($paymentAmount)){
	   $payment = array(
			'post_title' => 'Payment For Order ID '.$_POST['post_ID']. ' (via '.$paymentType.')',
			'post_content' => $paymentType.' payment for orderID  '.$_POST['post_ID'],
			'post_status' => 'publish',
			'post_type' => "tc_crm_payment"
	             );
			$paymentPostID = wp_insert_post($payment);
			
			if ($paymentPostID > 0){
				savePaymentIDWithTicketMeta($paymentPostID);
				update_post_meta($paymentPostID, '_tc_crm_payment_note', $_POST['_tc_crm_payment_note']);
				update_post_meta($paymentPostID, '_tc_crm_payment_amount', $_POST['_tc_crm_payment_amount']);
				update_post_meta($paymentPostID, '_tc_crm_payment_order_id', $_POST['post_ID']);
				update_post_meta($paymentPostID, '_tc_crm_payment_method', $_POST['_tc_crm_payment_type']);
				
				return $paymentPostID;
			}
	}else{
		return false;
	}
}

function savePaymentIDWithTicketMeta($paymentID){
	add_post_meta($_POST['post_ID'], '_tc_crm_payment_id', $paymentID);
}





function tc_crm_styles() {

	/** standard slideshow styles */
	wp_register_style( 'tc_crm_styles', plugins_url('/style.css', __FILE__));
	wp_enqueue_style( 'slider_styles' );
	wp_enqueue_style( 'tc_crm_styles' );

}


function tc_crm_retrieve_contact_details(){
	$selectedContactID = $_POST['selectedContactID'];
	$meta = get_metadata('post', $selectedContactID);
	$result;
	if (empty($meta)){
		$result = array('success'=>false, 'meta'=>$meta);
	}else{
		$result = array('success'=>true, 'meta'=>$meta);
		
	}
	echo json_encode($result);
	
	// always use die() when echoing content for ajax requests
	die(); 
}


function tc_crm_retrieve_shipping_rates(){
	require_once('fedex/FedExService.php');

	$fedExService = new FedExService();
	$shippingItems = $_POST['shippingItems'];
	$customerInfo = $_POST['customerInfo'];
	$serviceType = $_POST['serviceType'];
	
	/***************************
	* Add Recipient
	****************************/
	
	
	$recipient = array(
		'Contact' => array(
			'PersonName' => 'Rich Rodecker',
			'CompanyName' => '',
			'PhoneNumber' => '3109238566'
		),
		'Address' => array(
			'StreetLines' => array(@$customerInfo['address_1'], @$customerInfo['address_2']),
			'City' => @$customerInfo['city'],
			'StateOrProvinceCode' => @$customerInfo['state'],
			'PostalCode' => @$customerInfo['zip'],
			'CountryCode' => 'US',
			'Residential' => true)
	);
	$fedExService->recipient = $recipient;

	/***************************
	* Add Item(s)
	****************************/
	
	foreach($shippingItems as $item){
		$itemWeight = number_format(@$item['weight'], 2);
		
		$totalWeight = $itemWeight * $item['quantity'];
		
		$packageLineItem = array(
			'SequenceNumber'=>1,
			'GroupPackageCount'=>1,
			'Weight' => array(
				'Value' => $totalWeight,
				'Units' => 'LB'
			)
		);
		
		$fedExService->addPackageLineItem($packageLineItem);
		
	}

	// $packageLineItem = array(
	// 	'SequenceNumber'=>1,
	// 	'GroupPackageCount'=>1,
	// 	'Weight' => array(
	// 		'Value' => 9.0,
	// 		'Units' => 'LB'
	// 	),
	// 	// 'Dimensions' => array(
	// 	// 	'Length' => 20,
	// 	// 	'Width' => 20,
	// 	// 	'Height' => 20,
	// 	// 	'Units' => 'IN'
	// 	// )
	// );
	
	$fedExService->serviceType = $_POST['serviceType'];
	
	//echo json_encode($fedExService->packageLineItems);
	//echo json_encode($shippingItems);
	$result = $fedExService->requestRates();
	//$inVar = $_POST['testVar'];
	
	
	// add the shipping info directly to the cart session
	$cartID = $_POST['cartID'];
	
	$shipping = array('amount'=>$result['amount'], 'serviceType'=>$result['serviceType']);
	$shippingResult = TastyCart::setShipping($cartID, $shipping);
	
	$result['shippingResult'] = $shippingResult;
	
	echo json_encode($result);
	
	// always use die() when echoing content for ajax requests
	die();
}

function tc_crm_init_session(){
	if (!session_id()){
		error_log("\ntc_crm_init_session , no session_id, starting new\n");
		session_start();
	}
}

function tc_crm_plugins_loaded(){
	//delete_option('tc_crm_shipping_options');
	 
	$shippingOptions = get_option('tc_crm_shipping_options');
	if(!$shippingOptions){
		require_once(dirname(__FILE__) .'/includes/shipping_options.php');
	}
	
	
}

function tc_crm_create_product_metabox($fields){
	
	//$fields = array();
	$prefix = '_tc_crm_';
	//delete_option('tc_crm_product_order_items');
	
	$productsArray = get_option('tc_crm_product_order_items');
	
	//error_log(var_export($productsArray, 1));
	
	if(!$productsArray){
		//require_once(dirname(__FILE__) .'/includes/AmericommerceService.php');
		$productsArray = json_decode(file_get_contents(TASTY_PLUGIN_INC_DIR.'products.json'), true);
		error_log(var_export($productsArray, 1));
		
		//$acService = new AmericommerceService();
		//$productsArray = $acService->getAllProducts();
	}
	

	update_option('tc_crm_product_order_items', $productsArray);

	
	$productsDropDown = array(
       	'name' => 'Choose Product',
       	'desc' => 'Select product',
       	'id' => $prefix . 'product_list',
       	'type' => 'product_select',
		'options' => array()
	);	

	foreach ($productsArray as $product) {
		$productName = $product['itemName'];
		$productID = $product['itemID'];

		$productsDropDown['options'][] = array('name'=>$productName, 'value'=>$productID);
	}
	
	$fields[] = $productsDropDown;
	

	$orderItemsTable = array(
       	'name' => 'Order Items',
       	'id' => $prefix . 'order_items_table',
       	'type' => 'order_items_table',
	);
	
	$fields[] = $orderItemsTable;
	return $fields;
	
	
}

function panalo_styles_inline(){
	?>
<style type="text/css">
	.order-items-radio {
		margin-left:15px
	}	
	.event-items-radio {
		float: left;
		width: 20%;	
	}
	
	#panalo-order-types-div {
		background-color:#FFFFE0;
		border:1px solid #E6DB55;
		padding:5px;
		margin-bottom:5px;
	}	
	#submitErrorBox {
		padding: 10px;
		border:1px solid #E6DB55;
		font-weight:bold;
		display:none;
	}
	
</style>
	
	<?php
}


function tc_crm_admin_enqueue_scripts(){
	wp_enqueue_script('jquery');
	wp_enqueue_script('jquery-ui-core');
	
	wp_register_script('validate','http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js' , array('jquery'));
	wp_register_script('validate-additional-methods','http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/additional-methods.min.js' , array('jquery'));
	wp_enqueue_script( 'validate' ); 
	wp_enqueue_script( 'validate-additional-methods' );
	wp_enqueue_script( 'ba-debug', TC_SHARED_JS_DIR .'/ba-debug.js', __FILE__ );
	

	wp_enqueue_script('jquery-ui-datepicker', TC_JS_DIR . 'jquery.ui.datepicker.min.js', array('jquery', 'jquery-ui-core') );
	wp_enqueue_style('jquery.ui.theme', plugins_url('/css/jqueryui/smoothness/jquery-ui-1.8.16.custom.css', __FILE__));

	
	
}



function tc_crm_scripts(){
	
	echo <<<HTML
	<script type="text/javascript">


	function stringify(input){
		return JSON.stringify(input);
	}
	
	
	</script>
HTML;
	

}




?>