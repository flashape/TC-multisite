<?php 
	// $post; // this is the current post, use $post->ID for the current post ID
	// $metabox; // this is the meta box helper object
	// $mb; // same as $metabox, a shortcut instead of writing out $metabox
	// $meta; // this is the meta data
?>


<div class="tc_metabox">

	<p>Coupon Code: 
		<?php $mb->the_field('code'); ?>
		<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>" class="small-text"/>
	</p>
	
	Discount Amount: 
		<?php $mb->the_field('discount_amount'); ?>
		<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>" class="small-text"/>
	
	<?php $mb->the_field('priceOffsetType'); ?>
	
	<select name="<?php $mb->the_name(); ?>">
		<option value="dollarsOffTotal"<?php $mb->the_select_state('dollarsOffTotal'); ?>>Dollars Off Total</option>
		<option value="percentOffTotal"<?php $mb->the_select_state('percentOffTotal'); ?>>Percent Off Total</option>
		<option value="dollarsOffShipping"<?php $mb->the_select_state('dollarsOffShipping'); ?>>Dollars Off Shipping Total</option>
	</select>
	
	<p>
		<?php $mb->the_field('free_shipping'); ?>
		<input type="checkbox" name="<?php $mb->the_name(); ?>" id="<?php $mb->the_name(); ?>" value="on"<?php $mb->the_checkbox_state('on'); ?>/>
		<label for="<?php $mb->the_name(); ?>">Add Free Shipping to this coupon in addition to the item selected above.</label><br/>
	</p>

</div>
