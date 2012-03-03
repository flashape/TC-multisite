<?php 
	// $post; // this is the current post, use $post->ID for the current post ID
	// $metabox; // this is the meta box helper object
	// $mb; // same as $metabox, a shortcut instead of writing out $metabox
	// $meta; // this is the meta data
?>
<div class="tc_metabox">

	<p>Shipping Box Weight: 
		<?php $mb->the_field('weight'); ?>
		<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>" class="small-text"/>
	</p>
	
	<p>Shipping Box Size: 
		<?php $mb->the_field('size'); ?>
		<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>" class="small-text"/>
	</p>
</div>

<?php

function onShippingBoxSizeSaveFilter($meta, $post_id){

	$prevBoxSize = get_post_meta($post_id, '_tc_box_size_size', TRUE);
	$prevBoxWeight = get_post_meta($post_id, '_tc_box_size_weight', TRUE);

	// if this is the first time we're saving the box size,
	// automatically assign the order to chelcie.
	if ( empty($prevBoxWeight) && empty($prevBoxSize) && !empty($meta) ){
		update_post_meta( $post_id, '_tc_order_assignee', 5 );
		update_post_meta( $post_id, '_tc_order_status', 8 );
	}
	
	return $meta;
	
}



?>

