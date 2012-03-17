<?php

global $post, $post_id ,$pagenow;

global $cartID;
error_log("pagenow : $pagenow");
if ($pagenow == 'post-new.php'){
	$cartID = CartAjax::create();
	error_log("cartID : $cartID");
	
}

$enabledCheckboxID = '_tc_shipping_enabled_checkbox';
//$meta = get_post_meta( $post_id, $enabledCheckboxID, true );
//$meta = get_post_meta( $post->ID, $enabledCheckboxID, true );
$meta = get_metadata('post', $post->ID);
//error_log(var_export($meta, 1));
$enabledValue = @$meta[$enabledCheckboxID] ? $meta[$enabledCheckboxID] : 'off';
$checkBoxField = "<input type='checkbox' id='{$enabledCheckboxID}' name='{$enabledCheckboxID}' " . checked( esc_attr( $enabledValue  ), 'on', false ) . " />";
$checkBoxLabel = "<label for='{$enabledCheckboxID}'>Calculate Shipping : </label> ";
//$desc = '<p class="howto">Quick zip is a shortcut to the Contact Info\'s zip field.</p>';
$quickZip = 'Quick Zip: <input type="text" name="quickZip" id="quickZip" value="11730"  class="small-text" maxlength="5" />';

$meta_contact_id = @$meta['_tc_contact_id'][0];

$contactSelectDiv = '<div class="alignright" style="margin-right:100px;" id="quick_contact_select">Quick Contact Select : <input type="text" id="tc_contact_input"  /><input type="hidden" name="tc_selected_contact" id="tc_selected_contact" value="'.$meta_contact_id.'" /> </div>';


$shipCheckboxDiv = "<div id='shipCheckboxDiv' style='margin-right:0px;clear:both;'>$checkBoxLabel $checkBoxField $quickZip </div>";


$orderTypeNames = wp_get_object_terms( $post->ID, 'tc_order_type' );
$order_types = get_terms( 'tc_order_type', 'hide_empty=0' );
$orderTypeDiv = '<div id="tc-order-types">Order Type:';

$meta_order_type = @$meta['_tc_order_type'][0];
$meta_event_type = @$meta['_tc_event_type'][0];
$meta_event_date = @$meta['_tc_event_date'][0];
foreach ( $order_types as $term ) {
	$orderTypeDiv .= '<input type="radio" class="order-items-radio" name="_tc_order_type" id="_tc_order_type-'.$term->slug.'" value="'. $term->term_id . '" '.checked( $meta_order_type, $term->term_id, false ). '>';
	$orderTypeDiv .= '<label class="selectit" for="_tc_order_type-'.$term->slug .'">'.$term->name.'</label>';	
}	

$orderTypeDiv .= '</div>';




$names = wp_get_object_terms( $post->ID, 'tc_event_type' );
$event_types = get_terms( 'tc_event_type', 'hide_empty=0' );
$style = array_key_exists('_tc_event_type', $meta) ? '' : 'style="display:none"';
$eventTypeDiv = "<div id='tc-event-types' $style >Event Type:";
$eventTypeDiv .= '<ul>';
foreach ( $event_types as $term ) {
	$eventTypeDiv .= '<li class="event-items-radio">';
	
	$eventTypeDiv .= '<input type="radio"  name="_tc_event_type" id="_tc_event_type-'.$term->slug.'" value="'. $term->term_id . '" '.checked( $meta_event_type, $term->term_id, false ). '>';
	$eventTypeDiv .= '<label class="selectit" for="_tc_event_type-'.$term->slug .'">'.$term->name.'</label>';
	
	$eventTypeDiv .= '</li>';
	
}
$eventTypeDiv .= '</div>';




$dateDiv = '<div id="tc_order_date_div" class="alignright">';

$dateDiv  .= 'Scheduled Date: <input name="_tc_event_date" id="_tc_event_date" style="width:100px;" class="tc_datepicker" type="text"  value="'.$meta_event_date.'" /><br/>';
$dateDiv  .= '</div>';






$loaderGif = plugins_url('/tastyclouds-crm/images/ajax-loader-circle.gif');

