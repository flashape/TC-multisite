<?php 
	// $post; // this is the current post, use $post->ID for the current post ID
	// $metabox; // this is the meta box helper object
	// $mb; // same as $metabox, a shortcut instead of writing out $metabox
	// $meta; // this is the meta data
?>


<div class="tc_metabox">

	<p>Default Hours: 
		<?php $mb->the_field('default_hours'); ?>
		<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>" class="small-text"/>
	</p>
	
	Default Servings Amount: 
	<?php $mb->the_field('default_servings'); ?>
	<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>" class="small-text"/>

</div>
