var OrderItemsViewMediatorClass = JS.Class({
		 construct : function (orderItemsView) {
	        this.view = orderItemsView;
			this.enableSubtotalUpdates = true;
			this.ajaxEnabled = true;
			this.cartReloaded = false;
			this.calculateTotalEnabled = true;

			ordersAjaxService.couponValidationResult.add(this.onCouponValidationResult, this);
			ordersAjaxService.couponRemovedResult.add(this.onCouponRemovedResult, this);
			ordersAjaxService.addToCartResult.add(this.onAddToCartResult, this);
			ordersAjaxService.removeFromCartResult.add(this.onRemoveFromCartResult, this);
			ordersAjaxService.updateCartItemResult.add(this.onUpdateCartItemResult, this);
			ordersAjaxService.shippingRateResultReceived.add(this.onShippingRateResult, this);
			ordersAjaxService.reloadOrderResultReceived.add(this.onReloadOrderResultReceived, this);
			// ordersAjaxService.enableTaxResult.add(this.onEnableTaxResult, this);
			
	    },
	
		setRowStateToDefault: function (row) {
			row.find('.editState').hide();
			row.find('.defaultState').show();
		},

		setRowStateToEdit: function (row){
			row.find('.editState').show();
			row.find('.defaultState').hide();
		},
		
		reloadCart : function(){
			debug.log("adminpage : ",adminpage);
			if (adminpage != "post-new-php"){
				if (!this.cartReloaded ){
					var orderID = jQuery('#post_ID').val();
					ordersAjaxService.reloadOrder(orderID);
				}
			}
		},
		
		
		onAddToCartResult : function(serviceResult){
			debug.log('onAddToCartResult, serviceResult success : '+serviceResult.success);
			debug.log('serviceResult: ', serviceResult);
			debug.log('cartItemID: ', serviceResult.cartItemID);
			serviceResult.postData.rawModel.cartItemID = serviceResult.cartItemID;
			
			if(serviceResult.success){
				debug.log('serviceResult : ', serviceResult);
				this.cartReloaded = true;
			}else{
				alert('There was an error adding the item to the cart.');
			}
		},
		
						
		onReloadOrderResultReceived : function(serviceResult){
			debug.log('onReloadOrderResultReceived, serviceResult success : '+serviceResult.success);
			debug.log('serviceResult: ', serviceResult);
			
			jQuery('#tc_cart_was_reloaded').val("1");
			
			
			var t = this;
			
			if(serviceResult.success){
				
				var cart = serviceResult.cart;
				
				this.calculateTotalEnabled = false;
				this.ajaxEnabled = false;
				
				jQuery.each(cart.items, function(key, model) {
					t.addItemRow(model);
				});
				
				if (cart.discount){
					jQuery('#discountAmountInput').val(cart.discount.amount);
					jQuery('#discountTypeDropdown').val(cart.discount.type);
					jQuery('#discountRow').data('discountModel', cart.discount);
				}
				
				if (cart.couponModel){
					jQuery("#couponRow").data('couponModel', cart.couponModel);    
					this.populateCouponRow();
				}
								
				if (cart.taxEnabled && cart.taxEnabled != "false"){
					jQuery('#_tc_tax_enabled').attr("checked", "checked");
				}
						
												
				if (cart.shipping){
					var markup = parseFloat(shippingOptionsJSON.FedEx.markupAmount);
					var amount = parseFloat(cart.shipping.amount);
					amount +=  markup;
					
					var shippingModel = {amount:amount, serviceType:cart.shipping.serviceType, markup:markup}
					jQuery('#shippingRow').data('shippingModel', shippingModel);
					jQuery('#_tc_shipping_enabled_checkbox').attr("checked", "checked");
					jQuery('#shippingRow').show();
				}
				
				//add payments
				var payments = serviceResult.payments;
				var paymentRow;
				
				jQuery.each(payments, function(key, paymentModel) {
					paymentRow = t.addPaymentRow(paymentModel);
				});
				
				
				
				
				this.calculateTotalEnabled = true;
				this.ajaxEnabled = true;
				
				this.calculateTotal();
			}else{
				alert('There was an error retrieving the cart.');
			}
		},
		
				

		onRemoveFromCartResult : function(serviceResult){
			debug.log('onRemoveFromCartResult, serviceResult success : '+serviceResult.success);
			
			if(serviceResult.success){
				//this.addNewCustomItemRow(serviceResult.cartItemID, serviceResult.customItemType);
			}else{
				alert('There was an removing the item from the cart.');
			}
		},
		
		onUpdateCartItemResult : function(serviceResult){
			debug.log('onUpdateCartItemResult, serviceResult success : '+serviceResult.success);
			
			// if(serviceResult.success){
			// 	//this.addNewCustomItemRow(serviceResult.cartItemID, serviceResult.customItemType);
			// }else{
			// 	alert('There was an removing the item from the cart.');
			// }
		},
		
		onShippingRateResult: function (serviceResult){
			if (serviceResult.success){
				var serviceType = serviceResult.serviceType;
				var amount = parseFloat( serviceResult.amount );
				var markup = parseFloat(shippingOptionsJSON.FedEx.markupAmount);
				amount +=  markup;
				jQuery('#shippingRow').data('shippingModel', {amount:amount, serviceType:serviceType, markup:markup});
				jQuery("#loadingShipping").hide();

				this.calculateTotal();
				
			}else{
				alert('Error : '+JSON.stringify(serviceResult));
			}
		},
		
		
		
		removeItemRow : function(row){			
			ordersAjaxService.removeCartItem(row.data("model"));
			row.remove();
			this.calculateTotal();
		},
		
		addPaymentRow : function (paymentModel){
			var paymentRow = jQuery('#paymentRowTemplate').clone();
			paymentRow.removeAttr("id");

			paymentRow.find('.paymentTitle').text('Payment ('+paymentModel.paymentType+')');
			paymentRow.find('.paymentNote').text(paymentModel.paymentNote);
			paymentRow.find('.paymentTotal').text(this.priceToFixed(paymentModel.paymentAmount));
			
			paymentRow.data("paymentModel", paymentModel);
			debug.log('inserting payment row : ', paymentRow);
			debug.log('paymentModel : ', paymentModel);
			paymentRow.insertBefore(jQuery('#balanceDueRow'));
			
			return paymentRow;
		},

		
		addSelectedItemRow : function(selectedObj){
			debug.log('addSelectedItemRow, selectedObj: ', selectedObj);
			var model = this.createOrderItemModel(selectedObj);
			var newRow = this.addItemRow(model);
			
			// adding a new row may have changed the model,
			// wait until that's done before adding to cart.
			//debugger;
			ordersAjaxService.addCartItem(newRow.data('model'));
			
		},
		
		addItemRow : function (model){
			var newRow = jQuery( this.getTemplateRowIDByType(model.type) ).clone();
			newRow.removeAttr("id");

			
			this.insertRowIntoTable(newRow)
			newRow.data("model", model);
			
			if(model.type != 'custom'){
				newRow.data("productModel", this.getProductById(model.productID));
				
			}
			
			this.initializeNewRow(newRow);
			this.populateRow(newRow);

			this.checkItemUpdated(newRow);
			
			
			return newRow;
		},
		
		populateRow : function (row){
			
			var model = row.data("model");
			
			
			
			switch(model.type){
				case 'tc_products':
					this.populateProductRow(row);
				break;
				
				case 'tc_service':
					this.populateServiceRow(row);
				break;
				
				case 'custom':
					this.populateCustomRow(row);
				break;
				
				
			}
		},
		

		
		getTemplateRowIDByType : function(type) {
			var typeIDMap = {};
			typeIDMap['tc_products'] = '#productRowTemplate';
			typeIDMap['tc_service'] = '#serviceRowTemplate';
			typeIDMap['custom'] = '#customRowTemplate';
			// typeIDMap['tasklist'] = '#tasklistRowTemplate';
			// typeIDMap['task'] = '#taskRowTemplate';
			// typeIDMap['note'] = '#noteRowTemplate';
			// typeIDMap['followup'] = '#followupRowTemplate';

			return typeIDMap[type];			
			
		},
		
		populateProductRow : function (row){
			var model = row.data("model");
			var productModel = row.data("productModel");

			row.find('.itemName').text( productModel.label );
			row.find('.itemPriceColumn').text( this.priceToFixed(model.price) );
			row.find('.itemDescTextInput').val( model.description );
			row.find('.quantity').val( model.quantity );
			var t = this;
			
			if (model.variations.length > 0){
				jQuery.each(model.variations, function(key, variation) {
					t.setDropdownForVariation(row, variation);
				});
			}
			
			if (model.taxable){
				row.find('.addTaxCheckbox').attr("checked", "checked");
			}
		},
		
		populateServiceRow : function (row){
			var model = row.data("model");
			var productModel = row.data("productModel");
			row.find('.itemName').text( productModel.label );
			row.find('.serviceHoursInput').val( model.hours );
			row.find('.serviceServingsInput').val( model.servings );
			row.find('.priceInput').val( model.price );
			row.find('.itemDescTextInput').val( model.description );
			if (model.taxable){
				row.find('.addTaxCheckbox').attr("checked", "checked");
			}
			
		},
		
				
		populateCustomRow : function (row){
			var model = row.data("model");
			row.find('.customItemTitleInput').val( model.itemName );
			row.find('.itemDescTextInput').val( model.description );

			row.find('.priceInput').val( model.price );
			row.find('.quantity').val( model.quantity );
			
			if (model.taxable){
				row.find('.addTaxCheckbox').attr("checked", "checked");
			}
			
		},
		
		setDropdownForVariation : function(row, variation){
			variantDropDowns = row.find('.variationDropdown');
			//id="variation_'+variation+'__p2pid_'+variation.p2p_id+
			var variationID = variation.variationID;
			var p2pid = variation.p2pid;
			var selected = variation.selected[0];
			
			var idString = 'variation_'+variationID+'__p2pid_'+p2pid;
			
			
			jQuery.each(variantDropDowns, function(key, selectElem) {

				var dropdown = jQuery(selectElem);
				var dropdownID = dropdown.attr('id');
				
				if (dropdownID.indexOf(idString) != -1){
					dropdown.val(selected);
					return false;
				}

			});
		},
		
		
		

		
		insertRowIntoTable : function(row){
			//product rows
			row.insertBefore(jQuery('#subtotalRow'));
		},
		
		initializeNewRow: function (newRow) {

			var model = newRow.data('model');
			
			switch(model.type){
				case 'tc_products':
					var productModel = newRow.data('productModel');
				
					if (productModel.variations.length > 0){
						this.generateVariationUIContent(newRow);
					}
		
				break;
				
				case 'tc_service':
					
				break;
				
				case 'custom':
					
				break;
			}
			
			newRow.find('.removeProductButton').button();
			newRow.find('.addNextItemButton').button();
			
			
			
			
			

		},
		
		generateVariationUIContent : function(row){
			var model = row.data('model');
			var productModel = row.data('productModel');

			
			var variationsDiv = '<div class="variationsDiv">';
			
			//TODO:  use a sperate factory method to generate the variation content.
			//TODO:  Make this work with other input types besides SELECT.
			
			//loop through each variation and add the UI for it.
			jQuery.each(productModel.variations, function(key, variation) {
				
				variationsDiv += '<p>'+variation.label;
				
				//append p2p_id to the select id because that will always be unique.
				//salt the id with a timestamp and random number/
				var ts = new Date().getTime();
				var r = Math.floor(Math.random()*1000001);
				var randomnumber= ts + r;
				
				variationsDiv += '<select id="variation_'+variation.id+'__p2pid_'+variation.p2p_id+'__r_'+randomnumber+'" class="variationDropdown" style="width:150px">';
				
				//generate the list of variationItems
				jQuery.each(variation.items, function(key, variationItem) {
					variationsDiv += '<option value="'+variationItem.id+'">'+variationItem.title+'</option>';
				});
				
				variationsDiv += '</select>';
				variationsDiv += '</p>';
			});
			
			variationsDiv += '</div>';
			
			row.find('.titleColumn').append(variationsDiv);
			
		},
		
		
		
		getProductById : function(id){
			var productModel;
			
			jQuery.each(productAutocompleteJSON, function(key, productItem){
				if(productItem.value == id){
					productModel = productItem;
					// $.each uses a return value of false to break the loop.
					return (productItem.value != id);
				}
			});
			
			return productModel;

		},
		
		checkDiscountUpdated : function(){
			var row = jQuery('#discountRow');
			
			var oldDiscountModel = row.data('discountModel');
			var newDiscountModel = this.getUpdatedDiscountModel();
			
			debug.log('oldDiscountModel: ', oldDiscountModel);
			debug.log('newDiscountModel: ', newDiscountModel);
			debug.log('Object.equals : '+Object.equals(oldDiscountModel, newDiscountModel));
			
			if( !Object.equals(oldDiscountModel, newDiscountModel) ){
				row.data("discountModel", newDiscountModel);
				this.calculateTotal();
				
				ordersAjaxService.updateDiscount(newDiscountModel);
			}
			
			
			
		},
		
		getUpdatedDiscountModel : function(){
			var newDiscountModel = {};
			newDiscountModel.amount = parseFloat(jQuery('#discountAmountInput').val());
			newDiscountModel.type = jQuery('#discountTypeDropdown option:selected').val();
			return newDiscountModel;
		},
		
		
		
		
		checkItemUpdated : function (row){
			var oldModel = row.data('model');
			var newModel = this.getUpdatedRowModel(row);
			
			var prevRowTotal = row.data('rowTotal');
			
			debug.log('prevRowTotal : ', prevRowTotal);
			debug.log('oldModel: ', oldModel);
			debug.log('newModel: ', newModel);
			debug.log('Object.equals : '+Object.equals(oldModel, newModel));

			if( !Object.equals(oldModel, newModel) || prevRowTotal == undefined ){
				row.data("model", newModel);
				
				var rowTotal = this.calculateRowTotal(row);
				debug.log("returned rowTotal :", rowTotal);
				
				row.data("rowTotal", rowTotal);
				row.find('.rowTotalColumn').text(this.priceToFixed(rowTotal));
				
				this.calculateTotal();
				
				// don't u pdate if we havent added the item to the cart on the server yet
				debug.log("newModel.cartItemID : ",newModel.cartItemID);
				debug.log("this.ajaxEnabled : ",this.ajaxEnabled);
				if(newModel.cartItemID != "" && this.ajaxEnabled){
					ordersAjaxService.updateCartItem(newModel);
					this.getShippingCharge();
				}
				
			}
		},

		
		calculateRowTotal : function (row){
			
			// the info to send when updating the cart in the session
			//var itemUpdateInfo = {};
			var rowTotal;
			
			
			var productModel = row.data('productModel');
			var model = row.data('model');
			
			switch(model.type){
				case 'tc_products':
					rowTotal = this.calculateProductRowTotal(row);
				break;
				
				case 'tc_service':
					rowTotal = this.calculateServiceRowTotal(row);
				break;
				
				case 'custom':
					rowTotal = this.calculateCustomRowTotal(row);
				break;
				
			}
			
			return rowTotal;

		},
		
		calculateServiceRowTotal : function (row){
			var model = row.data('model');
			
			var rowTotal = parseFloat( model.price );
			rowTotal *= model.quantity;
			
			
			return rowTotal;
		},
				
		calculateCustomRowTotal : function (row){
			var model = row.data('model');
			
			var rowTotal = parseFloat( model.price );
			rowTotal *= model.quantity;
			
			
			return rowTotal;
		},
		
		
		calculateProductRowTotal : function (row){
			var model = row.data('model');
			debug.log('calculateProductRowTotal , model : ', model);
			var productModel = row.data('productModel');
			
			var startPrice = parseFloat( model.price );
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
					
					variationModel = this.getProductVariationDataByP2PId(productModel, selectedVariationObj.p2pid)
					debug.log('variationModel : ', variationModel);
				
					if(variationModel.hasOwnProperty('rules')){
						
						variationRules = variationModel.rules;
						debug.log('variationRules : ', variationRules);
						
						rule = this.getVariationRuleByP2PId(variationRules, selectedVariationObj.p2pid);
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
			
			return rowTotal;
		},
		
		
		
		
		calculateChargeItemsTotal : function(){
			var chargeTotal = 0;
			var chargeRows = jQuery('#orderItemsTable').find('tr.chargeRow');
			
			chargeRows.each(function(index, el){
				chargeTotal += jQuery(el).data('rowTotal');
			});
			debug.log("chargeTotal : ", chargeTotal);

			return chargeTotal;

		},
		
		calculateDiscountTotal : function (){
			var discountModel = jQuery('#discountRow').data('discountModel');
			
			var discountTotal = 0;
			
			var discountAmount = discountModel.amount 
			
			if( discountAmount > 0){
				if ( discountModel.type == "percent" ){
					var chargeTotal = orderItemsViewMediator.calculateChargeItemsTotal();
					discountTotal = (chargeTotal * (discountAmount/100));
				}else{
					discountTotal = discountAmount;
				}
			}
			
			return discountTotal;
		},
		
		calculateCouponDiscountTotal : function (){
			
			var discountTotal = 0;
			
			if( this.hasCoupon() ){
				var couponModel = jQuery('#couponRow').data('couponModel');
			
				var discountAmount = couponModel.discountAmount 
			
				if( discountAmount > 0){
					if ( couponModel.type == "percent" ){
						var chargeTotal = orderItemsViewMediator.calculateChargeItemsTotal();
						discountTotal = (chargeTotal * (discountAmount/100));
					}else{
						discountTotal = discountAmount;
					}
				}
			}
			
			return discountTotal;
		},
		
		calculateTaxableTotal : function (){
			var taxableTotal = 0;
			
			$taxableRows = jQuery('#orderItemsTable').find('tr.chargeRow').has('.addTaxCheckbox:checked');
			debug.log('total taxable rows : ', $taxableRows.length);
			
			$taxableRows.each(function(index, el){
				taxableTotal += jQuery(el).data('rowTotal');
			});
			
			
			//var taxableTotal = this.calculateChargeItemsTotal();
			
			debug.log("taxableTotal : "+taxableTotal);
			//taxableTotal -= this.calculateDiscountTotal();
			
			return taxableTotal;
		},
		
		
		
		
		calculateTaxTotal : function (){
			var taxTotal =  0;
		
			var taxableTotal = this.calculateTaxableTotal();
			taxTotal = taxableTotal * .0875;
		
			return taxTotal;
		},
		
		calculateShippingTotal : function(){
			var shippingTotal = 0;
			
			//TODO:  check for free shipping coupons
			if( this.isShippingEnabled() && this.hasShipping() ){
				var shippingModel = jQuery('#shippingRow').data('shippingModel');
				shippingTotal = shippingModel.amount;
			}
			debug.log('returning shippingTotal : ', shippingTotal);
			return shippingTotal;
		},
		
		
				
		calculatePaymentTotal : function(){
			var paymentTotal = 0;
			
			var payementRows = jQuery('#orderItemsTable').find('tr.paymentRow');
			
			payementRows.each(function(index, el){
				paymentTotal += parseFloat(jQuery(el).data('paymentModel').paymentAmount);
			});
			debug.log("paymentTotal : ", paymentTotal);

			return paymentTotal;
		},
		
		
		
		
		
		
		
		calculateTotal : function (){
			if(this.calculateTotalEnabled){
				
				var cartTotal = 0;
			
			
				var subTotal = this.calculateChargeItemsTotal();
				cartTotal += subTotal;
			
				var discountTotal = this.calculateDiscountTotal();
				cartTotal -= discountTotal;
			
				var taxTotal = this.calculateTaxTotal();
				cartTotal += taxTotal;
			
			
				var couponDiscountTotal = this.calculateCouponDiscountTotal();
				cartTotal -= couponDiscountTotal;
			
				var shippingTotal = this.calculateShippingTotal();
				cartTotal += shippingTotal;
				
				var paymentTotal = this.calculatePaymentTotal();
				
			
				var balanceDue = cartTotal - paymentTotal;
			
			
			
				jQuery('#subtotalField').text('$'+ subTotal.toFixed(2));
				jQuery('#discountRowTotal').text('$'+ discountTotal.toFixed(2));
				jQuery('#taxRowTotal').text('$'+ taxTotal.toFixed(2));
				jQuery('#couponRowTotal').text('$'+ couponDiscountTotal.toFixed(2));
				//jQuery('#shippingRowTotal').text(this.priceToFixed(amount));
				jQuery('#shippingRowTotal').text('$'+ shippingTotal.toFixed(2));
				jQuery('#totalField').text('$'+ cartTotal.toFixed(2));
				jQuery('#balanceDueField').text('$'+ balanceDue.toFixed(2));
			
			
				jQuery('#tc_order_total').val(cartTotal.toFixed(2));
				jQuery('#tc_balance_due').val(balanceDue.toFixed(2));
				jQuery('#tc_payments_total').val(paymentTotal.toFixed(2));
			
				return cartTotal;
			}
		},
		
		
		parseVariationIdsFromDropdownID : function(){
		},
		
		
		
		getProductVariationDataByP2PId : function(productModel, p2pid){
			var numVariations = productModel.variations.length;
			var i = 0;
			var variationObj;
			
			for (i=0; i<numVariations; i++){
				variationObj = productModel.variations[i];
				
				if (variationObj.p2p_id == p2pid){
					return variationObj;
				}
			}
		},
		
				
		
		getVariationRuleByP2PId : function(variationRules, p2pid){
			var ruleObj;
			for (var prop in variationRules){
				ruleObj = variationRules[prop];
				if (ruleObj.variationToProduct_p2p_id == p2pid){
					return ruleObj;
				}
			}
		},
		
		
		
		createOrderItemModel : function (selectedObj){
			var model = {};
			model.id = 0;
			model.type = selectedObj.type;
			model.quantity = 1;
			model.description = '';
			model.cartItemID = "";
			model.taxable = false;
			
			
			if(selectedObj.type == 'custom'){
				model.price = 0;				
				model.itemName = '';				
			}else{
				model.productID = selectedObj.value;
			}
				
					

			if (model.type == 'tc_products'){
				// will be an array of objects with properties: 
				// - variationID
				// - p2pid
				// - selected (array of selected variationItemIDs)
				model.variations = []; 
				model.price = (selectedObj.price == "") ? 0 : parseFloat(selectedObj.price);
			}

			if (model.type == 'tc_service'){
				model.hours = selectedObj.defaults.default_hours; 
				model.servings = selectedObj.defaults.default_servings; 
				model.price = 0;				
			}

			return model;
		},
		
		getUpdatedRowModel : function (row){
			
			var oldModel = row.data('model');
			
			var newModel = {};
			
			//copy over the props that arent going to change
			newModel.id = oldModel.id;
			newModel.productID = oldModel.productID;
			newModel.cartItemID = oldModel.cartItemID;
			newModel.type = oldModel.type;
			
			
			newModel.quantity = parseInt(row.find('.quantity').val());
			newModel.description = row.find('.itemDescTextInput').val();
			newModel.taxable = row.find('.addTaxCheckbox').is(':checked');
			
			switch(oldModel.type){
				
				case 'tc_products':
					newModel.variations = [];
					newModel.price = oldModel.price;

					variantDropDowns = row.find('.variationDropdown');

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


							var variationItemID = jQuery("#"+dropdownID+" option:selected").val();
							variation.selected = [variationItemID];

							newModel.variations.push(variation);
						});

					}
				break;
				
				
				
				case 'tc_service':
					newModel.hours = row.find('.serviceHoursInput').val();
					newModel.servings = row.find('.serviceServingsInput').val();
					newModel.price = parseFloat(row.find('.priceInput').val());
				break;
				
				case 'custom':
					newModel.itemName = row.find('.customItemTitleInput').val();
					newModel.price = parseFloat(row.find('.priceInput').val());
				break;
				
				
				
			}

			
			return newModel;
			
			
		},
		
		hasCoupon : function (){
			var couponRow = jQuery("#couponRow");  
			
			// jQuery.hasData() needs to check the actual html element, not the selector result
			return jQuery.hasData(couponRow[0]);
		},
				
		hasShipping : function (){
			var shippingRow = jQuery("#shippingRow");  
			
			// jQuery.hasData() needs to check the actual html element, not the selector result
			return jQuery.hasData(shippingRow[0]);
		},
		
		
		submitCouponCode : function (){
			debug.log('submitCouponCode()');
			
			jQuery("#validatingCoupon").show();
			var code = jQuery('#couponCodeInput').val();
			
			// //TODO: check if coupon code is the same as previously entered.
			// if ( this.hasCoupon() ){
			// 	
			// }
			
			ordersAjaxService.validateCoupon(code);
			
		},
		
		populateCouponRow : function(){
			var couponModel = jQuery('#couponRow').data('couponModel');
			
			jQuery("#couponTitle").text(couponModel.title);  
			debug.log(jQuery("#couponRow").data('couponModel'));
			//this.updateShippingDiscount();
			
			//this.updateCoupon( jQuery("#couponRow") );
			jQuery('#couponCodeInput').val(couponModel.code);
			jQuery('#couponCodeInput').attr("readonly", "readonly");
			jQuery("#applyCouponButton").hide();
			jQuery("#removeCouponButton").show();
		},
		
		
		onCouponValidationResult : function (serviceResult){  
			jQuery("#validatingCoupon").hide();
			debug.log('onCouponValidationResult , serviceResult : ', serviceResult);
			
			if(serviceResult.success){
				
				var couponModel = serviceResult.couponModel;
				jQuery("#couponRow").data('couponModel', couponModel);    
				this.populateCouponRow();
				this.calculateTotal();

			}else{
				alert('There was an error validating the coupon : '+serviceResult.message);
				jQuery('#couponCodeInput').val('');
				
			}
		},
		
		removeCoupon : function (){   
			debug.log('removeCoupon()');
			
			jQuery("#validatingCoupon").show();
			
			ordersAjaxService.removeCoupon();
		},
		
		onCouponRemovedResult : function (serviceResult){
			jQuery("#validatingCoupon").hide();
			
			if(serviceResult.success){
				debug.log('onCouponRemovedResult success');
				
				jQuery("#couponTitle").text('');  
				jQuery("#couponRowTotal").text('');  
				jQuery("#couponCodeInput").val('');  
				jQuery('#couponCodeInput').removeAttr("readonly");
				jQuery("#applyCouponButton").show();
				jQuery("#removeCouponButton").hide();
				
				jQuery("#couponRow").removeData('couponModel');
				
				
				this.calculateTotal();
				
			}else{
				alert('There was an error validating the coupon.');
			}
		},
		

				
		isShippingEnabled : function(){
			return jQuery('#_tc_shipping_enabled_checkbox').is(':checked');
		},
		
		onShippingEnabledChange : function(){
			if ( this.isShippingEnabled() ){
				jQuery('#shippingRow').show();
				this.getShippingCharge();
			}else{
				jQuery('#shippingRow').hide();
				this.calculateTotal();
				
			}
		},
		
		getShippingItems : function (){
			var shippingItems = [];



			var productRows = jQuery('.productRow');
			var newShippingItem;
			
			productRows.each(function(key, value) {
				var row = jQuery(value);
				var product = row.data('productModel');
				var rowModel = row.data('model');
				var productFound = false;
				if (product){
					var numShippingItems = shippingItems.length;
					var shippingItem;
					for (i=0; i<numShippingItems; i++){
						shippingItem = shippingItems[i];
						if (rowModel.productID == shippingItem.productModel.value){
							shippingItem.quantity += rowModel.quantity;
							productFound = true;
							debug.log("Product found , setting existing quantity to : ", shippingItem.quantity);
							break;
						}
					}
					
					if (!productFound){
						debug.log("Product not found , adding new...");
						
						newShippingItem = {};
						newShippingItem.productModel = product;
						newShippingItem.quantity = rowModel.quantity;

						shippingItems.push(newShippingItem);
					}

				}
			});
			
			return shippingItems;
		},
		
		getShippingCharge : function (){
			if( !this.isShippingEnabled() ){
				return;
			}
			
			var zipValue = '';
			
			var shippingAddressZip = jQuery('#shipping_address_zip').val();
			var billingAddressZip = jQuery('#billing_address_zip').val();
			var quickZip = jQuery('#quickZip').val();
			
			if ( shippingAddressZip != ""){
				zipValue = shippingAddressZip;
			}else if(billingAddressZip != "" && jQuery('#shippingRadioInput1').is(':checked') ){
				zipValue = billingAddressZip;
			}else{
				zipValue = quickZip;
			}

			
			debug.log('zipValue : ', zipValue);
			
			if (!this.isValidZip(zipValue)){
				return;
			}
			
			var shippingItems = this.getShippingItems();
			
			if (shippingItems.length == 0){
				return;
			}
			
			var shippingData = {};
			shippingData.shippingItems = this.getShippingItems();
			shippingData.customerData = {zip:zipValue}
			//shippingData.customerData = customerInfoViewMediator.getCustomerShippingData();
			shippingData.serviceType = jQuery('#shipmentType').val();
			
			jQuery("#loadingShipping").show();
			jQuery('#shippingRowTotal').text('');
			
			ordersAjaxService.getShippingCharge(shippingData);
			
		},
		
		isValidZip : function (zipValue){

			if( zipValue.indexOf('-') != -1){
				zipParts = zipValue.split('-');
				return (zipParts[0].length == 5 && zipParts[1].length == 4);
			}else{
				return (zipValue.length == 5);
			}	
		},
		
		
		priceToFixed : function (price){
			return parseFloat(price).toFixed(2);
		},
		
		
		
		
		
		
		
		
			
			
	});
	