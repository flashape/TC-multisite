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
.variationRuleContainer {
	padding-bottom:20px;
	margin-bottom:30px;
	border: 1px solid #ccc;
	
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


.editVariationLabelDiv{
	background-color:yellow;
}

.variationItemRowBottomBorder {
	width:350px;
	border-bottom: 1px dashed #ccc;
}


/*.ui-widget-overlay { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }
*/

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
			resizable: false,
		    width:400,
			zIndex: 3999,
			closeOnEscape:false,
			close: onDialogClose,
			
			buttons: {
				"Cancel": function() {
					//$( this ).dialog( "close" );
					onVariationRuleEditCancel($( "#tc-variation-rules-dialog" ).data('selectedRuleRow'));
					
				},
				"Save and Close": function() {
					onVariationRuleEditEnd($( "#tc-variation-rules-dialog" ).data('selectedRuleRow'));
				},


			}
		});
		
		
		$('#offsetAmountInput').ForcePriceOnly();
		
		
		
		// $('#createVariationRuleButton').on('click', function(){
		// 	$( "#tc-variation-rules-dialog" ).dialog('open');
		// 	return false;
		// });
		
		
		$('#addVariationButton').on('click', function(){
			addVariation();
			return false;
		});
		
		$("#variantRulesContainer").on("dblclick", "div.variationRuleRow", function(event){
			editVariationRule($(this));
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
					container = addVariationRuleContainer(result.model);
					
					// populateVariationItem(row);
					// setRowStateToDefault(row);
				},
				'json'
			);
		}
		
				
		function removeVariation($container){

			var data = {};
			data.action = 'tc_remove_variation_from_product';
			data.model = JSON.stringify($container.data('model'));
			// data.productID = jQuery('#post_ID').val();
			// data.variationID = $container.data('model').id;
			
			debug.log('removeVariation : ', data);
			jQuery.post(ajaxurl, data, 
				function (result){
					debug.log('removeVariation result:'+result.message);
					debug.log(result);
					// populateVariationItem(row);
					// setRowStateToDefault(row);
					$container.remove();
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
			
			container.find('.editVariationLabelDiv').hide();
			
			
			
			$addVariationRuleButton = container.find('.addVariationRuleButton');
			$addVariationRuleButton.data('container', container);
			$addVariationRuleButton.button({
				icons: {
                	primary: "ui-icon-plus"
				}
            });
			$addVariationRuleButton.on('click', function(){
				onAddVariationRuleClick($(this).data('container'));
				return false;
			});
			
			$editVariationLabelButton = container.find('.editVariationLabelButton');
			$editVariationLabelButton.data('container', container);
			
			$editVariationLabelButton.button({
			            icons: {
			                primary: "ui-icon-pencil"
			            },
			            text: false
						})
			
			$editVariationLabelButton.on('click', function(){
				editVariationRuleLabel($(this).data('container'));
				return false;
			});
			
						
			$saveVariationLabelButton = container.find('.saveVariationLabelButton');
			$saveVariationLabelButton.data('container', container);
			$saveVariationLabelButton.button();
			$saveVariationLabelButton.on('click', function(){
				saveVariationRuleLabel($(this).data('container'));
				return false;
			});
			
									
			$cancelEditVariationLabelButton = container.find('.cancelEditVariationLabelButton');
			$cancelEditVariationLabelButton.data('container', container);
			$cancelEditVariationLabelButton.button();
			$cancelEditVariationLabelButton.on('click', function(){
				cancelEditVariationRuleLabel($(this).data('container'));
				return false;
			});
			
			
			$removeVariationButton = container.find('.removeVariationFromProductButton');
			$removeVariationButton.data('container', container);
			$removeVariationButton.button({
				icons: {
                	primary: "ui-icon-minusthick"
				}
            });			
			$removeVariationButton.on('click', function(){
				removeVariation($(this).data('container'));
				return false;
			});
			
			jQuery('#variantRulesContainer').append(container);
			container.data("model", model);
			
			container.show();

			populateVariationRuleContainerHeader(container);
			getRulesForVariation(container);

			return container;
		}
		
		function editVariationRuleLabel(container){
			
			//container.find('.variationLabel').show();
			container.find('.variationLabelValue').hide();
			container.find('.editVariationLabelDiv').show();
			container.find('.editVariationLabelButton').hide();
			container.find('.variationLabelInput').val(container.data('model').label);
			
		}
				
		function saveVariationRuleLabel(container){
			var model = container.data('model');
			
			var newLabel = container.find('.variationLabelInput').val();
			var trimmedLabel = $.trim(newLabel);
			
			if (trimmedLabel != ''){
				
				var data = {};
				data.action = 'tc_update_variation_label';

				data.productID = jQuery('#post_ID').val();
				data.variationLabel = trimmedLabel;
				data.model = JSON.stringify(model);
				
				debug.log('saveVariationRuleLabel : ', data);
				jQuery.post(ajaxurl, data, 
					function (result){
						debug.log('saveVariationRuleLabel result:'+result.message);
						debug.log(result);
						container.data('model', result.model);
						cancelEditVariationRuleLabel(container);
						populateVariationRuleContainerHeader(container)
						// populateVariationItem(row);
						// setRowStateToDefault(row);
					},
					'json'
					
					
				);
			}
			
		}
						
		function cancelEditVariationRuleLabel(container){
			container.find('.variationLabelValue').show();
			container.find('.editVariationLabelDiv').hide();
			container.find('.editVariationLabelButton').show();
			
		}
		
		function populateVariationRuleContainerHeader(container){
			var model = container.data("model");
			debug.log("populateVariationRuleContainerHeader, model : ", model);
			container.find('.variationTitle').text( model.title );
			container.find('.variationLabelValue').text(model.label);
		}
		
		
		
		
		
		
		function onAddVariationRuleClick(container){
			var variationContainerModel = container.data('model');
			debug.log('onAddVariationRuleClick. container model : ', variationContainerModel);
			
			var newRow = addVariationRuleRow(createVariationRuleModel(variationContainerModel), container);
			
			populateRuleDialog(newRow);
			

		}
		
		function createVariationRuleModel(variationModel){

			var model = {};
			model.id = 0;
			model.selectedItems = [];
			model.variationID = variationModel.id;
			model.variationToProduct_p2p_id = variationModel.p2p_id;
			model.offsetAmount = '';
			model.offsetType = '';
			model.ruleName = variationModel.label +' Rule # '+model.id;

			return model;

		}
		
		function populateRuleDialog(row){
			var variationContainerModel = row.data('container').data('model');
			var ruleModel = row.data('model');
			
			getVariationItems( variationContainerModel.id );
			
			$('#selectedVariationIDForRules').val(variationContainerModel.id);
			$('#ruleNameInput').val(ruleModel.ruleName);
			$("#offsetAmountInput").val(ruleModel.offsetAmount);
			$("#variationRuleOffsetType").val(ruleModel.offsetType);
			
			$( "#tc-variation-rules-dialog" ).data('selectedRuleRow', row);
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
					onVariationItemsLoaded(result.variationItems)			
				},
				'json'
			);
		}


		function onVariationItemsLoaded(variationItems){
			debug.log('onVariationItemsLoaded : ', variationItems);
			var variatonItem;
			var num = variationItems.length;
			var row;
			
			
			for (var i = 0; i< num; i++){
				variationItem = variationItems[i];
				$li = jQuery('#variations-list').append('<li><label><input type="checkbox" id="'+variationItem.id+'" />'+variationItem.title+'</label>');
			}
			
			checkSelectedVariationItemsForRule();

		}
		
		function checkSelectedVariationItemsForRule(){
			var ruleModel = $( "#tc-variation-rules-dialog" ).data('selectedRuleRow').data('model');
			
			if (ruleModel.selectedItems.length){
				$.each(ruleModel.selectedItems, function(index, value) { 
				  $('#'+value).attr('checked', 'checked');
				})
			}
			
		}
		
		
		function editVariationRule(row){
			populateRuleDialog(row);
		}

		
		
		
		
		function onVariationRuleEditEnd(row){
			debug.log("onVariationItemEditEnd", row);
			changed = variationRuleChanged(row);
			debug.log('changed : '+changed);
		
			
		
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
			//resetRuleDialog();
		}
		
		function onDialogClose(event, ui){
			debug.log('dialog closed! :');
			debug.log('event : ', event);
			debug.log('ui : ', ui);
			var row = $( "#tc-variation-rules-dialog" ).data('selectedRuleRow');
			
			
			if( $(event.currentTarget).hasClass('ui-dialog-titlebar-close') ){
				// the 'X' button was used to close the dialog window
				if (row.data('model').id == 0){
					row.remove();
				}
			}
			
			
			resetRuleDialog();
		}
		
				
		function onVariationRuleEditCancel(row){
			debug.log("onVariationRuleEditCancel", row);
			
			if (row.data('model').id == 0){
				row.remove();
			}
			
			$( "#tc-variation-rules-dialog" ).dialog('close');
			//resetRuleDialog();
			
			
		}
		
		function resetRuleDialog(){
			$('#variations-list').empty();
			$("#selectedVariationIDForRules").val('');
			$("#offsetAmountInput").val('');
			$("#ruleNameInput").val('');
		}
		
		
		function variationRuleChanged(row){
			var model = row.data("model");
			debug.log("variationItemChanged , model : ", model);
			var newData = getUpdatedVariationRuleData(row);
			
			// will only work if both arrays contain numbers
			debug.log("newData.selectedItems : ", newData.selectedItems.sort().join(','));
			debug.log("model.selectedItems : ", model.selectedItems.sort().join(','));
			if(newData.selectedItems.sort().join(',') !== model.selectedItems.sort().join(',')){
				return true;
			}
			
			
			if(
				newData.offsetType != model.offsetType ||
				newData.offsetAmount != model.offsetAmount ||
				newData.ruleName != model.ruleName
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
			model.offsetAmount = $("#offsetAmountInput").val();
			model.ruleName = $("#ruleNameInput").val();
			
			return model;
			//saveVariationRule(model )
		}
		
		
		function deleteVariationRule(row) {
			var data = {};
			data.action = 'tc_delete_variation_rule';

			data.model = JSON.stringify(row.data("model"));
			data.postID = jQuery('#post_ID').val();
			row.remove();

			jQuery.post(ajaxurl, data, 
				function (result){
					debug.log('deleteVariationRule result:'+result.message);
					debug.log(result);				
				},
				'json'
			);
		}
		
		
		
		
		function saveVariationRule(row){
			var oldModel = row.data("model");
			var newModel = getUpdatedVariationRuleData(row);

			newModel.id = oldModel.id;
			newModel.variationID = oldModel.variationID;
			newModel.variationToProduct_p2p_id = oldModel.variationToProduct_p2p_id;
			
			var data = {};
			//data.action = 'tc_insert_variation_rule';
			data.action = newModel.id == 0 ? 'tc_insert_variation_rule' : 'tc_update_variation_rule'
			
			data.productID = jQuery('#post_ID').val();
			data.variationID = newModel.variationID;
			data.variationToProduct_p2p_id = newModel.variationToProduct_p2p_id;
			
			data.model = JSON.stringify(newModel);
			
			debug.log('addVariationRuleToProduct : ', data);
			
			jQuery.post(ajaxurl, data, 
				function (result){
					debug.log('addVariationRuleToProduct result:'+result.message);
					debug.log(result);
					row.data("model", result.model);
					
					populateVariationRuleRow(row)
				},
				'json'
			);
		}
		
		
		function getRulesForVariation(container){

			var data = {};
			data.action = 'tc_get_rules_for_variation';

			data.productID = jQuery('#post_ID').val();
			data.variationID = container.data('model').id;
			data.variationToProduct_p2p_id = container.data('model').p2p_id;
			
			debug.log('getRulesForVariation : ', data);
			
			jQuery.post(ajaxurl, data, 
				function (result){
					debug.log('getVariationsForProduct result:'+result.message);
					debug.log(result);
					onVariationRulesLoaded(result.rules, container)			
					
					// populateVariationItem(row);
					// setRowStateToDefault(row);

				},
				'json'
			);
		}
		
		function onVariationRulesLoaded(rules, container){
			
			var num = rules.length;
			
			if (num == 0){
				return;
			}
			
			var row;
			var ruleModel;
			
			for (var i = 0; i< num; i++){
				ruleModel = rules[i];
				row = addVariationRuleRow(ruleModel, container);
			}
		}
		

		
				

		
				
		function populateVariationRuleRow(row){
			var model = row.data("model");
			debug.log("populateVariationRuleRow, model : ", model);
			row.find('.variationRuleTitle').text( model.ruleName );
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
			newRow.data("container", container);
			
			newRow.find('.deleteRuleButton').button();
			newRow.find('.deleteRuleButton').on('click', function(){
				deleteVariationRule(newRow.data('row'));
				return false;
			});
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
		<input type-"text" id="offsetAmountInput" class="small-text" maxlength="6"  />
	</div>
	<p>
	<label>Name for this rule:</label><br />
	<span class="description">Admin use only, not visible to client</span>
	<input type-"text" id="ruleNameInput" maxlength="30"   />
	</p>
	
	
	
	<input type="hidden" id="selectedVariationIDForRules" />
</div>


<div id="variationRuleContainerTemplate" class="variationRuleContainer" style="padding-left:0px;padding-right:0px;padding-top:0px;display:none;">
	<span class="ui-widget-header toolbar">
		<span class="variationTitle"></span>
		<span class="variationLabel">Show on website as: </span>
		<span class="variationLabelValue"></span>
		<div style="display:inline-block" class="editVariationLabelDiv">
			<input type="text" class="variationLabelInput" />
			<button class="saveVariationLabelButton">Save</button>
			<button class="cancelEditVariationLabelButton">Cancel</button>
		</div>
		<button class="editVariationLabelButton">Edit label</button>
		<button class="removeVariationFromProductButton alignright">Remove Variation</button>
		<button class="addVariationRuleButton alignright">Create Variation Rule</button>
	</span>
	
	<span class="description" style="padding:0px 10px;">Double-click rule name below to edit.</span>
	<div class="variation-rules-for-product" style="padding:0px 10px;">
		<ul class="variation-rules-list">
			
		</ul>
	</div>
	
	
</div>


<div id="variationRuleRowTemplate" class="variationRuleRow" style="display:none;">
	<button class="deleteRuleButton">x</button>
	<div style="display:inline-block;width:300px;"><span class="variationRuleTitle"></span></div>
	<div class="variationItemRowBottomBorder"></div>
</div>
	