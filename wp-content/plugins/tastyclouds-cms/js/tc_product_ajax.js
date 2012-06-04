(function($){
	debug.log('immediate');
	$(document).ready(function() {
		debug.log('tc_product_ajax.js ready');
		$('#maxbutton-2').on('click', function(){
			debug.log('calling sendToCart:');
			
			sendToCart(getProductModelToPost());
			return false;
		})
		
		$('body').on('click', '#maxbutton-4', function(){
			$.colorbox.close();
			return false;
		})
		
		
		$('.variationsDiv').on('change', 'select.variationDropdown', updatePrice)
		
		
		
		
	});
	
	
	function updatePrice(){
		updatedPrice = calculateProductTotal();
		$('#priceColumn').text('$'+parseFloat(updatedPrice).toFixed(2));
	}
	
	
	function calculateProductTotal (){
		debug.log('calculateProductTotal()');
		var model = getProductModelToPost();
		var startPrice = parseFloat( TCProductAjax.price );
		debug.log("startPRice : ", startPrice);
		var rowTotal = startPrice;
		debug.log("rowTotal : ", rowTotal);
		
		
		var hasVariations = (productModel.variations.length > 0);
		
		if(hasVariations){
			// if the variation has rules associated with it,			
			// check to see if they apply to the selected items
			var numVariations = model.variations.length;
			var i = 0;
			var selectedVariationObj;
			var variationRules;
			var rule;
			
			for (i=0; i<numVariations; i++){
				selectedVariationObj = model.variations[i];
				
				variationModel = getProductVariationDataByP2PId(productModel, selectedVariationObj.p2pid)
				debug.log('variationModel : ', variationModel);
			
				if(variationModel.hasOwnProperty('rules')){
					
					variationRules = variationModel.rules;
					debug.log('variationRules : ', variationRules);
					
					rule = getVariationRuleByP2PId(variationRules, selectedVariationObj.p2pid);
					debug.log('rule : ', rule);
					
					//TODO: make this work with more than one selected variation
					var selectedVariationItemID = selectedVariationObj.selected[0];
					debug.log("selectedVariationItemID : ", selectedVariationItemID);
					debug.log("jQuery.inArray( selectedVariationItemID, rule.selectedItems) : ", jQuery.inArray( selectedVariationItemID, rule.selectedItems));
					
					// if the selected variation item has a matching rule...
					if ( jQuery.inArray( selectedVariationItemID, rule.selectedItems) > -1 ){
						//process rule
						var offsetAmount = parseFloat(rule.offsetAmount);
						var offsetType = rule.offsetType;
						
						switch(offsetType){
							case "total":
								//charge specified price for item, overriding any rules
								rowTotal = offsetAmount;
								break;
							break;
							
							case "addPercent":
								// add specified percent to item
								var percent = (offsetAmount/100);
								debug.log("percent : ", percent);
								amountToAdd = rowTotal * percent;
								debug.log("amountToAdd : ", amountToAdd);
								rowTotal += amountToAdd;
							break;
							
							case "addDollars":
								// add specified dollar amount to item
								rowTotal += offsetAmount
								
							break;
							
							
							case "addDollarsOnce":
								// add specified dollar amount to item, if another product row has not done so already
								//TODO:  add map for "once" items already calculated
								rowTotal += offsetAmount;
								
							break;
							
															
							case "minusPercent":
								// subtract specified percent from item
								//rowTotal *= (offsetAmount/100);
								
							break;
							
							case "minusDollars":
								// subtract specified dollar amount from item
								//rowTotal += offsetAmount
								
							break;
							
							
							case "minusDollarsOnce":
								// subtract specified dollar amount from item, if another product row has not done so already
							break;
						}
						
					}
					
				}
			}
		}
		
		
		rowTotal *= model.quantity;
		
		// if (model.taxable){
		// 	rowTotal * .0875;
		// }
		debug.log('updated total : '+rowTotal);
		return rowTotal;
	}
	
	
	function getProductVariationDataByP2PId (productModel, p2pid){
		var numVariations = productModel.variations.length;
		var i = 0;
		var variationObj;
		
		for (i=0; i<numVariations; i++){
			variationObj = productModel.variations[i];
			
			if (variationObj.p2p_id == p2pid){
				return variationObj;
			}
		}
	}
	
			
	
	function getVariationRuleByP2PId (variationRules, p2pid){
		var ruleObj;
		for (var prop in variationRules){
			ruleObj = variationRules[prop];
			if (ruleObj.variationToProduct_p2p_id == p2pid){
				return ruleObj;
			}
		}
	}
	
	
	
	
	
	function getProductModelToPost(){
		var model = {};
		model.description =  "";
		model.id = 0;
		model.price =  TCProductAjax.price;
		model.productID =  TCProductAjax.productID;
		model.quantity =  $('#quantity').val();
		model.taxable =  false;
		model.type = "tc_products";
		model.variations = [];
		var variantDropDowns = $('.variationDropdown');
		debug.log('variationDropdowns : ', variantDropDowns);
		//id="variation_'+variation+'__p2pid_'+variation.p2p_id+

		if ( variantDropDowns.length > 0){
			jQuery.each(variantDropDowns, function(key, selectElem) {

				var dropdown = jQuery(selectElem);
				var dropdownID = dropdown.attr('id');

				var idParts = dropdownID.split('__');

				// idParts = ['variation_XXX', 'p2pid_XXX']
				var variation = {};
				variation.variationID = idParts[0].split('_')[1];
				variation.p2pid = idParts[1].split('_')[1];


				var variationItemID = $("#"+dropdownID+" option:selected").val();
				variation.selected = [variationItemID];

				model.variations.push(variation);
			});

		}
		
		debug.log('returning model : ', model);
		
		return model;
	}
	
	function sendToCart(model){
		debug.log('sendToCart(), item: ', model);
		var data = {action:'tc_add_cart_item'};
		data.addToCartNonce = TCProductAjax.addToCartNonce;
		data.cartID = TCProductAjax.cartID;
        data.model = JSON.stringify(model);
        data.site = TCProductAjax.site;

		jQuery.post(
		    TCProductAjax.ajaxurl, 
			data,
		    function( response ) {
		        debug.log('sendToCart response : ', response );
				showAddToCartPopup(response.popupContent);
		    },
			'json'
		);
	}
	
	
	function showAddToCartPopup(popupContent){
		$.colorbox({html:popupContent});
		
	}
	
})(jQuery);