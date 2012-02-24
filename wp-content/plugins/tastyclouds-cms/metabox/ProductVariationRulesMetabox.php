<?php 
	// $post; // this is the current post, use $post->ID for the current post ID
	// $metabox; // this is the meta box helper object
	// $mb; // same as $metabox, a shortcut instead of writing out $metabox
	// $meta; // this is the meta data
	
	// Variation Rules Meta:
	// 	- priceOffsetType
	// 	- offsetAmount
	// 	- hideForThisProduct
		
?>

<style>
#variations-for-rule {
	max-height:150px;
	border: 1px solid #ccc;
	overflow:auto;
}
.changes-for-rule {
	max-height:200px;
	border: 1px solid #ccc;
}

.toolbar {
	padding: 6px 4px;
	font-size:10px;
	color:#000000;
	display:block;
}

.variationTitle{
	font-size:12px;
	color:#000000;	
	font-weight:bold;
	margin-right:15px;
}


.variationLabel{
	font-size:12px;
	color:#000000;	
	font-weight:bold;
}

.variationLabelValue{
	font-size:12px;
	color:#000000;	
	font-weight:normal;
	margin-right:30px;
}




</style>


<div class="tc_metabox">
	<div id="submitErrorBox" class="form-invalid"> 
	  <ul></ul> 
	</div>
	
	<label>Select a Variation Group: 
		
		<?php
			$variationGroupPosts = get_posts(array('post_type' => 'tc_product_variation', 'numberposts'=>-1));

			$variationGroupOptions = '';

			foreach ($variationGroupPosts as $variationPost) {
				$groupTitle = $variationPost->post_title;
				$groupID = $variationPost->ID;
				$variationGroupOptions .= "<option value=\"$groupID\">$groupTitle</option>\n";
			}
		?>
		
		
		<select id="variant-group-dropdown">
			<?php echo $variationGroupOptions ?>
		</select>
		<a href="#" id="addVariationButton" class="button-primary">Add Selected Variation To This Product</a>
		
	</label>
	

	<div style="clear:both;margin-bottom:10px;" ></div>
	
	
	<div id="variantRulesContainer">
		
	</div>
	
</div>