function tc_get_order_payment_rows(){
	$paymentRows = '';
	
// 	if (isset($_GET['action']) && $_GET['action'] == 'edit'){
// 		global $post;
// 		//do_dump($_POST);
// 		$paymentIDs = get_post_meta( $post->ID, '_tc_crm_payment_id');
// 		if ($paymentIDs){
// 			$argument = array(
// 					'post_type' => 'tc_payment',
// 					'include'=>implode(",", $paymentIDs)
// 					);
// 			//do_dump($argument);
// 			
// 			$paymentPosts = get_posts($argument);
// 			
//  			//do_dump($paymentPosts);
// 			
// 			foreach($paymentPosts as $paymentPost){
// 				$paymentMeta = get_metadata('post', $paymentPost->ID);
// 				//do_dump($paymentMeta);
// 				
// 				$amount = number_format($paymentMeta['_tc_crm_payment_amount'][0], 2);
// 				$paymentType = $paymentMeta['_tc_crm_payment_method'][0];
// 				$row = <<<HTML
// 				
// 					<tr class="paymentRow">
// 						<td colspan="4" style="text-align:right">Payment:</td>
// 						<td style="text-align:right" class="paymentTotal">$amount<td>
// 						<td></td>
// 					</tr>
// HTML;
// 	
// 				$paymentRows .= $row;
// 			}
// 		}	
// 	}


	return $paymentRows;
	
}

$paymentRows = tc_get_order_payment_rows();

	

?>

<style type="text/css">

/* Column Classes
------------------------------------------------------------ */

.five-sixths,
.four-fifths,
.four-sixths,
.one-fifth,
.one-fourth,
.one-half,
.one-sixth,
.one-third,
.three-fifths,
.three-fourths,
.three-sixths,
.two-fifths,
.two-fourths,
.two-sixths,
.two-thirds {
	float: left;
	margin: 0 0 20px;
	padding-left: 3%;
}

.one-half,
.three-sixths,
.two-fourths {
	width: 48%;
}

.one-third,
.two-sixths {
	width: 31%;
}

.four-sixths,
.two-thirds {
	width: 65%;
}

.one-fourth {
	width: 22.5%;
}

.three-fourths {
	width: 73.5%;
}

.one-fifth {
	width: 17.4%;
}

.two-fifths {
	width: 37.8%;
}

.three-fifths {
	width: 58.2%;
}

.four-fifths {
	width: 78.6%;
}

.one-sixth {
	width: 14%;
}

.five-sixths {
	width: 82%;
}

.first {
	clear: both;
	padding-left: 0;
}



	.order-items-radio {
		margin-left:15px
	}	
	.event-items-radio {
		float: left;
		width: 20%;	
	}
	
	#tc-order-types-div {
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
	
	.itemName{
		color:#990000;
		font-weight:bold;
	}
	
	.customItemTitleInput{
		color:#990000;
		font-weight:bold;
	}
			
	.titleColumn{
		text-align:left;
		
	}
			
	.descriptionColumn{
		text-align:left;
	}
		
			
	.itemPriceColumn{
		text-align:right;
	}
					
	.quantityColumn{
		text-align:left;
	}
		
			
	.rowTotalColumn{
		text-align:right;
	}
					
	.removeItemColumn{
		text-align:right;
	}
						
	.addNextItemColumn{
		text-align:right;
	}
							
	.address-form-label-column{
		text-align:right;
		font-size:12px;
		color:#555;
	}
	
	.balanceDue {
		text-align:right;
		font-weight:bold;
		font-size:14px !important;
		color:#990000 !important;
		
	}
		
	#addressDiv{
		width:825px;
		clear:both;
	}
					

								
	#billingAddressDiv{
		float:left; 
		width: 400px; 
		padding: 5px 0px 5px 0px; 
		text-align: left;
	}
			

	#shippingAddressDiv{
		float:right;
		width: 400px; 
		padding: 5px 0px 5px 0px; 
		text-align: right; 

	}
	
</style>




