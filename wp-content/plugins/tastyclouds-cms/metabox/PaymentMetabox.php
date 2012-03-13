<?php 
	// $post; // this is the current post, use $post->ID for the current post ID
	// $metabox; // this is the meta box helper object
	// $mb; // same as $metabox, a shortcut instead of writing out $metabox
	// $meta; // this is the meta data
?>


<div class="tc_metabox">

	
	Payment Type: 	
	<select name="payment_type" id="payment_type">
		<option value="square">Square</option>
		<option value="cash">Cash</option>
		<option value="check">Check</option>
	</select>
	<br />
	<p>
		Amount: <input type="text" name="payment_amount" id="payment_amount" value="" class="small-text"/><br />
	</p>
	<p>
		Note: <input type="text" name="payment_note" id="payment_note" value="" /><br />
	</p>
	<p>
		<a href="#" id="addPaymentButton" class="button-primary alignright">Add Payment</a>
		<span class="description alignright" style="text-align:right;">Order is automatically saved upon adding payment.</span>
	</p>
	<div style="clear:both" ></div>
</div>
