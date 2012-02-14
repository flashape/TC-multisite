<div class="my_meta_control savebox">
	<?php 
		// $post; // this is the current post, use $post->ID for the current post ID
		// $metabox; // this is the meta box helper object
		// $mb; // same as $metabox, a shortcut instead of writing out $metabox
		// $meta; // this is the meta data
		
	?>	
	<?php $mb->the_field('enabled'); ?>
	<p>
	<input type="checkbox" name="<?php $mb->the_name(); ?>" id="<?php $mb->the_name(); ?>" value="on"<?php $mb->the_checkbox_state('on'); ?>/>
	<label for="<?php $mb->the_name(); ?>"><span>Enabled</span></label><br/>
	</p>
	
	<label>Valid Dates</label><br/>
	<?php $mb->the_field('start_date'); ?>
	Start: <input name="<?php $mb->the_name(); ?>" id="<?php $mb->the_name(); ?>" class="tc_datepicker tc_text_small" type="text"  value="<?php $mb->the_value(); ?>" /><br/>
	
	<?php $mb->the_field('end_date'); ?>
	End: <input name="<?php $mb->the_name(); ?>" id="<?php $mb->the_name(); ?>" class="tc_datepicker tc_text_small" type="text"  value="<?php $mb->the_value(); ?>" /><br />
	
	<?php $mb->the_field('valid_once'); ?>
	<input type="checkbox" name="<?php $mb->the_name(); ?>" id="<?php $mb->the_name(); ?>" value="on"<?php $mb->the_checkbox_state('on'); ?>/>
	<label for="<?php $mb->the_name(); ?>">Valid only once</label><br/>


	<?php $mb->the_field('limit_number_uses'); ?>
	<input type="checkbox" name="<?php $mb->the_name(); ?>" id="<?php $mb->the_name(); ?>" value="on"<?php $mb->the_checkbox_state('on'); ?>/>
	<label for="<?php $mb->the_name(); ?>">Limit number of uses</label><br/>


	<?php $mb->the_field('limit_number_uses_per_customer'); ?>
	<input type="checkbox" name="<?php $mb->the_name(); ?>" id="<?php $mb->the_name(); ?>" value="on"<?php $mb->the_checkbox_state('on'); ?>/>
	<label for="<?php $mb->the_name(); ?>">Limit number per uses per customer</label><br/>
    <div>  
	<p>
      <?php if ($_GET['action'] == 'edit') : ?>
		<input name="original_publish" type="hidden" id="original_publish" value="<?php esc_attr_e('Save') ?>" />
		<input name="save" type="submit" class="button-primary" id="publish2" tabindex="5" accesskey="p" value="Update">

	<?php else: ?>
		<input name="original_publish" type="hidden" id="original_publish" value="<?php esc_attr_e('Publish') ?>" />

		<input name="publish" type="submit" id="publish2" class="button-primary" value="Publish" tabindex="5" accesskey="p">
	<?php endif; ?>           
	</p>
	</div>
	<!-- <input type="submit" class="button-primary" name="save" value="Save 2"> -->

	<!-- <a href="#" id="saveChangesButton" class="button-primary alignright">Save</a> -->
</div>

<?php



function my_remove_post_meta_boxes() {

	//remove_meta_box( 'submitdiv', 'tc_crm_coupon', 'normal' );

	/* Additional calls to remove_meta_box() go here. */
}

function onFooterAction() {
	?>
	<script type="text/javascript">

	jQuery(document).ready(function($){
		jQuery('.tc_datepicker').datepicker();
		
		$("#post").validate({ 
			rules: { 
				post_title :  { required : true }
			},
			invalidHandler: function() {  
				$('#publish2').removeClass('button-primary-disabled');  	
				$('#publish2').addClass('button-primary'); $('#ajax-loading').css('visibility', 'hidden'); 
			}
		});
		
		
		$('#publish2').live('click', function() {    
				$('#publish2').removeClass('button-primary');  	
				$('#publish2').addClass('button-primary-disabled');    
				//$('#publish2').attr('disabled', 'disabled')
				  
		});   
		$('#edit-slug-box').hide();
		$('#submitdiv').hide();
		$('#titlewrap').append('<span class="description">Coupon title will be visible to client.</span>');
		

		
		
	});
	 
	// 
	// jQuery(window).load(function () {
	// 	window.onbeforeunload = function() {
	// 				var c = typeof(tinyMCE) != "undefined" ? tinyMCE.activeEditor : false,
	// 				e,
	// 				d;
	// 				debug.log("c = "+c); 
	// 				if(c){
	// 					debug.log("c.isDirty() = "+c.isHidden());     
	// 					debug.log("c.isDirty() = "+c.isDirty());     
	// 					
	// 				}
	// 				if (c && !c.isHidden()) {
	// 					if (c.isDirty()) {
	// 						return autosaveL10n.saveAlert
	// 					}
	// 				} else {
	// 					if (fullscreen && fullscreen.settings.visible) {
	// 						e = jQuery("#wp-fullscreen-title").val();
	// 						d = jQuery("#wp_mce_fullscreen").val()
	// 					} else {
	// 						e = jQuery("#post #title").val();
	// 						d = jQuery("#post #content").val()
	// 					}
	// 					if ((e || d) && e + d != autosaveLast) {    
	// 						debug.log("autosaveLast :" +autosaveLast);
	// 						debug.log("returning autosaveL10n.saveAlert");
	// 						return autosaveL10n.saveAlert
	// 					}
	// 				}    
	// 				
	// 			};    
	// 	});                  
	//          
	</script>
	<?php
}

?>