<?php
function onProductVariationRulesMetaboxFooterAction() {
	?>
	<script type="text/javascript">

	jQuery(document).ready(function($){
		$( "#tc-variation-rules-dialog" ).dialog({
			modal: true,
			autoOpen: false,
			buttons: {
				"Cancel": function() {
					$( this ).dialog( "close" );
				},
				"Save and Close": function() {
					onVariationRuleEditEnd($( "#tc-variation-rules-dialog" ).data('selectedRuleRow'));
				},

			}
		});
		
		
		// $('#createVariationRuleButton').on('click', function(){
		// 	$( "#tc-variation-rules-dialog" ).dialog('open');
		// 	return false;
		// });
		
		
		$('#addVariationButton').on('click', function(){
			addVariation();
			return false;
		});
		
		function addVariation(){

			var data = {};
			data.action = 'tc_add_variation_to_product';
			
			data.productID = jQuery('#post_ID').val();
			$selectedOption = jQuery("#variant-group-dropdown option:selected");
			data.variationID = $selectedOption.val();
			data.variationLabel = $selectedOption.text();
			debug.log('addVariation : ', data);
			jQuery.post(ajaxurl, data, 
				function (result){
					debug.log('addVariation result:'+result.message);
					debug.log(result);
					// populateVariationItem(row);
					// setRowStateToDefault(row);

				},
				'json'
			);
		}
		
		
		
		function onAddVariationRuleClick(container){
			var variationContainerModel = container.data('model');
			debug.log('onAddVariationRuleClick. container model : ', variationContainerModel);
			
			var newRow = addVariationRuleRow(createVariationRuleModel(variationContainerModel.id), container);
			
			getVariationItems(variationContainerModel.id);
			$('#selectedVariationIDForRules').val(variationContainerModel.id);
			//$('#selectedVariationRuleRow').val(variationContainerModel.id);
			$( "#tc-variation-rules-dialog" ).data('selectedRuleRow', newRow);
			$( "#tc-variation-rules-dialog" ).dialog('open');
		}
		

		
		
		function getVariationItems(variationID) {
			var data = {};
			data.action = 'tc_get_variation_items';

			data.postID = variationID;
			data.post_type = typenow;

			jQuery.post(ajaxurl, data, 
				function (result){
					debug.log('getVariationItems result:'+result.message);
					debug.log(result);	
					onVariationitemsLoaded(result.variationItems)			
				},
				'json'
			);
		}


		function onVariationitemsLoaded(variationItems){
			debug.log('onVariationitemsLoaded : ', variationItems);
			var variatonItem;
			var num = variationItems.length;
			var row;
			
			
			for (var i = 0; i< num; i++){
				variationItem = variationItems[i];
				$li = jQuery('#variations-list').append('<li><label><input type="checkbox" id="'+variationItem.id+'" />'+variationItem.title+'</label>');
			}

		}
		
		
		function createVariationRuleModel(variationID){

			var model = {};
			model.id = 0;
			model.selectedItems = [];
			model.variationID = variationID;
			model.offsetAmount = '';
			model.offsetType = '';

			return model;

		}
		
		
		
		
		function onVariationRuleEditEnd(row){
			debug.log("onVariationItemEditEnd", row);
			changed = variationRuleChanged(row);
		
		
		
		
			if( changed ){
				saveVariationRule(row);
			}else{
				if (row.data('model').id == 0){
					row.remove();
				}else{
					//setRowStateToDefault(row);
				}
			}
			
			$( "#tc-variation-rules-dialog" ).dialog('close');
			
		}
		
		
		function variationRuleChanged(row){
			var model = row.data("model");
			debug.log("variationItemChanged , model : ", model);
			var newData = getUpdatedVariationRuleData(row);
			
			// will only work if both arrays contain numbers
			if(newData.selectedItems.sort().join(',') === model.selectedItems.sort().join(',')){
				return true;
			}
			
			
			if(
				newData.offsetType != model.offsetType ||
				newData.offsetAmount != model.offsetAmount
				){
				return true;
			}else{
				return false;
			}
		}
		
		
		
		
		
		
		function getUpdatedVariationRuleData(){
			var model = {};
			
			model.selectedItems = $("#variations-for-rule :checked").map(function() {
			    return $(this).attr('id');
			}).get();
			
			model.variationID = $("#selectedVariationIDForRules").val();
			model.offsetType = $("#variationRuleOffsetType").val();
			
			return model;
			//saveVariationRule(model )
		}
		
		
		function saveVariationRule(row){
			var oldModel = row.data("model");
			var newModel = getUpdatedVariationRuleData(row);

			newModel.id = oldModel.id;
			
			var data = {};
			data.action = 'tc_insert_variation_rule';
			
			data.productID = jQuery('#post_ID').val();
			data.model = JSON.stringify(newModel);
			
			debug.log('addVariationRuleToProduct : ', data);
			
			jQuery.post(ajaxurl, data, 
				function (result){
					debug.log('addVariationRuleToProduct result:'+result.message);
					debug.log(result);
				},
				'json'
			);
		}
		
		
		

		
				
		function getVariationsForProduct(){

			var data = {};
			data.action = 'tc_get_variations_for_product';

			data.productID = jQuery('#post_ID').val();
			debug.log('getVariationsForProduct : ', data);
			jQuery.post(ajaxurl, data, 
				function (result){
					debug.log('getVariationsForProduct result:'+result.message);
					debug.log(result);
					onVariationsLoaded(result.variations)			
					
					// populateVariationItem(row);
					// setRowStateToDefault(row);

				},
				'json'
			);
		}
		
		function onVariationsLoaded(variations){
			
			var num = variations.length;
			
			if (num == 0){
				return;
			}
			
			var assignedVariation;
			var row;
			var container;
			
			for (var i = 0; i< num; i++){
				assignedVariation = variations[i];
				container = addVariationRuleContainer(assignedVariation);
				//setRowStateToDefault(container);
			}
		}			
		
		
		function addVariationRuleContainer(model){
			debug.log('addVariationRuleContainer : '+model);
			var container = jQuery( '#variationRuleContainerTemplate' ).clone();
			container.removeAttr("id");
			$variationRuleButton = container.find('.variationRuleButton');
			$variationRuleButton.data('container', container);
			$variationRuleButton.button();
			$variationRuleButton.on('click', function(){
				onAddVariationRuleClick($(this).data('container'));
				return false;
			});
			
			jQuery('#variantRulesContainer').append(container);
			container.data("model", model);
			
			container.show();

			populateVariationRuleContainerHeader(container);

			return container;
		}
		
		function populateVariationRuleContainerHeader(container){
			var model = container.data("model");
			debug.log("populateVariationRuleContainerHeader, model : ", model);
			container.find('.variationTitle').text( model.title );
			container.find('.variationLabelValue').text(model.label);
		}
		
				
		function populateVariationRuleRow(container){
			var model = container.data("model");
			debug.log("populateVariationRuleRow, model : ", model);
			container.find('.variationRuleTitle').text( 'Variation Rule ID : '+model.id );
		}
		
		
		function addVariationRuleRow(model, container){
			debug.log('addVariationRuleRow : ', model);
			var newRow = jQuery( '#variationRuleRowTemplate' ).clone();
			newRow.removeAttr("id");
			
			newRow.show();
			debug.log('addVariationRuleRow , newRow : ', newRow);
			
			
			var li = jQuery('<li>')
			li.append(newRow);
			debug.log('variation-rules-list : ', newRow.find('.variation-rules-list'));
			container.find('.variation-rules-list').append(li);
			newRow.data("model", model);
			newRow.data("row", newRow);
			
			// newRow.find('.defaultState').hide();
			// 
			// newRow.find('.editState')
			// 	.mouseenter(function() { jQuery(this).addClass('within') })
			// 	        	.mouseleave(function() { jQuery(this).removeClass('within') })
				
				
			//initializeNewRow(newRow, model);
			
			populateVariationRuleRow(newRow);
			
			return newRow;
		}
		
		
		
		getVariationsForProduct();
		
				
		
	});

	</script>
	<?php
}

