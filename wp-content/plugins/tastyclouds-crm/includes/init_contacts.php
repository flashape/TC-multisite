<?php 
add_action('init', 'register_tc_crm_contact_posttype');
add_action('init', 'tc_crm_add_meta_boxes',99999);
//add_action('add_meta_boxes', 'tc_crm_add_meta_boxes');
add_filter( 'cmb_meta_boxes', 'tc_crm_create_metaboxes' );
//add_action( 'add_meta_boxes_ticket', 'tc_crm_add_tabbed_order_metabox' );
add_action( 'add_meta_boxes_tc_crm_order', 'tc_crm_order_add_tabbed_order_metabox' );

function tc_crm_add_meta_boxes(){
    if (!class_exists('cmb_Meta_Box')) {
		require_once(CHILD_DIR . '/lib/metabox/init.php'); 
    }

	if (!is_order_post() ){
		add_filter('title_save_pre','tc_crm_save_custom_contact_title');
	}
	
   

}




function tc_crm_order_add_tabbed_order_metabox(){
	add_meta_box( 'tabbedbox' , __('Order Info'), 'tc_crm_render_order_info_mb', 'tc_crm_order', 'advanced', 'core'/*,array()*/);
	//add_meta_box( 'tagsdiv-tc_crm_tax_box' , __('CRM Tags'), 'tc_crm_render_tax_mb', 'tc_crm_order', 'side', 'core');
	
	remove_meta_box( 'categorydiv', 'tc_crm_order', 'side' );      
	remove_meta_box( 'tagsdiv-panalo_order_type', 'tc_crm_order', 'side' );      
	remove_meta_box( 'panalo_event_typediv', 'tc_crm_order', 'side' );      
	add_action( 'admin_print_scripts-post.php', 'tc_crm_move_order_metabox_scripts' );
	add_action( 'admin_print_scripts-post-new.php', 'tc_crm_move_order_metabox_scripts' );
	add_action('admin_footer', 'panalo_contact_admin_footer');
	add_action('admin_footer', 'panalo_order_admin_footer');
	
}

function panalo_order_admin_footer(){
	$productsArray = get_option('tc_crm_product_order_items');
	$productsJson = json_encode($productsArray);
	
	$shippingOptions = get_option('tc_crm_shipping_options');
	$shippingOptionsJson = json_encode($shippingOptions);
	
	?>
	<script>
		var productsJson = <?php echo $productsJson;?>;
		var shippingOptionsJson = <?php echo $shippingOptionsJson;?>;

	</script>
	<?php
	
	
}

function panalo_contact_admin_footer(){
	$autoCompleteContacts = get_posts(array('post_type' => 'tc_crm_contact', 'numberposts'=>-1));

	$contactAutocompleteItems = array();
	
	foreach ($autoCompleteContacts as $contact) {
		$contactName = $contact->post_title;
		$contactID = $contact->ID;
		$contactAutocompleteItems[] = array('label'=>$contactName, 'value'=>$contactID);
	}
	
	?>
	<script>
		var contactAutocompleteJSON = <?php echo json_encode($contactAutocompleteItems);?>;
		// jQuery(document).ready(function($){
		// 	
		// 	$('#titlewrap').append('<span class="description">Enter title of project and save to enable Activities.</span>');
		// });
	</script>
	<?php
}



