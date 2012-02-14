<div class="my_meta_control">

	<?php 
		// $post; // this is the current post, use $post->ID for the current post ID
		// $metabox; // this is the meta box helper object
		// $mb; // same as $metabox, a shortcut instead of writing out $metabox
		// $meta; // this is the meta data
		
		// Catering Services - Cotton Candy 
		//      catered machine rental; supplies for    servings; bubble top dome; vintage style cart; flavors of choice
		// Catering Services - Snow Cones
		//      catered machine rental; supplies for     servings;  vintage style cart; syrups of choice
		// 
		// Delivery
		// 
		// Additional Servings
		// 
		// Additional Sugar
		// 
		// Additional Syrup
		// 
		// Extra Hour

		$loaderGif = plugins_url('/tastyclouds-crm/images/ajax-loader-circle.gif');
		$paymentRows = '';
		
	?>


	<label>Event Service</label><br/>
	
	<?php $mb->the_field('event_services'); ?>
	<select name="<?php $mb->the_name(); ?>" id="serviceTypeDropdown">
		<option value="101|CATERCC"<?php $mb->the_select_state('101|CATERCC'); ?>>Catering Services - Cotton Candy</option>
		<option value="102|CATERSC"<?php $mb->the_select_state('102|CATERSC'); ?>>Catering Services - Snow Cones</option>
	</select>
	
	<a href="#" id="addServiceButton" class="button-primary">Add Service</a>
	
	<table id="event_orderItemsTable" class="form-table cmb_metabox">
		<tr>
			<th class="row-title" style="text-align:left">Item</th>
			<th style="text-align:left">Description</th>
			<th style="text-align:left">Price</th>
			<th style="text-align:left">Quantity</th>				
			<th style="text-align:right">Total</th>
			<th style="text-align:right">Remove Item</th>
		</tr>
		<tr id="event_subtotalRow">
			<td colspan="4" style="text-align:right">Subtotal</td>
			<td style="text-align:right" id="event_subtotalField">$0.00<td>
			<td></td>
		</tr>
		<tr id="event_discountRow">
			<td colspan="4" style="text-align:right">
				Discount:
				<input type="text" name="event_discountAmount" value="" id="event_discountAmount">
				<select name="event_discountType" id="event_discountType" size="1">
					<option value="percent">% Off</option>
					<option value="dollar">Dollars Off</option>
				</select>
			</td>
			<td id="event_discountRowTotal" class="event_discountRowTotal" style="text-align:right"></td>
			<td></td>
		</tr>			
		<tr id="event_shippingRow">
			<td colspan="4" style="text-align:right">
				Shipping:
				<select name="event_shipmentType" id="event_shipmentType" size="1">
				</select>
			</td>
			<td id="event_shippingRowTotal" class="event_shippingRowTotal" style="text-align:right"></td>
			<td>
				<div id="event_loadingShipping">
				  <p style="font-size:10px"><img src="<?php echo $loaderGif ?>" />Loading shipping...</p>
				</div>
			</td>
		</tr>			
		<tr id="event_shippingDiscountRow">
			<td id="event_shippingDiscountTitle" colspan="4" style="text-align:right">
			</td>
			<td id="event_shippingDiscountRowTotal" class="event_shippingDiscountRowTotal" style="text-align:right"></td>
			<td>
				
			</td>
		</tr>			
		<tr id="event_couponRow">
			<td colspan="4" style="text-align:right">
				Coupon Code / Gift Certificate:
				<input type="text" name="event_couponCode" value="" id="event_couponCode">
				<a href="#" id="event_applyCouponButton" class="button-secondary">Apply Coupoon</a>
				<div id="event_validatingCoupon">
				  <p style="font-size:10px"><img src="<?php echo $loaderGif ?>" />Validating copon...</p>
				</div>
				<div id="event_couponTitle"><div>
			</td>
			<td id="event_couponRowTotal" class="event_couponRowTotal" style="text-align:right"></td>
			<td></td>
		</tr>
		<tr id="event_totalRow">
			<td colspan="4" style="text-align:right">Total</td>
			<td style="text-align:right" id="event_totalField">$0.00<td>
			<td></td>
		</tr>
		<?php echo $paymentRows ?>
		<tr id="event_balanceDueRow">
			<td colspan="4" style="text-align:right">Balance Due</td>
			<td style="text-align:right" id="event_balanceDueField">$0.00<td>
			<td></td>
		</tr>	

	</table>

</div>

<?php

function onEventCateringFooterAction() {
	?>
	<script type="text/javascript">

	jQuery(document).ready(function($){
		
		$("#event_loadingShipping").hide();
		$("#event_validatingCoupon").hide();

		
		// jQuery('.tc_datepicker').datepicker();
		// 
		// $("#post").validate({ 
		// 	rules: { 
		// 		post_title :  { required : true }
		// 	},
		// 	invalidHandler: function() {  
		// 		$('#publish2').removeClass('button-primary-disabled');  	
		// 		$('#publish2').addClass('button-primary'); $('#ajax-loading').css('visibility', 'hidden'); 
		// 	}
		// });
		// 
		// 
		// $('#publish2').live('click', function() {    
		// 		$('#publish2').removeClass('button-primary');  	
		// 		$('#publish2').addClass('button-primary-disabled');    
		// 		//$('#publish2').attr('disabled', 'disabled')
		// 		  
		// });   
		// $('#edit-slug-box').hide();
		// $('#submitdiv').hide();
		

		
		
	});
	
	<?php
}

?>