<div class="tc_metabox">
	<input type="hidden" name="cartID" id="cartID" value="<?php global $cartID; echo $cartID ?>" />
	<input type="hidden" name="sessionID" id="sessionID" value="<?php echo session_id() ?>" />
	<div id="submitErrorBox" class="form-invalid"> 
	  <ul></ul> 
	</div>
	
	<div id="tc-order-types-div">

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
	
	<div id="orderDetailsTabs" >
		<?php echo $contactSelectDiv ?>
		<ul id="orderDetailsTabsList">
			<li><a href="#orderItemsTab">Order Items</a></li>
			<li><a href="#contactInfoTab">Contact Information</a></li>
		</ul>
		
		<div id="orderItemsTab" style="padding-left:0px;padding-right:0px;padding-top:0px;">
			
			<div style="margin:10px;">
				Select Product/Service : <input type="text" id="tc_product_input"  />
				<a class="button-secondary" href="#" id="customItemButton" title="Add Custom Item">Add Custom Item</a>
			</div>
			
			<table id="orderItemsTable" class="widefat">
				<tr>
					<th class="row-title" style="text-align:left">Item</th>
					<th style="text-align:left">Description</th>
					<th style="text-align:left">Price</th>
					<th style="text-align:left">Quantity</th>				
					<th style="text-align:right">Total</th>
					<th style="text-align:right">Add Item</th>
					<th style="text-align:right">Remove Item</th>
				</tr>
				<tr id="subtotalRow" class="alternate">
					<td colspan="4" style="text-align:right">Subtotal</td>
					<td style="text-align:right" id="subtotalField">$0.00<td>
					<td></td>
					<td></td>
				</tr>

				<tr id="discountRow">
					<td colspan="4" style="text-align:right">
						Discount:
						<input type="text" value="0" id="discountAmountInput">
						<select id="discountTypeDropdown"  size="1">
							<option value="percent">% Off</option>
							<option value="dollar">Dollars Off</option>
						</select>
					</td>
					<td id="discountRowTotal" class="discountRowTotal" style="text-align:right"></td>
					<td></td>
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
						  <p style="font-size:10px"><img src="<?php echo $loaderGif?>" />Loading shipping...</p>
						</div>
					</td>
					<td></td>
				</tr>			
				<tr id="shippingDiscountRow">
					<td id="shippingDiscountTitle" colspan="4" style="text-align:right">
					</td>
					<td id="shippingDiscountRowTotal" class="shippingDiscountRowTotal" style="text-align:right"></td>
					<td>

					</td>
					<td></td>
					
				</tr>			
				<tr id="couponRow">
					<td colspan="4" style="text-align:right">
						Coupon Code / Gift Certificate:
						<input type="text" value="" id="couponCodeInput">
						<a href="#" id="applyCouponButton" class="button-secondary">Apply Coupon</a>
						<a href="#" id="removeCouponButton" class="button-secondary" style="display:none;">Remove Coupoon</a>
						<div id="validatingCoupon">
						  <p style="font-size:10px"><img src="<?php echo $loaderGif?>" />Validating copon...</p>
						</div>
						<div id="couponTitle"><div>
					</td>
					<td id="couponRowTotal" class="couponRowTotal" style="text-align:right"></td>
					<td></td>
					<td></td>
					
				</tr>

				<tr id="taxRow">
					<td id="taxRowTitle" colspan="4" style="text-align:right">
						<input type="checkbox" id="_tc_tax_enabled">
						Tax<br/>
						<span class="description">Add 8.75% Tax to this order</span>
					</td>
					<td id="taxRowTotal" class="taxRowTotal" style="text-align:right"></td>
					<td>

					</td>
					<td></td>
					
				</tr>			
				<tr id="totalRow">
					<td colspan="4" style="text-align:right">Order Total</td>
					<td style="text-align:right" id="totalField">$0.00<td>
					<td></td>
				</tr>
				<?php echo $paymentRows ?>
				<tr id="balanceDueRow">
					<td colspan="4" class="balanceDue">Balance Due</td>
					<td id="balanceDueField"  class="balanceDue">$0.00<td>
					<td></td>
					<td></td>
					
				</tr>	

			</table>
		</div>
		
				
		<div id="contactInfoTab" style="padding-left:0px;padding-right:0px;padding-top:0px;text-align:center;width:100%;">
			<div style="width: 600px;margin: 0 auto">
			<div class="one-half first">
				<table id="customerAddressTable">
					<tbody>
						<tr>
							<td class="address-form-label-column">First Name:</td>
							<td style="text-align:left"> <input type="text" name="customer_address_first_name"  id="customer_address_first_name"  /></td>
						</tr>
						<tr>
							<td class="address-form-label-column">Last Name:</td>
							<td style="text-align:left"> <input type="text" name="customer_address_last_name"  id="customer_address_last_name"  /></td>
						</tr>
						<tr>
							<td class="address-form-label-column">Email:</td>
							<td style="text-align:left"> <input type="text" name="customer_email"  id="customer_email"  /></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="one-half">
				<table id="customerAddressTable2">
					<tbody>
						<tr>
							<td class="address-form-label-column">Phone:</td>
							<td style="text-align:left"> <input type="text" name="customer_phone"  id="customer__phone"  /></td>
						</tr>
						<tr>
							<td class="address-form-label-column">Company:</td>
							<td style="text-align:left"> <input type="text" name="customer_company"  id="customer_company"  /></td>
						</tr>
					</tbody>
				</table>
			</div>

			</div>	
			<div id="addressDiv" >
				<div id="billingAddressDiv">
					<table id="billingAddressTable" class="widefat">
						<tbody>
							<tr>
								<td class="address-form-label-column">Address Book:</td>
								<td style="text-align:left"><select id="addressBookSelect"></select></td>
							</tr>
							<tr>
								<td class="address-form-label-column">First Name:</td>
								<td style="text-align:left"> <input type="text" name="billing_address_first_name"  id="billing_address_first_name"  /></td>
							</tr>
							<tr>
								<td class="address-form-label-column">Last Name:</td>
								<td style="text-align:left"> <input type="text" name="billing_address_last_name"  id="billing_address_last_name"  /></td>
							</tr>
							<tr>
								<td class="address-form-label-column">Company:</td>
								<td style="text-align:left"> <input type="text" name="billing_address_company"  id="billing_address_company"  /></td>
							</tr>
							<tr>
								<td class="address-form-label-column">Address Line 1:</td>
								<td style="text-align:left"> <input type="text" name="billing_address_line_1"  id="billing_address_line_1"  /></td>
							</tr>
							<tr>
								<td class="address-form-label-column">Address Line 2:</td>
								<td style="text-align:left"> <input type="text" name="billing_address_line_2"  id="billing_address_line_2"  /></td>
							</tr>
							<tr>
								<td class="address-form-label-column">City:</td>
								<td style="text-align:left"> <input type="text" name="billing_address_city"  id="billing_address_city"  /></td>
							</tr>
							<tr>
								<td class="address-form-label-column">State:</td>
								<td style="text-align:left"> <select name="billing_address_state"  id="billing_address_state"></select></td>
							</tr>
							<tr>
								<td class="address-form-label-column">Zip:</td>
								<td style="text-align:left"> <input type="text" name="billing_address_zip"  id="billing_address_zip"  /></td>
							</tr>
							<tr>
								<td class="address-form-label-column">Country:</td>
								<td style="text-align:left"> <input type="text" name="billing_address_country"  id="billing_address_country"  /></td>
							</tr>
						</tbody>
					</table>
				</div>
				
				<div id="shippingAddressDiv">
					<table id="shippingAddressTable" class="widefat">
						<tbody>
							<tr>
								<td class="address-form-label-column">Address Book:</td>
								<td style="text-align:left"><select id="addressBookSelect"></select></td>
							</tr>
							<tr>
								<td class="address-form-label-column">First Name:</td>
								<td style="text-align:left"> <input type="text" name="shipping_address_first_name"  id="shipping_address_first_name"  /></td>
							</tr>
							<tr>
								<td class="address-form-label-column">Last Name:</td>
								<td style="text-align:left"> <input type="text" name="shipping_address_last_name"  id="shipping_address_last_name"  /></td>
							</tr>
							<tr>
								<td class="address-form-label-column">Company:</td>
								<td style="text-align:left"> <input type="text" name="shipping_address_company"  id="shipping_address_company"  /></td>
							</tr>
							<tr>
								<td class="address-form-label-column">Address Line 1:</td>
								<td style="text-align:left"> <input type="text" name="shipping_address_line_1"  id="shipping_address_line_1"  /></td>
							</tr>
							<tr>
								<td class="address-form-label-column">Address Line 2:</td>
								<td style="text-align:left"> <input type="text" name="shipping_address_line_2"  id="shipping_address_line_2"  /></td>
							</tr>
							<tr>
								<td class="address-form-label-column">City:</td>
								<td style="text-align:left"> <input type="text" name="shipping_address_city"  id="shipping_address_city"  /></td>
							</tr>
							<tr>
								<td class="address-form-label-column">State:</td>
								<td style="text-align:left"> <select name="shipping_address_state"  id="shipping_address_state"></select></td>
							</tr>
							<tr>
								<td class="address-form-label-column">Zip:</td>
								<td style="text-align:left"> <input type="text" name="shipping_address_zip"  id="shipping_address_zip"  /></td>
							</tr>
							<tr>
								<td class="address-form-label-column">Country:</td>
								<td style="text-align:left"> <input type="text" name="shipping_address_country"  id="shipping_address_country"  /></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div style="clear: both"></div>
			</div>
		</div>
		<div style="clear: both"></div>
		
		
		
		
	</div>
	