function tc_crm_move_order_metabox_scripts(){
	wp_enqueue_script( 'caret', TC_SHARED_JS_DIR. 'jquery.caret.1.02.js');
	//wp_enqueue_script( 'caret', TC_JS_DIR. 'jquery.caret.1.02.js');
	//wp_enqueue_script('jquery-forcepriceonly', TC_JS_DIR.'tc/jquery.forcepriceonly.js', array('caret'));
	wp_enqueue_script('jquery-forcepriceonly', TC_SHARED_JS_DIR.'jquery.forcepriceonly.js', array('caret'));
	
	wp_enqueue_script('tc-utils', TC_JS_DIR.'tc/utils.js');
	
	wp_enqueue_script( 'signals', TC_JS_DIR . 'signals.js');
	wp_enqueue_script( 'js-class', TC_JS_DIR . 'jsclassextend/js.class.js');
	wp_enqueue_script( 'js-error', TC_JS_DIR . 'jsclassextend/js.error.js');
	wp_enqueue_script( 'js-eventdispatcher', TC_JS_DIR . 'jsclassextend/js.error.js');
	wp_enqueue_script( 'js-interface', TC_JS_DIR . 'jsclassextend/js.interface.js');
	wp_enqueue_script( 'js-utils', TC_JS_DIR . 'jsclassextend/js.utils.js');
	
	
	wp_enqueue_script('tc-signal-context', TC_JS_DIR.'tc/SignalContext.js');
	wp_enqueue_script('tc-admin-ajax-service', TC_JS_DIR.'tc/service/AdminAjaxService.js');
	wp_enqueue_script('tc-customer-info-view-mediator', TC_JS_DIR.'tc/view/mediators/CustomerInfoViewMediator.js');
	wp_enqueue_script('tc-order-items-view-mediator', TC_JS_DIR.'tc/view/mediators/OrderItemsViewMediator.js');
	wp_enqueue_script('tc-product-manager', TC_JS_DIR.'tc/controller/TC_ProductManager.js');
	
	
	wp_enqueue_script('tc-crm-move-order-metaboxes', TC_JS_DIR . 'admin_orders.js' );
	wp_enqueue_script('jquery-ui-widget');
	wp_enqueue_script('jquery-ui-autocomplete');
	wp_enqueue_script('jquery-ui-accordion', TC_JS_DIR . 'jquery.ui.accordion.min.js', array('jquery', 'jquery-ui-core', 'jquery-ui-widget') );
	
}

function tc_crm_render_tax_mb(){
	echo '<div style="height:330px;" id="accordion">'.
	    '<h5><a href="#">Contact Method</a></h5>'.
	    '<div id="panalo-poc-div"></div>'.
	    '<h5><a href="#">Second header</a></h5>'.
	    '<div>Second content</div>'.
	'</div>';
}

