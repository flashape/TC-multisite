<?php 
	// $post; // this is the current post, use $post->ID for the current post ID
	// $metabox; // this is the meta box helper object
	// $mb; // same as $metabox, a shortcut instead of writing out $metabox
	// $meta; // this is the meta data
?>


<div class="tc_metabox">
	
	<p>
		<?php $mb->the_field('variation_item_id'); ?>
		If this page represents a variation of a product (such as a specific flavor), enter the variation item ID here.<br />
		<span class="description">Only valid when used with the "Product Select" Template.</span></br>
		<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>" class="small-text" />		
		
	</p>
</div>
