<?php 
	// $post; // this is the current post, use $post->ID for the current post ID
	// $metabox; // this is the meta box helper object
	// $mb; // same as $metabox, a shortcut instead of writing out $metabox
	// $meta; // this is the meta data
?>
<div class="my_meta_control">

	<p>Shipping Box Weight: 
		<?php $mb->the_field('weight'); ?>
		<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>" class="cmb_text_small"/>
	</p>
	
	<p>Shipping Box Size: 
		<?php $mb->the_field('size'); ?>
		<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>" class="cmb_text_small"/>
	</p>
</div>

<?php

function onBoxSizeMetaboxSave(){
	
}
?>