function tc_crm_render_order_info_mb(){
	global $post, $post_id;

	$enabledCheckboxID = '_tc_crm_shipping_enabled';
	//$meta = get_post_meta( $post_id, $enabledCheckboxID, true );
	//$meta = get_post_meta( $post->ID, $enabledCheckboxID, true );
	$meta = get_metadata('post', $post->ID);
	//error_log(var_export($meta, 1));
	$enabledValue = @$meta[$enabledCheckboxID] ? $meta[$enabledCheckboxID] : 'off';
	$checkBoxField = "<input type='checkbox' id='{$enabledCheckboxID}' name='{$enabledCheckboxID}' " . checked( esc_attr( $enabledValue  ), 'on', false ) . " />";
	$checkBoxLabel = "<label for='{$enabledCheckboxID}'>Calculate Shipping : </label> ";
	//$desc = '<p class="howto">Quick zip is a shortcut to the Contact Info\'s zip field.</p>';
	$quickZip = 'Quick Zip: <input type="text" name="quickZip" id="quickZip" value=""  class="small-text" maxlength="5" />';
	
	$meta_contact_id = @$meta['_panalo_contact_id'][0];
	
	$contactSelectDiv = '<div class="alignright" style="margin-right:300px;" id="quick_contact_select">Quick Contact Select : <input type="text" id="panalo_contact_input"  /><input type="hidden" name="panalo_selected_contact" id="panalo_selected_contact" value="'.$meta_contact_id.'" /> </div>';


	$shipCheckboxDiv = "<div id='shipCheckboxDiv' style='margin-right:0px;clear:both;'>$checkBoxLabel $checkBoxField $quickZip </div>";

	$orderTypeNames = wp_get_object_terms( $post->ID, 'panalo_order_type' );
	$order_types = get_terms( 'panalo_order_type', 'hide_empty=0' );
	$orderTypeDiv = '<div id="panalo-order-types">Order Type:';
	
	$meta_order_type = @$meta['_panalo_order_type'][0];
	$meta_event_type = @$meta['_panalo_event_type'][0];
	$meta_event_date = @$meta['_panalo_event_date'][0];
	foreach ( $order_types as $term ) {
		$orderTypeDiv .= '<input type="radio" class="order-items-radio" name="_panalo_order_type" id="_panalo_order_type-'.$term->slug.'" value="'. $term->term_id . '" '.checked( $meta_order_type, $term->term_id, false ). '>';
		$orderTypeDiv .= '<label class="selectit" for="_panalo_order_type-'.$term->slug .'">'.$term->name.'</label>';	
	}	
	
	$orderTypeDiv .= '</div>';
	
	
	$names = wp_get_object_terms( $post->ID, 'panalo_event_type' );
	$event_types = get_terms( 'panalo_event_type', 'hide_empty=0' );
	$style = array_key_exists('_panalo_event_type', $meta) ? '' : 'style="display:none"';
	$eventTypeDiv = "<div id='panalo-event-types' $style >Event Type:";
	$eventTypeDiv .= '<ul>';
	foreach ( $event_types as $term ) {
		$eventTypeDiv .= '<li class="event-items-radio">';
		
		$eventTypeDiv .= '<input type="radio"  name="_panalo_event_type" id="_panalo_event_type-'.$term->slug.'" value="'. $term->term_id . '" '.checked( $meta_event_type, $term->term_id, false ). '>';
		$eventTypeDiv .= '<label class="selectit" for="_panalo_event_type-'.$term->slug .'">'.$term->name.'</label>';
		
		$eventTypeDiv .= '</li>';
		
	}
	$eventTypeDiv .= '</div>';
	
	
	$dateDiv = '<div id="panalo_order_date_div" class="alignright">';
	
	$dateDiv  .= 'Scheduled Date: <input name="_panalo_event_date" id="_panalo_event_date" style="width:100px;" class="tc_datepicker" type="text"  value="'.$meta_event_date.'" /><br/>';
	$dateDiv  .= '</div>'
	
	?>
	
	<div id="submitErrorBox" class="form-invalid"> 
	  <ul></ul> 
	</div>
		
	
	<div id="panalo-order-types-div">

		<?php echo $dateDiv ?>
		<p>
		<?php echo $orderTypeDiv ?>
		</p>

		<p>
		<?php echo $eventTypeDiv ?>
		</p>
	
		<p>
		<?php echo $shipCheckboxDiv ?>	
		</p>
	</div>
	
	<div id="order-info-tabs-wrapper">
		<?php echo $contactSelectDiv ?>
	    <ul class="davispress-meta-box-nav">
	    	<li id="tc_crm_order_form"><a href="javascript:void(0);">Order Items</a></li>
	        <li id="tc_crm_contact"><a href="javascript:void(0);">Contact Information</a></li>
	    </ul>
	    <div id="tc_crm_contact-tab" class="davispress-tab"></div>
		<div id="tc_crm_order_form-tab" class="davispress-tab" ></div>
	</div>

    <?php
	
}


// ----------------  
// Register Contact post types
// ---------------- 

