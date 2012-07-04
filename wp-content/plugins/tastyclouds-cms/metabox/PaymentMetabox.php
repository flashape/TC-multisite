<?php 
	// $post; // this is the current post, use $post->ID for the current post ID
	// $metabox; // this is the meta box helper object
	// $mb; // same as $metabox, a shortcut instead of writing out $metabox
	// $meta; // this is the meta data
?>


<div class="tc_metabox">

	
	Payment Type: 	
	<select name="payment_type" id="payment_type">
		<option value="">No payment</option>
		<option value="square">Square</option>
		<option value="creditCard">Credit Card</option>
		<option value="cash">Cash</option>
		<option value="check">Check</option>
	</select>
	<br />
	<div id="paymentInfoDiv" style="display:none;">
		<div id="squarePaymentDiv" >
			<table id="ccTable" style="width:100%;">
				<tbody>
					<tr>
						<td class="address-form-label-column">Amount:</td>
						<td style="text-align:left"> <input type="text" name="payment_amount" id="payment_amount" value="" class="small-text"/> </td>
					</tr>
					<tr>
						<td class="address-form-label-column">Note:</td>
						<td style="text-align:left"><input type="text" name="payment_note" id="payment_note" value="" /> </td>
					</tr>
				</tbody>
			</table>		
		</div>
		<div id="creditCardPaymentDiv" style="display:none;" >
			<p>Enter Credit Card Information:</p>
			<table id="ccTable" style="width:100%;">
				<tbody>
					<tr>
						<td class="address-form-label-column">Card Number:</td>
						<td style="text-align:left"> <input type="text" size="20" autocomplete="off" id="card-number"  name="card-number" /> </td>
					</tr>									
					<tr>
						<td class="address-form-label-column">CVV:</td>
						<td style="text-align:left"> <input type="text" size="4" autocomplete="off" id="card-cvc" name="card-cvc"  /></td>
					</tr>								
					<tr>
						<td class="address-form-label-column">Expiration (MM/YYYY):</td>
						<td style="text-align:left"> <input type="text" size="2" id="card-expiry-month" name="card-expiry-month"/>
						        <span> / </span>
						        <input type="text" size="4" id="card-expiry-year"/>
						</td>
					</tr>								
				</tbody>
			</table>
		</div>
		<p>
			<a href="#" id="addPaymentButton" class="button-primary alignright">Add Payment</a>
			<span class="description alignright" style="text-align:right;">Order is automatically saved upon adding payment.</span>
		</p>
		<div style="clear:both" ></div>
	</div>
	
	

</div>



