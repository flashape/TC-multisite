<?php 
	// $post; // this is the current post, use $post->ID for the current post ID
	// $metabox; // this is the meta box helper object
	// $mb; // same as $metabox, a shortcut instead of writing out $metabox
	// $meta; // this is the meta data
?>

<style>
.variationItemRowBottomBorder {
	width:350px;
	border-bottom: 1px solid #ccc;
}
</style>


<div class="tc_metabox">
	<button id="addVariationItemButton">Add Variation Item</button>
	
	<ul id="variationItemsList">
		
	</ul>
	<!--
	<table id="variationItemsTable">
		<thead> 
			<tr> 
			    <th>Label</th> 
			    <th>SKU# Ext</th> 
			    <th></th> 
			    <th></th> 
			</tr> 
		</thead>
		<tbody>

		</tbody>
	</table>
	-->
</div>

<!--
<table id="variantItemTableTemplate" style="display:none;">
	<tr id="variationItemRowTemplate" class="variantItemRow">
		<td>

			<div class="defaultState" style="display:none;">
				Item: <span class="variantTitle"></span> SKU Ext: <span class="skuExtension"></span>
			</div>

			
			<div class="editState" style="">
				Label: <input type="text" class="variantTitleInput" />
				Sku# Extension: <input type="text" class="skuExtensionInput" />
			</div>
		</td>

		<td class="deleteColumn"></td>
		<td class="addItemColumn"></td>
	<tr>
		
</table>
-->
<div id="variationItemRowTemplate" class="variationItemRow" style="display:none;">
	
	<div class="defaultState" style="display:none;">
		<div style="display:inline-block;width:250px;"><b>Item:</b> <span class="variantTitle"></span></div> <b>SKU Ext:</b><span class="skuExtension"></span>
	</div>

	
	<div class="editState" style="">
		Label: <input type="text" class="variantTitleInput" />
		Sku# Extension: <input type="text" class="skuExtensionInput" />
	</div>
	<div class="variationItemRowBottomBorder" />
<div>

<?php
function onVariationItemsMetaboxFooterAction() {
	?>
	<script type="text/javascript">

	jQuery(document).ready(function($){
		
		$('#addVariationItemButton').button();
		
		$("#addVariationItemButton").on("click", function(event){
			addVariationItemRow( createVariationItemModel() );
			return false;
		});
		
		
		$("#variationItemsList").on("dblclick", "div.variationItemRow", function(event){
			editVariationItem($(this));
			return false;
		});
		
		
		// $("#variationItemsList").on("click", "td.deleteColumn", function(event){
		// 	deleteActivity($(this).closest('tr'));
		// 	return false;
		// });
		

		
		$(document).click(function(e){
		    var visibleEditStates = $('.editState').filter(':visible');
			visibleEditStates.each(function(index, element) {
				var editDiv = $(this);
				if(!editDiv.hasClass('within')){	
					editDiv.hide();
					var parent = editDiv.parent();
					var row = editDiv.closest('div.variationItemRow');
					onVariationItemEditEnd(row);
				}
			})
		});
		
		
		
		
		function addVariationItemRow(model){
			debug.log('addVariationItemRow : '+model);
			var newRow = jQuery( '#variationItemRowTemplate' ).clone();
			newRow.removeAttr("id");

			var li = jQuery('<li>')
			li.append(newRow);
			jQuery('#variationItemsList').append(li);
			newRow.data("model", model);
			
			newRow.find('.defaultState').hide();

			newRow.find('.editState')
				.mouseenter(function() { jQuery(this).addClass('within') })
	        	.mouseleave(function() { jQuery(this).removeClass('within') })
	
	
			newRow.show();
			//initializeNewRow(newRow, model);

			populateVariationItem(newRow);

			return newRow;
		}
		
		function initializeNewRow(newRow, model) {
			
		
		}
		
		function editVariationItem(row){
			debug.log("editVariationItem", row);
			setRowStateToEdit(row);
		}

		function onVariationItemEditEnd(row){
			debug.log("onVariationItemEditEnd", row);
			changed = variationItemChanged(row);




			if( changed ){
				saveVariationItem(row);
			}else{
				if (row.data('model').id == 0){
					row.remove();
				}else{
					setRowStateToDefault(row);
				}
			}
		}
		
		function variationItemChanged(row){
			var model = row.data("model");
			debug.log("variationItemChanged , model : ", model);
			var newData = getUpdatedVariationItemData(row);
			if(
				newData.title != model.title ||
				newData.skuExtension != model.skuExtension
				){
				return true;
			}else{
				return false;
			}
		}
		
		
		
		function setRowStateToDefault(row){
			row.find('.editState').hide();
			row.find('.defaultState').show();
		}

		function setRowStateToEdit(row){
			row.find('.editState').show();
			row.find('.defaultState').hide();
		}
		
		
		
		
		function createVariationItemModel(){

			var model = {};
			model.id = 0;
			model.title = '';
			model.skuExtension = '';

			return model;

		}
		
		function getUpdatedVariationItemData(row){
			var newData = {};
			newData.title = row.find('.variantTitleInput').val();
			newData.skuExtension = row.find('.skuExtensionInput').val();
			return newData;
		}
		
		
		function populateVariationItem(row){
			var model = row.data("model");
			row.find('.variantTitleInput').val( model.title );
			row.find('.skuExtensionInput').val(model.skuExtension);
			
			if (model.id != 0 ){
				row.find('.variantTitle').text( model.title );
				row.find('.skuExtension').text( model.skuExtension );
			}
			
			
		}
		
		
		function deleteVariationItem(row) {
			var data = {};
			data.action = 'panalo_delete_variation_item';

			data.model = JSON.stringify(row.data("model"));
			data.postID = jQuery('#post_ID').val();
			row.remove();

			jQuery.post(ajaxurl, data, 
				function (result){
					debug.log('deleteVariationItem result:'+result.message);
					debug.log(result);				
				},
				'json'
			);
		}




		function getVariationItems() {
			var data = {};
			data.action = 'tc_get_variation_items';

			data.postID = jQuery('#post_ID').val();
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
			var variatonItem;
			var num = variationItems.length;
			var row;


			for (var i = 0; i< num; i++){
				variatonItem = variationItems[i];
				row = addVariationItemRow(variatonItem);
				setRowStateToDefault(row);
			}

		}
		
		function saveVariationItem(row){
			var oldModel = row.data("model");
			var newModel = getUpdatedVariationItemData(row);

			newModel.id = oldModel.id;

			var data = {};
			data.action = newModel.id == 0 ? 'tc_insert_variation_item' : 'tc_update_variation_item'

			data.model = JSON.stringify(newModel);
			data.postID = jQuery('#post_ID').val();
			data.post_type = typenow;

			jQuery.post(ajaxurl, data, 
				function (result){
					debug.log('saveVariationItem result:'+result.message);
					debug.log(result);
					row.data("model", result.model);
					populateVariationItem(row);
					setRowStateToDefault(row);

				},
				'json'
			);
		}
		
		getVariationItems();
		
		
	});

	</script>
	<?php
}