function register_tc_crm_contact_posttype() {
	$labels = array(
	  'name' => _x('Contacts', 'post type general name'),
	  'singular_name' => _x('Contact', 'post type singular name'),
	  'add_new' => _x('Add New', 'Contact'),
	  'add_new_item' => __('Add New Contact'),
	  'edit_item' => __('Edit Contact'),
	  'new_item' => __('New Contact'),
	  'view_item' => __('View Contacts'),
	  'search_items' => __('Search Contacts'),
	  'not_found' =>  __('No Contact found'),
	  'not_found_in_trash' => __('No Contacts found in Trash'),
	  'parent_item_colon' => ''
	);
	//$supports = array('title','editor','custom-fields', 'revisions', 'thumbnail','excerpt','post-formats','page-attributes');
	
	$supports = array( 'comments');
	

	$post_type_args = array(
		'labels' 			=> $labels,
		'public' 			=> true,
		'show_ui' 			=> true,
		'publicly_queryable'=> true,
		'query_var'			=> 'tc_crm_contact',
		'capability_type' 	=> 'post',
		'has_archive' 		=> false,
		'hierarchical' 		=> false,
		'rewrite' 			=> array( 'slug' => 'contact', 'with_front' => false),
		'supports' 			=> $supports,
		'menu_position' 	=> TC_MENU_POSITION_CONTACT
	 );
	
  	register_post_type( 'tc_crm_contact', $post_type_args);
}


function tc_crm_create_metaboxes($meta_boxes) {
	$prefix = '_tc_crm_';
	//$meta_boxes = array();

	$meta_boxes[] = array(
    	'id' => 'client_information',
	    'title' => 'Contact Information',
	    'pages' => array('tc_crm_contact', 'tc_crm_order'), // post type
		'context' => 'advanced',
		'priority' => 'core',
		'show_names' => true, // Show field names left of input
	    'fields' => array(
	        array(
	            'name' => 'First Name',
	            'id' => $prefix.'contact_first_name',
	            // 'desc' => 'First Name',
	            'type' => 'text',
	        ),	        
	        array(
	            'name' => 'Last Name',
	            'id' => $prefix.'contact_last_name',
	            // 'desc' => 'Last Name',
	            'type' => 'text',
	        ),	        
	        array(
	            'name' => 'Company',
	            'id' => $prefix.'contact_company',
	            // 'desc' => 'Company',
	            'type' => 'text',
	        ),	 
			array(
	            'name' => 'Personal Email',
	            'id' => $prefix.'contact_personal_email',
	            // 'desc' => 'Personal Email',
	            'type' => 'text_email',
	        ),
		    array(
	            'name' => 'Website',
	            'id' => $prefix.'contact_url',
	            // 'desc' => 'Client URL',
	            'type' => 'text',
	        ),
	        array(
	            'name' => 'Personal Phone',
	            'id' => $prefix.'contact_personal_phone',
	            // 'desc' => 'Personal Phone',
	            'type' => 'text',
	        ),   
			array(
	            'name' => 'Personal Address 1',
	            'id' => $prefix.'contact_personal_address_1',
	            // 'desc' => 'Personal Address',
	            'type' => 'text',
	        ),    			
			array(
	            'name' => 'Personal Address 2',
	            'id' => $prefix.'contact_personal_address_2',
	            // 'desc' => 'Personal Address',
	            'type' => 'text',
	        ),    			
			array(
	            'name' => 'Personal Address City',
	            'id' => $prefix.'contact_personal_address_city',
	            // 'desc' => 'Personal Address',
	            'type' => 'text',
	        ),
			array(
	            'name' => 'Personal Address State',
	            'id' => $prefix.'contact_personal_address_state',
	            // 'desc' => 'Personal Address',
	            'type' => 'select',
	        ),    			
			array(
	            'name' => 'Personal Address Zip',
	            'id' => $prefix.'contact_personal_address_zip',
	            // 'desc' => 'Personal Address',
	            'type' => 'text_small',
	        )
	    )
	);
		// $contacts = get_posts(array('post_type' => 'tc_crm_contact', 'numberposts'=>-1));
		// $contactDropDown = array(
		// 	       	'name' => '',
		// 	       	//'desc' => 'Select existing contact',
		// 	       	'id' => $prefix . 'contact_list',
		// 	       	'type' => 'contact_select',
		// 	'options' => array()
		// );
		// 
		// $contactDropDown['options'][] = array('name'=>'-- Select A Contact --', 'value'=>'null');
		// 
		// 
		// foreach ($contacts as $contact) {
		// 	$contactName = $contact->post_title;
		// 	$contactID = $contact->ID;
		// 	$contactDropDown['options'][] = array('name'=>$contactName, 'value'=>$contactID);
		// }
		// //$meta_boxes[0]['fields'][] = $contactDropDown;
		// array_unshift($meta_boxes[0]['fields'], $contactDropDown);

		$meta_boxes[] = array(
		    'id' => 'tc_crm_notes',
		    'title' => 'Notes',
		    'pages' => array('tc_crm_order'), // post type
			'context' => 'normal',
			'priority' => 'low',
			'show_names' => false, // Show field names left of input
		    'fields' => array()
		);
		
		
		$meta_boxes[] = array(
		    'id' => 'tc_crm_order_items',
		    'title' => 'Order Items',
		    'pages' => array('tc_crm_order'), // post type
			'context' => 'advanced',
			'priority' => 'high',
			'show_names' => false, // Show field names left of input
		    'fields' => array()
		);
		
				
		
		$meta_boxes[] = array(
		    'id' => 'tc_crm_enter_payment_metabox',
		    'title' => 'Enter Payment',
		    'pages' => array('tc_crm_order'), // post type
			'context' => 'side',
			'priority' => 'default',
			'show_names' => true, // Show field names left of input
			'fields' => array(
		        array(
		            'name' => 'Payment Type',
		            'id' => $prefix.'payment_type',
		            /*'desc' => 'Payment Type',*/
		            'type' => 'select',
					'options' => array(
						array('name' => 'Square', 'value' => 'square'),		
						array('name' => 'Cash', 'value' => 'cash'),		
						array('name' => 'Check', 'value' => 'check'),		
					)
		        ),
			    array(
		            'name' => 'Amount:',
		            'id' => $prefix.'payment_amount',
		            'type' => 'text_payment_amount',
		        ),				
				array(
		            'name' => 'Note:',
		            'id' => $prefix.'payment_note',
		            'type' => 'text',
		        ),				
				array(
					'name' => '',
		            'id' => $prefix.'payment_submit',
		            'type' => 'payment_submit',
		        ),
			)
		);
		
		
	//}
	//print_r($meta_boxes);
 	return $meta_boxes;
}

