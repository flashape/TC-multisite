<div class="my_meta_control">

	<p>Coupon Code: 
		<?php $mb->the_field('code'); ?>
		<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>" class="cmb_text_small"/>
	</p>
	
	<p>Discount Type</p>

	
	<?php 
		// $post; // this is the current post, use $post->ID for the current post ID
		// $metabox; // this is the meta box helper object
		// $mb; // same as $metabox, a shortcut instead of writing out $metabox
		// $meta; // this is the meta data
		
		/*include $couponOptions array*/ include(TASTY_PLUGIN_INC_DIR . 'coupon_options.php'); 
	?>

	<?php foreach ($couponOptions as $couponData): ?>
		<?php $mb->the_field('type'); ?>
		<input type="radio" name="<?php $mb->the_name(); ?>" value="<?php echo $couponData['id']; ?>"<?php $mb->the_radio_state($couponData['id']); ?>/> <?php echo $couponData['label']; ?><br/>
	<?php endforeach; ?>

	<p>Discount Amount: 
		<?php $mb->the_field('discount_amount'); ?>
		<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>" class="cmb_text_small"/>
	</p>
	
	<?php $mb->the_field('free_shipping'); ?>
	<input type="checkbox" name="<?php $mb->the_name(); ?>" id="<?php $mb->the_name(); ?>" value="on"<?php $mb->the_checkbox_state('on'); ?>/>
	<label for="<?php $mb->the_name(); ?>">Add Free Shipping to this coupon in addition to the item selected above.</label><br/>
	

</div>
