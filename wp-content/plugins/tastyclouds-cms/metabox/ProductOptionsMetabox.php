<div class="tc_metabox">
	<div id="submitErrorBox" class="form-invalid"> 
	  <ul></ul> 
	</div>
	
	<label>Display Option As:</label>
	
	<?php $mb->the_field('displayType'); ?>
	<select name="<?php $mb->the_name(); ?>">
		<option value="dropdown"<?php $mb->the_select_state('dropdown'); ?>>Dropdown</option>
		<option value="radio"<?php $mb->the_select_state('radio'); ?>>Radio Buttons</option>
		<option value="checkboxes"<?php $mb->the_select_state('checkboxes'); ?>>Checkboxes</option>
	</select>
	
	Default Item Text (only used for dropdowns): 
	<?php $mb->the_field('defaultItemText'); ?>
	<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>" class="cmb_text_small"/>
	<p>
	<a href="#" id="saveVariationButton" class="button-primary">Save Variation</a>
	</p>
	<div style="clear:both" ></div>
</div>


<?php
function onProductOptionsMetaboxFooterAction() {
	?>
	<script type="text/javascript">

	jQuery(document).ready(function($){
		
		debug.log('ready');
		debug.log('typenow : '+typenow);
		
		$('#edit-slug-box').hide();
		$('#submitdiv').hide();
		
		$('#saveVariationButton').on('click', function() {
			$('#publish').click();
		    return false;
		});
		
		
		
		/*
			From the jquery validation docs re: errorContainer : http://docs.jquery.com/Plugins/Validation/validate#toptions

			Uses an additonal container for error messages. 
			The elements given as the errorContainer are all shown and hidden when errors occur. 
			But the error labels themselve are added to the element(s) given as errorLabelContainer, here an unordered list. 
			Therefore the error labels are also wrapped into li elements (wrapper option).
		*/
		$("#post").validate({
			/* 	
				'ignore' is set to ':hidden' by default in v1.9, which disables validation of hidden inputs. 
				Set to an empty array to disable: http://bassistance.de/2011/10/07/release-validation-plugin-1-9-0/
			*/
			ignore:[], 
			errorContainer: "#submitErrorBox, #messageBox2",
			errorLabelContainer: "#submitErrorBox ul",
			wrapper: "li", 
			debug:false,
			rules: { 
				post_title : { 
					required : true 
				},
				// 
				// _panalo_event_type	: {
				// 	required : {
				//          depends: function(element) {
				//            return $("#_panalo_order_type-event-catering").is(':checked');
				//          }
				// 			       	}
				// },			
				// 
				// _tc_crm_contact_personal_email	: {
				// 	required : {
				//          depends: function(element) {
				//            return $("#_panalo_order_type-event-catering").is(':checked');
				//          }
				// 			       	}
				// }
			},
			messages: 
			{
		        post_title: "A title is required.",
			},
			invalidHandler: function(event, validator) { 
				$('#publish').removeClass('button-primary-disabled'); $('#ajax-loading').css('visibility', 'hidden'); 
			}

		});
		
		
	});

	</script>
	<?php
}