add_action('cmb_render_text_email','tc_cms_render_text_email',10,2);
add_action('cmb_render_product_select','tc_cms_render_product_select',10,2);
//add_action('cmb_render_event_catering_select','tc_cms_render_event_catering_select',10,2);
add_action('cmb_render_order_items_table','tc_cms_render_order_items_table',10,2);
add_action('cmb_render_text_payment_amount','tc_cms_render_text_payment_amount',10,2);
add_action('cmb_render_payment_submit','tc_cms_render_payment_submit',10,2);
add_action('cmb_render_contact_select','tc_cms_render_contact_select',10,2);
function tc_cms_render_payment_submit($field,$meta) {
	echo '<a href="#" id="addPaymentButton" class="button-primary alignright">Add Payment</a>';
	echo '<span class="description alignright" style="text-align:right;">Order is automatically saved upon adding payment.</span>';
}
function tc_cms_render_text_email($field,$meta) {
    echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'], '" />','<p class="cmb_metabox_description">', $field['desc'], '</p>';
}

function tc_cms_render_text_payment_amount($field,$meta) {
	//<input type="text" name="customItemPrice" value="" id="customItemPrice" maxlength="6" style="width:50px"></td>
    echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'], '" maxlength="7" style="width:50px" />';
}

function tc_cms_get_payment_rows(){
	$paymentRows = '';
	
	if (isset($_GET['action']) && $_GET['action'] == 'edit'){
		global $post;
		//do_dump($_POST);
		$paymentIDs = get_post_meta( $post->ID, '_tc_crm_payment_id');
		if ($paymentIDs){
			$argument = array(
					'post_type' => 'tc_crm_payment',
					'include'=>implode(",", $paymentIDs)
					);
			//do_dump($argument);
			
			$paymentPosts = get_posts($argument);
			
 			//do_dump($paymentPosts);
			
			foreach($paymentPosts as $paymentPost){
				$paymentMeta = get_metadata('post', $paymentPost->ID);
				//do_dump($paymentMeta);
				
				$amount = number_format($paymentMeta['_tc_crm_payment_amount'][0], 2);
				$paymentType = $paymentMeta['_tc_crm_payment_method'][0];
				$row = <<<HTML
				
					<tr class="paymentRow">
						<td colspan="4" style="text-align:right">Payment:</td>
						<td style="text-align:right" class="paymentTotal">$amount<td>
						<td></td>
					</tr>
HTML;
	
				$paymentRows .= $row;
			}
		}	
	}


	return $paymentRows;
	
}