</div>



<?php
function onOrderDetailsMetaboxFooterAction() {
	require_once(TASTY_CMS_PLUGIN_INC_DIR .'utils/AutocompleteUtils.php');
	$contactAutocompleteJSON = AutocompleteUtils::createContactModel();
	$productAutocompleteJSON = AutocompleteUtils::createProductModel();
	
	$shippingOptions = get_option('tc_shipping_options');
	$shippingOptionsJSON = json_encode($shippingOptions);
	
?>
	
<script type="text/javascript">
//var signalContext = new SignalContextClass();
var ordersAjaxService;
var customerInfoViewMediator;
var orderItemsViewMediator;


jQuery(document).ready(function($){
	
	contactAutocompleteJSON = <?php echo $contactAutocompleteJSON ?>;
	productAutocompleteJSON = <?php echo $productAutocompleteJSON ?>;
	shippingOptionsJSON = <?php echo $shippingOptionsJSON ?>;
	
	ordersAjaxService = new OrdersAjaxServiceClass();
	customerInfoViewMediator = new CustomerInfoViewMediatorClass(jQuery('#client_information'));
	orderItemsViewMediator = new OrderItemsViewMediatorClass(jQuery('#contactInfoTab'));
	
	$('#titlediv').hide();
	$('#submitdiv').hide();
	$("#loadingShipping").hide();
	$("#validatingCoupon").hide();
	
	
	
	var shippingDropDown = $('#shipmentType');
	var fedExOptions = shippingOptionsJSON.FedEx.services;

	
	$.each(fedExOptions, function(key, shippingInfo) {
		var optionValue = shippingInfo.value;
		var option = $('<option>', { value : optionValue }).text(shippingInfo.name);
		option.data('shippingMethod', shippingInfo);
	    shippingDropDown.append(option); 
	});
	
	
	
	$('#addPaymentButton').on('click', function() {
		$('#publish').click();
	    return false;
	});
	
	
	
	$('#saveOrderButton').on('click', function() {
		$('#publish').click();
	    return false;
	});
		

	
	$('#quickZip').addClass('copyZip');
	
	$('#_tc_crm_contact_personal_address_zip').addClass('copyZip');
	
	// keeps the "Quick Zip" and contact zip text fields in sync
	$(".copyZip").keyup(function(){
        $(".copyZip").val($(this).val());
    });

	$( "#orderDetailsTabs" ).tabs();
	
	

	$('#tc-order-types input:radio').change(function(){
		
		if($('#_tc_order_type-event-catering').is(':checked')){
			$('#tc-event-types').slideDown('fast');
		}else{
			$('#tc-event-types').slideUp('fast');
		}
	});
	
	$('#tc_contact_input').autocomplete({
		source:contactAutocompleteJSON,
		select: function(event, ui) {
					var selectedObj = ui.item;
					$('#tc_contact_input').val(selectedObj.label);
					$('#tc_selected_contact').val(selectedObj.value);
					//customerInfoViewMediator.onContactChanged();
					return false;
				},		
		focus: function(event, ui) {
					var selectedObj = ui.item;
					$('#tc_contact_input').val(selectedObj.label);
					return false;
				}
		})
		
		
	$('#tc_product_input').autocomplete({
		source:productAutocompleteJSON,
		select: function(event, ui) {
					var selectedObj = ui.item;
					$('#tc_product_input').val('');
					debug.log('selectedObj : ', selectedObj);
					orderItemsViewMediator.addSelectedItemRow(selectedObj);
					//orderItemsViewMediator.addProductRow(selectedObj);
					return false;
				},		
		// focus: function(event, ui) {
		// 			var selectedObj = ui.item;
		// 			$('#tc_product_input').val(selectedObj.label);
		// 			return false;
		// 		}
		})
		
	
	
	$('#applyCouponButton').on('click', function() {
		orderItemsViewMediator.submitCouponCode();
	    return false;
	});	
	
	$('#removeCouponButton').on('click', function() {
		orderItemsViewMediator.removeCoupon();
	    return false;
	});	
	$('#customItemButton').on('click', function() {
		orderItemsViewMediator.addSelectedItemRow({type:'custom'});
	    return false;
	});
	
	$('#orderItemsTable').on('focusout', 'input.quantity', checkRowForUpdates)
	$('#orderItemsTable').on('focusout', 'input.itemDescTextInput', checkRowForUpdates)
	$('#orderItemsTable').on('focusout', 'input.priceInput', checkRowForUpdates)
	$('#orderItemsTable').on('focusout', 'input.customItemTitleInput', checkRowForUpdates)
	$('#orderItemsTable').on('change', 'select.variationDropdown', checkRowForUpdates)
	
	$('#discountAmountInput').on('focusout', function(event){
		orderItemsViewMediator.checkDiscountUpdated();
	});
	
	$('#discountTypeDropdown').on('change', function(event){
		orderItemsViewMediator.checkDiscountUpdated();
	});
		
	$('#orderItemsTable').on('click', '.addNextItemButton', function(event){
		$('#tc_product_input').focus();
		debug.log('on addNextItembutton click!');
		//event.stopPropagation();
		// event.stopImmediatePropagation();
		// event.preventDefault();
		return false;
	    
	});		
	$('#orderItemsTable').on('click', '.removeProductButton', function(event){
		debug.log('on removeProductButton click!');
		
		$elem = jQuery(this);
		var row = $elem.closest('tr');
		orderItemsViewMediator.removeItemRow(row);
		
		
		return false;
	    
	});
	
	$('#_tc_tax_enabled').on('change', function(){
		orderItemsViewMediator.onTaxEnabledChange();
	});
	
		
	$('#_tc_shipping_enabled_checkbox').on('change', function(){
		orderItemsViewMediator.onShippingEnabledChange();
	});
	
	
	$('#discountRow').data('discountModel', {amount:0, type:'percent'});
	
	function checkRowForUpdates(event){
		$elem = jQuery(this);
		var row = $elem.closest('tr');
		
		//quick hack in case the price input field is empty
		if ($elem.hasClass('priceInput') && $elem.val() == ''){
			$elem.val('0');
		}
		
		orderItemsViewMediator.checkItemUpdated(row);
	}
	
	

	$("#billing_address_state").html(states);
	$("#shipping_address_state").html(states);

	
	$("#billing_address_state").val("CA");
	$("#shipping_address_state").val("CA");

	
	/*
		From the jquery validation docs re: errorContainer : http://docs.jquery.com/Plugins/Validation/validate#toptions
		
		Uses an additonal container for error messages. 
		The elements given as the errorContainer are all shown and hidden when errors occur. 
		But the error labels themselve are added to the element(s) given as errorLabelContainer, here an unordered list. 
		Therefore the error labels are also wrapped into li elements (wrapper option).
	*/
	$("#post").validate({
		/* 	
			'ignore' is set to ':hidden' by default in v1.9, which disables validation of hidden inputs. 
			Set to an empty array to disable: http://bassistance.de/2011/10/07/release-validation-plugin-1-9-0/
		*/
		ignore:[], 
		errorContainer: "#submitErrorBox, #messageBox2",
		errorLabelContainer: "#submitErrorBox ul",
		wrapper: "li", 
		debug:false,
		rules: { 
			_tc_order_type	: { 
				required : true 
			},
			
			_tc_event_type	: {
				required : {
			         depends: function(element) {
			           return $("#_tc_order_type-event-catering").is(':checked');
			         }
		       	}
			},			
			
			customer_email	: {
				required : {
			         depends: function(element) {
			           return $("#_tc_order_type-event-catering").is(':checked');
			         }
		       	}
			}
		},
		messages: 
		{
	        _tc_order_type: "Please select an order type.",
	        _tc_event_type: "Please select an event type.",
	        customer_email: "An email is required for event orders.",
		},
		invalidHandler: function(event, validator) { 
			$('#publish').removeClass('button-primary-disabled'); $('#ajax-loading').css('visibility', 'hidden'); 
		}

	});
	
	jQuery('.tc_datepicker').datepicker();
	
	Object.equals = function( x, y ) {
	  if ( x === y ) return true;
	    // if both x and y are null or undefined and exactly the same

	  if ( ! ( x instanceof Object ) || ! ( y instanceof Object ) ) return false;
	    // if they are not strictly equal, they both need to be Objects

	  if ( x.constructor !== y.constructor ) return false;
	    // they must have the exact same prototype chain, the closest we can do is
	    // test there constructor.

	  for ( var p in x ) {
	    if ( ! x.hasOwnProperty( p ) ) continue;
	      // other properties were tested using x.constructor === y.constructor

	    if ( ! y.hasOwnProperty( p ) ) return false;
	      // allows to compare x[ p ] and y[ p ] when set to undefined

	    if ( x[ p ] === y[ p ] ) continue;
	      // if they have the same strict value or identity then they are equal

	    if ( typeof( x[ p ] ) !== "object" ) return false;
	      // Numbers, Strings, Functions, Booleans must be strictly equal

	    if ( ! Object.equals( x[ p ],  y[ p ] ) ) return false;
	      // Objects and Arrays must be tested recursively
	  }

	  for ( p in y ) {
	    if ( y.hasOwnProperty( p ) && ! x.hasOwnProperty( p ) ) return false;
	      // allows x[ p ] to be set to undefined
	  }
	  return true;
	}
	
	
	
});

</script>

<?php

// <tr>
// 	<th class="row-title" style="text-align:left">Item</th>
// 	<th style="text-align:left">Description</th>
// 	<th style="text-align:left">Price</th>
// 	<th style="text-align:left">Quantity</th>				
// 	<th style="text-align:right">Total</th>
// 	<th style="text-align:right">Add Item</th>
// 	<th style="text-align:right">Remove Item</th>
// </tr>


?>

<table id="orderItemsTableTemplate" style="display:none;">
	
	<tr id="productRowTemplate" class="productRow chargeRow">
		<td width="300px" class="titleColumn"  ><span class="itemName"></span></td>

		<td class="descriptionColumn"> <input type="text" class="itemDescTextInput" value="" /><br/><span class="description">(Optional)</span></td>
		
		<td class="itemPriceColumn"></td>
		
		<td class="quantityColumn"><input type="text" class="quantity small-text" value="1" maxlength="3"  /></td>
		
		<td class="rowTotalColumn"></td>
			
		<!-- <td class="removeItemColumn"><a class="removeProductbutton button-secondary" href="#" title="Remove" tabIndex="-1">X</a></td>
		<td class="addNextItemColumn"><a class="addNextItembutton button-secondary " href="#" title="Add Next Item" tabIndex="-1">Add Next Item</a></td>
		 -->
		<td class="addNextItemColumn"><button class="addNextItemButton">Add New</td>
		<td class="removeItemColumn"><button class="removeProductButton">Remove</button></td>
		
		
	<tr>
		
	<tr id="serviceRowTemplate" class="serviceRow chargeRow">
		<td width="300px" class="titleColumn"  >
			<span class="itemName"></span>
			<div class="serviceDetailsDiv">
				Hours: <input type="text" class="serviceHoursInput small-text"  maxlength="3"  /><br />
				Servings: <input type="text" class="serviceServingsInput small-text"  maxlength="5"  /><br />
			</div>
		</td>

		<td class="descriptionColumn"> <input type="text" class="itemDescTextInput" value="" /><br/><span class="description">(Optional)</span></td>
		
		<td class="itemPriceColumn"><input type="text" class="priceInput small-text" maxlength="3"  /></td>
		
		<td class="quantityColumn"><input type="text" class="quantity small-text" value="1" maxlength="3"  /></td>
		
		<td class="rowTotalColumn"></td>
			
		<td class="addNextItemColumn"><button class="addNextItemButton">Add New</td>
		<td class="removeItemColumn"><button class="removeProductButton">Remove</button></td>
		
	<tr>
		
	<tr id="customRowTemplate" class="customRow chargeRow">
		<td width="300px" class="titleColumn"  >
			<input type="text" class="customItemTitleInput" value="" /><br />
			<span class="description">Item title</span>
		</td>

		<td class="descriptionColumn"> <input type="text" class="itemDescTextInput" value="" /><br/><span class="description">(Optional)</span></td>
		
		<td class="itemPriceColumn"><input type="text" class="priceInput small-text" maxlength="3"  /></td>
		
		<td class="quantityColumn"><input type="text" class="quantity small-text" value="1" maxlength="3"  /></td>
		
		<td class="rowTotalColumn"></td>
			
		<td class="addNextItemColumn"><button class="addNextItemButton">Add New</td>
		<td class="removeItemColumn"><button class="removeProductButton">Remove</button></td>
	<tr>
		
</table>



<?php
}
?>