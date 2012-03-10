<?php

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

$meta_contact_id = @$meta['_tc_contact_id'][0];

$contactSelectDiv = '<div class="alignright" style="margin-right:300px;" id="quick_contact_select">Quick Contact Select : <input type="text" id="tc_contact_input"  /><input type="hidden" name="tc_selected_contact" id="tc_selected_contact" value="'.$meta_contact_id.'" /> </div>';


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
		font-weight:bold;
	}
			
	.titleColumn{
		text-align:left;
	}
			
	.descriptionColumn{
		text-align:left;
	}
		
			
	.itemPriceColumn{
		text-align:left;
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
		
		
	
</style>




<div class="tc_metabox">
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
		
		<ul id="orderDetailsTabsList">
			<li><a href="#orderItemsTab">Order Items</a></li>
			<li><a href="#contactInfoTab">Contact Information</a></li>
		</ul>
		
		<div id="orderItemsTab" style="padding-left:0px;padding-right:0px;padding-top:0px;">
			
			<div>Product Select : <input type="text" id="tc_product_input"  /></div>
			
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
						  <p style="font-size:10px"><img src="<?php echo $loaderGif?>" />Loading shipping...</p>
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
						  <p style="font-size:10px"><img src="<?php echo $loaderGif?>" />Validating copon...</p>
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
				<?php echo $paymentRows ?>
				<tr id="balanceDueRow">
					<td colspan="4" style="text-align:right;font-weight:bold">Balance Due</td>
					<td style="text-align:right;font-weight:bold" id="balanceDueField">$0.00<td>
					<td></td>
				</tr>	

			</table>
		</div>
		
				
		<div id="contactInfoTab" style="padding-left:0px;padding-right:0px;padding-top:0px;">

		</div>
		
		
		
	</div>
	
</div>



<?php
function onOrderDetailsMetaboxFooterAction() {
	
	$autoCompleteContacts = get_posts(array('post_type' => 'tc_contact', 'numberposts'=>-1));

	$contactAutocompleteItems = array();

	foreach ($autoCompleteContacts as $contact) {
		$contactName = $contact->post_title;
		$contactID = $contact->ID;
		$contactAutocompleteItems[] = array('label'=>$contactName, 'value'=>$contactID);
	}
	$contactAutocompleteJSON = json_encode($contactAutocompleteItems);

	$productPosts = get_posts(array('post_type' => 'tc_products', 'numberposts'=>-1, 'meta_key'=>'_tc_product_details_autocompleteEnabled', 'meta_value'=>'on'));

	$productAutocompleteItems = array();

	foreach ($productPosts as $product) {
		$productName = $product->post_title;
		$productID = $product->ID;
		// $postMeta = get_post_custom($productID);
		// error_log(var_export($postMeta, 1));
		$productItem = array('label'=>$productName, 'value'=>$productID);
		
		$productItem['sku'] = get_post_meta( $productID, '_tc_product_details_sku', true );
		$productItem['price'] = get_post_meta( $productID, '_tc_product_details_price', true );
		$productItem['width'] = get_post_meta( $productID, '_tc_product_details_width', true );
		$productItem['height'] = get_post_meta( $productID, '_tc_product_details_height', true );
		
		$variations = ProductVariationRulesAjax::getVariationsForProduct($productID, true);
		
		//$variation is array: array('title'=>$title, 'label'=>$variationLabel, 'id'=>$variationPostID, 'p2p_id'=>$p2p_id);
		
		foreach($variations as &$variation){
			$variation['items'] = VariationItemAjax::getItemsForVariation($variation['id'], true);
			// error_log('VariationItems : ');
			// error_log(print_r($variation['items'],1));

			
			
			$variation['rules'] = ProductVariationRulesAjax::getRulesForVariation($productID, $variation['id'], $variation['p2p_id'], true);
			// error_log('VariationRules : ');
			// error_log(print_r($variation['rules'],1));
			// 
			// error_log('Variation : ');
			// 
			// error_log(print_r($variation,1));
		}

		$productItem['variations'] = $variations;
		
		$productAutocompleteItems[] = $productItem;
	}

	$productAutocompleteJSON = json_encode($productAutocompleteItems);
	
?>
	
<script type="text/javascript">
//var signalContext = new SignalContextClass();
var ordersAjaxService;
var customerInfoViewMediator;
var orderItemsViewMediator;


jQuery(document).ready(function($){
	
	contactAutocompleteJSON = <?php echo $contactAutocompleteJSON ?>;
	productAutocompleteJSON = <?php echo $productAutocompleteJSON ?>;
	
	ordersAjaxService = new OrdersAjaxServiceClass();
	customerInfoViewMediator = new CustomerInfoViewMediatorClass(jQuery('#client_information'));
	orderItemsViewMediator = new OrderItemsViewMediatorClass(jQuery('#tc_crm_order_items'));
	
	
	//TC_ProductManager.products = productsJson;

	//TC_ProductManager.shippingOptions = shippingOptionsJson;
	
	$('#addProductButton').on('click', function() {
		orderItemsViewMediator.onAddItemClick();
	    return false;			
	});		

	$('#addCustomChargeButton').on('click', function() {
		orderItemsViewMediator.onAddCustomItemClick();
	    return false;			
	});
	
	$('#addServingsButton').on('click', function() {
		orderItemsViewMediator.onAddCustomItemClick("Additional Servings");
	    return false;			
	});		
	$('#addHoursButton').on('click', function() {
		orderItemsViewMediator.onAddCustomItemClick("Additional Hours");
	    return false;			
	});
	
	$('#addFlavorButton').on('click', function() {
		orderItemsViewMediator.onAddCustomItemClick("Additional Flavors");
	    return false;			
	});
	
	
	$('#addDeliveryButton').on('click', function() {
		orderItemsViewMediator.onAddDeliveryClick();
	    return false;			
	});
	
	$('#titlediv').hide();
	$('#submitdiv').hide();
	$("#loadingShipping").hide();
	$("#validatingCoupon").hide();
	
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
					$('#tc_product_input').val(selectedObj.label);
					orderItemsViewMediator.addProductRow(selectedObj);
					return false;
				},		
		focus: function(event, ui) {
					var selectedObj = ui.item;
					$('#tc_product_input').val(selectedObj.label);
					return false;
				}
		})
		
	
	

	
	$('#orderItemsTable').on('focusout', 'input.quantity', checkRowForUpdates)
	$('#orderItemsTable').on('focusout', 'input.itemDescTextInput', checkRowForUpdates)
	$('#orderItemsTable').on('change', 'select.variationDropdown', checkRowForUpdates)
	
	function checkRowForUpdates(event){
		var row = jQuery(this).closest('tr');
		orderItemsViewMediator.checkItemUpdated(row);
	}
	
	



	
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
			
			_tc_crm_contact_personal_email	: {
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
	        _tc_crm_contact_personal_email: "An email is required for event orders.",
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
// 	<th style="text-align:right">Remove Item</th>
// </tr>


?>

<table id="orderItemsTableTemplate" style="display:none;">
	
	<tr id="productRowTemplate" class="productRow chargeRow">
		<td width="200px" class="titleColumn"  ><span class="itemName"></span></td>

		<td class="descriptionColumn"> <input type="text" class="itemDescTextInput" value="" /><br/><span class="description">(Optional)</span></td>
		
		<td class="itemPriceColumn"></td>
		
		<td class="quantityColumn"><input type="text" class="quantity small-text" value="1" maxlength="3"  /></td>
		
		<td class="rowTotalColumn"></td>
			
		<td class="removeItemColumn"><a class="button-secondary" href="#" class="removeProductbutton" title="Remove">X</a></td>
	<tr>
		
</table>

<?php
}
?>