?>

<div id="tc-variation-rules-dialog" title="Add/Edit Variation Rules">
	<label>When any of these are selected:</label>
	
	<div id="variations-for-rule">
		<ul id="variations-list">
			
		</ul>
	</div>
	
	<label>Make these changes:</label>
	
	<div id="changes-for-rule">
		
		<select id="variationRuleOffsetType">
			<option value="total">Fixed Price</option>
			<option value="addPercent">Add Percent</option>
			<option value="addDollars">Add Dollars</option>
			<option value="addDollarsOnce">Add Dollars Once</option>
			<option value="minusPercent">Minus Percent</option>
			<option value="minusDollars">Minus Dollars</option>
			<option value="minusDollarsOnce">Minus Dollars Once</option>
		</select>
		<input type-"text" id="offsetAmount" />
	</div>
	<input type="hidden" id="selectedVariationIDForRules" />
</div>

<div id="variationRuleContainerTemplate" class="variationRuleContainer" style="padding-left:0px;padding-right:0px;padding-top:0px;display:none;">
	<span class="ui-widget-header toolbar">
		<span class="variationTitle"></span>
		<span class="variationLabel">Show on website as: </span>
		<span class="variationLabelValue"></span>
		<!-- <a href="#" id="variationRuleButton" class="button-primary" color="#ffffff">Create Variation Rule</a> -->
		
		<button class="variationRuleButton">Create Variation Rule</button>
	</span>
	
	<div class="variation-rules-for-product">
		<ul class="variation-rules-list">
			
		</ul>
	</div>
	
	
</div>


<div id="variationRuleRowTemplate" class="variationRuleRow" style="display:none;">
	<div style="display:inline-block;width:250px;"><span class="variationRuleTitle"></span></div>
	<div class="variationItemRowBottomBorder" />
<div>
	
	