function tc_cms_render_order_items_table($field, $meta){
		$loaderGif = plugins_url('/tastyclouds-crm/images/ajax-loader-circle.gif');
		$paymentRows = tc_cms_get_payment_rows();
		

		
		
		
		echo <<<HTML
		<table id="orderItemsTable" class="widefat">
			<tr>
				<th class="row-title" style="text-align:left">Item</th>
				<th style="text-align:left">Description</th>
				<th style="text-align:left">Price</th>
				<th style="text-align:left">Quantity</th>				
				<th style="text-align:right">Total</th>
				<th style="text-align:right">Remove Item</th>
			</tr>
			<tr id="subtotalRow" class="alternate">
				<td colspan="4" style="text-align:right">Subtotal</td>
				<td style="text-align:right" id="subtotalField">$0.00<td>
				<td></td>
			</tr>

			<tr id="discountRow">
				<td colspan="4" style="text-align:right">
					Discount:
					<input type="text" name="discountAmount" value="" id="discountAmount">
					<select name="discountType" id="discountType" size="1">
						<option value="percent">% Off</option>
						<option value="dollar">Dollars Off</option>
					</select>
				</td>
				<td id="discountRowTotal" class="discountRowTotal" style="text-align:right"></td>
				<td></td>
			</tr>			
			<tr id="shippingRow" style="display:none">
				<td colspan="4" style="text-align:right">
					Shipping:
					<select name="shipmentType" id="shipmentType" size="1">
					</select>
				</td>
				<td id="shippingRowTotal" class="shippingRowTotal" style="text-align:right"></td>
				<td>
					<div id="loadingShipping">
					  <p style="font-size:10px"><img src="$loaderGif" />Loading shipping...</p>
					</div>
				</td>
			</tr>			
			<tr id="shippingDiscountRow">
				<td id="shippingDiscountTitle" colspan="4" style="text-align:right">
				</td>
				<td id="shippingDiscountRowTotal" class="shippingDiscountRowTotal" style="text-align:right"></td>
				<td>
					
				</td>
			</tr>			
			<tr id="couponRow">
				<td colspan="4" style="text-align:right">
					Coupon Code / Gift Certificate:
					<input type="text" name="couponCode" value="" id="couponCode">
					<a href="#" id="applyCouponButton" class="button-secondary">Apply Coupoon</a>
					<a href="#" id="removeCouponButton" class="button-secondary" style="display:none;">Remove Coupoon</a>
					<div id="validatingCoupon">
					  <p style="font-size:10px"><img src="$loaderGif" />Validating copon...</p>
					</div>
					<div id="couponTitle"><div>
				</td>
				<td id="couponRowTotal" class="couponRowTotal" style="text-align:right"></td>
				<td></td>
			</tr>

			<tr id="taxRow">
				<td id="taxRowTitle" colspan="4" style="text-align:right">
					<input type="checkbox" name="_tc_crm_tax_enabled" id="_tc_crm_tax_enabled">
					Tax<br/>
					<span class="description">Add 8.75% Tax to this order</span>
				</td>
				<td id="taxRowTotal" class="taxRowTotal" style="text-align:right"></td>
				<td>
					
				</td>
			</tr>			
			<tr id="totalRow">
				<td colspan="4" style="text-align:right">Total</td>
				<td style="text-align:right" id="totalField">$0.00<td>
				<td></td>
			</tr>
			$paymentRows
			<tr id="balanceDueRow">
				<td colspan="4" style="text-align:right;font-weight:bold">Balance Due</td>
				<td style="text-align:right;font-weight:bold" id="balanceDueField">$0.00<td>
				<td></td>
			</tr>	

		</table>
HTML;
}



