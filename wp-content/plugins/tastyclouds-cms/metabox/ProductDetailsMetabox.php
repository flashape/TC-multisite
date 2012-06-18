<?php 
	// $post; // this is the current post, use $post->ID for the current post ID
	// $metabox; // this is the meta box helper object
	// $mb; // same as $metabox, a shortcut instead of writing out $metabox
	// $meta; // this is the meta data
	
?>

<div class="tc_metabox">
	SKU #:
	<?php $mb->the_field('sku'); ?>
	<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>" class="small-text"/><br />	
	
	Price:
	<?php $mb->the_field('price'); ?>
	<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>" class="small-text"/><br />
			
	Regular Price:
	<?php $mb->the_field('regular_price'); ?>
	<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>" class="small-text"/><br />
	<span class="description">If a regular price is entered, will be displayed above price with a strike-thru to indicate that the price has been discounted, for example <del>$19.99</del></span><br /><br/>
	
	
	Length:
	<?php $mb->the_field('length'); ?>
	<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>" class="small-text"/> Inches<br />
	
				
	Width:
	<?php $mb->the_field('width'); ?>
	<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>" class="small-text"/> Inches<br />
	
		
	Height:
	<?php $mb->the_field('height'); ?>
	<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>" class="small-text"/> Inches<br />
	
	Weight:
	<?php $mb->the_field('weight'); ?>
	<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>" class="small-text"/> pounds<br />
		
	Count:
	<?php $mb->the_field('count'); ?>
	<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>" class="small-text"/> items per package<br />
	
	
	<p>
		<?php $mb->the_field('autocompleteEnabled'); ?>
		<input type="checkbox" name="<?php $mb->the_name(); ?>" id="<?php $mb->the_name(); ?>" value="on"<?php $mb->the_checkbox_state('on'); ?>/>
		<label for="<?php $mb->the_name(); ?>">Include as product suggestion for order form.</label><br/>
		<span class="description">Checking the above allows this product to show up as a suggestion when manualy entering orders using the order form.</span>
	</p>

</div>