function tc_cms_render_product_select($field, $meta){
	
	echo '<select name="', $field['id'], '" id="', $field['id'], '">';
	foreach ($field['options'] as $option) {
		echo '<option value="', $option['value'], '"', $meta == $option['value'] ? ' selected="selected"' : '', '>', $option['name'], '</option>';
	}
	echo '</select>';
	echo '<a href="#" id="addProductButton" class="button-primary">Add Selected Item</a>'; 
	
	echo '<p>';
	echo '<input type="button" id="addDeliveryButton" class="button-secondary alignleft" value="Add Delivery" />';
	echo '<input type="button" id="addServingsButton" class="button-secondary alignleft" value="Add Servings" />';
	echo '<input type="button" id="addFlavorButton" class="button-secondary alignleft" value="Add Flavor" />';
	echo '<input type="button" id="addHoursButton" class="button-secondary alignleft" value="Add Hours" />';
	echo '<input type="button" id="addCustomChargeButton" class="button-secondary alignleft" value="Add Custom Charge" />';

	echo '</p>';
	// echo '<p class="cmb_metabox_description">', $field['desc'], '</p>';
	
}





function tc_cms_render_contact_select($field, $meta){
	echo '<span style="font-weight:bold;font-size:larger;">Contact Details : </span>';
	echo '<select name="', $field['id'], '" id="', $field['id'], '">';
	foreach ($field['options'] as $option) {
		echo '<option value="', $option['value'], '"', $meta == $option['value'] ? ' selected="selected"' : '', '>', $option['name'], '</option>';
	}
	echo '</select>';
	
	echo '<a href="#" id="createNewContactButton" class="button-secondary alignright">Clear & Reset</a>';
	//echo '<p class="cmb_metabox_description">', $field['desc'], '</p>';
	

	
}

add_filter('cmb_validate_text_email','tc_cms_validate_text_email');
function tc_cms_validate_text_email($new) {
	//return $new.'00000';
	if(filter_var($new, FILTER_VALIDATE_EMAIL)){
		return $new;
	}else{
		return "invalid email entered";
	}
    // if (!is_email($new)) {$new = "";}   
    // return $new;
}


function tc_crm_save_custom_contact_title($my_post_title){
		error_log("tc_crm_save_custom_contact_title , my_post_title : $my_post_title");
		global $post, $post_ID;
		error_log(var_export($_POST, 1));
		if (@$_POST['post_type'] == 'tc_crm_contact' && @$_POST['action'] != 'panalo_insert_activity'){
			return $_POST['_tc_crm_contact_first_name'] . ' '.$_POST['_tc_crm_contact_last_name'];
		}else{
			return $my_post_title;	
		}
}
add_filter('title_save_pre','tc_crm_save_custom_order_title');
function tc_crm_save_custom_order_title($my_post_title){
		
		global $post, $post_ID;
		
		if (is_order_post() ){
			error_log('my_post_title : '.$my_post_title);
			if ($my_post_title == "temp_contact_title"){
				return $_POST['_tc_crm_contact_first_name'] . ' '.$_POST['_tc_crm_contact_last_name'];
			}
			
			
			$pos = strpos($my_post_title, 'Payment');
			if ($pos === false ){
				return 'Shipping Order: '. @$_POST['_tc_crm_contact_first_name'] . ' '.@$_POST['_tc_crm_contact_last_name'];
			}else{
				return $my_post_title;
			}
		}else{
			return $my_post_title;	
		}
		
}

?>