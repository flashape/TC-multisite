var OrderItemsViewMediatorClass = JS.Class({
		construct : function (orderItemsView) {
	        this.view = orderItemsView;
			this.enableSubtotalUpdates = true;
			this.enableAjax = true;

			ordersAjaxService.couponValidationResult.add(this.onCouponValidationResult, this);
			ordersAjaxService.couponRemovedResult.add(this.onCouponRemovedResult, this);
			ordersAjaxService.addToCartResult.add(this.onAddToCartResult, this);
			ordersAjaxService.removeFromCartResult.add(this.onRemoveFromCartResult, this);
			ordersAjaxService.updateCartItemResult.add(this.onUpdateCartItemResult, this);
			ordersAjaxService.shippingRateResultReceived.add(this.onShippingRateResult, this);
			// ordersAjaxService.getCartResultReceived.add(this.onGetCartResultReceived, this);
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
		
		
		onAddToCartResult : function(serviceResult){
			debug.log('onAddToCartResult, serviceResult success : '+serviceResult.success);
			debug.log('serviceResult: ', serviceResult);
			serviceResult.postData.rawModel.cartItemID = serviceResult.cartItemID;
			
			if(serviceResult.success){
				//this.addNewCustomItemRow(serviceResult.cartItemID, serviceResult.customItemType);
			}else{
				alert('There was an error adding the item to the cart.');
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
				// var amount = parseFloat( serviceResult.amount );
				// var markup = parseFloat(TC_ProductManager.shippingOptions.FedEx.markupAmount);
				// amount +=  markup;
				// jQuery('#shippingRowTotal').text(TC_ProductManager.priceToFixed(amount));
				// 
				// 
				// this.updateShippingDiscount();
				// 
				// 
				// 
				// this.updateTotal(TC_ProductManager.SKIP_UPDATE_SHIPPING);
				// jQuery("#loadingShipping").hide();
				
			}else{
				alert('Error : '+JSON.stringify(serviceResult));
			}
		},
		
		
		
		removeItemRow : function(row){			
			ordersAjaxService.removeCartItem(row.data("model"));

		}, 
		
		
		addSelectedItemRow : function(selectedObj){
			debug.log('addSelectedItemRow, selectedObj: ', selectedObj);
			var model = this.createOrderItemModel(selectedObj);
			var newRow = this.addItemRow(model);
			
			// adding a new row may have changed the model,
			// wait until that's done before adding to cart.
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
		
		populateServiceRow : function (row){
			var model = row.data("model");
			var productModel = row.data("productModel");
			row.find('.itemName').text( productModel.label );
			row.find('.serviceHoursInput').val( model.hours );
			row.find('.serviceServingsInput').val( model.servings );
			row.find('.priceInput').val( model.price );
			row.find('.itemDescTextInput').val( model.description );
			
		},
		
				
		populateCustomRow : function (row){
			var model = row.data("model");
			row.find('.customItemTitleInput').val( model.itemName );
			row.find('.itemDescTextInput').val( model.description );

			row.find('.priceInput').val( model.price );
			row.find('.quantity').val( model.quantity );
			
		},
		
		
		
		populateProductRow : function (row){
			var model = row.data("model");
			
			
			
			
			switch(model.type){
				case 'tc_products':
					var productModel = row.data("productModel");

					row.find('.itemName').text( productModel.label );
					row.find('.itemPriceColumn').text( this.priceToFixed(model.price) );
					row.find('.itemDescTextInput').val( model.description );
				
					// if (model.id != 0 ){
					// 	row.find('.callDateTime').text(model.date)
					// 	row.find('.callNotes').text(model.notes);
					// 	row.find('.callNotesInput').text(model.notes);
					// 	row.find('.activityCreatedTimeColumn').text(model.creationDate);
					// }
			
				break;
			}

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
					
					newRow.find('.removeProductButton').button();
					newRow.find('.addNextItemButton').button();
		
		
				break;
				
				case 'tc_service':
					
				break;
				
				case 'custom':
					
				break;
			}


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
				if(newModel.cartItemID != ""){
					ordersAjaxService.updateCartItem(newModel);
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
			var taxableTotal = this.calculateChargeItemsTotal();
			debug.log("taxableTotal : "+taxableTotal);
			taxableTotal -= this.calculateDiscountTotal();
			
			// TODO:  not sure if we need this anymore
			
			// if (this.hasCoupon()){
			// 	var couponDiscount = this.calculateDiscountTotal();
			// 	taxableTotal += this.couponDiscount
			// }
			
			
			return taxableTotal;
		},
		
		
		
		
		calculateTaxTotal : function (){
			var taxTotal =  0;
			
			if ( this.isTaxEnabled() ){
				var taxableTotal = this.calculateTaxableTotal();
				taxTotal = taxableTotal * .0875;
			}
			
			return taxTotal;
		},
		
		
		
		
		
		calculateTotal : function (){
			var cartTotal = 0;
			
			
			var subTotal = this.calculateChargeItemsTotal();
			
			cartTotal += subTotal;
			
			var discountTotal = this.calculateDiscountTotal();
						
			cartTotal -= discountTotal;
			
			var taxTotal = this.calculateTaxTotal();
			
			cartTotal += taxTotal;
			
			var paymentTotal = 0;
			
			var couponDiscountTotal = this.calculateCouponDiscountTotal();
			
			cartTotal -= couponDiscountTotal;
			
			var balanceDue = cartTotal - paymentTotal;
			
			
			
			
			jQuery('#subtotalField').text('$'+ subTotal.toFixed(2));
			jQuery('#discountRowTotal').text('$'+ discountTotal.toFixed(2));
			jQuery('#taxRowTotal').text('$'+ taxTotal.toFixed(2));
			jQuery('#couponRowTotal').text('$'+ couponDiscountTotal.toFixed(2));
			jQuery('#totalField').text('$'+ cartTotal.toFixed(2));
			jQuery('#balanceDueField').text('$'+ balanceDue.toFixed(2));
			
			return cartTotal;
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
		
		onCouponValidationResult : function (serviceResult){  
			jQuery("#validatingCoupon").hide();
			debug.log('onCouponValidationResult success , serviceResult : ', serviceResult);
			
			if(serviceResult.success){
				
				var couponModel = serviceResult.couponModel;
				
				jQuery("#couponTitle").text(couponModel.title);  
				jQuery("#couponRow").data('couponModel', couponModel);    
				debug.log(jQuery("#couponRow").data('couponModel'));
				//this.updateShippingDiscount();
				
				//this.updateCoupon( jQuery("#couponRow") );
				jQuery('#couponCodeInput').attr("readonly", "readonly");
				jQuery("#applyCouponButton").hide();
				jQuery("#removeCouponButton").show();

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
		
		onTaxEnabledChange : function(){
			if ( this.isTaxEnabled() ){
				ordersAjaxService.enableTax(true);
			}else{
				ordersAjaxService.enableTax(false);
			}
			
			this.calculateTotal();
		},
		
		isTaxEnabled : function(){
			return jQuery('#_tc_tax_enabled').is(':checked');
		},
				
		isShippingEnabled : function(){
			return jQuery('#_tc_shipping_enabled_checkbox').is(':checked');
		},
		
		onShippingEnabledChange : function(){
			if ( this.isShippingEnabled() ){
				jQuery('#shippingRow').show();
				//ordersAjaxService.getShippingCharge();
				this.getShippingCharge();
			}else{
				jQuery('#shippingRow').hide();
				this.calculateTotal();
				
			}
		},
		
		getShippingItems : function (){
			var shippingItems = [];



			var productRows = jQuery('.productRow');
			var shippingItem;
			productRows.each(function(key, value) {
				//alert('row id : '+row.attr('id'));
				var row = jQuery(value);
				var product = row.data('productModel');
				var rowModel = row.data('model');
				if (product){
					shippingItem = {};
					shippingItem.productModel = product;
					shippingItem.quantity = rowModel.quantity;
					data.shippingItems.push(shippingItem);
				}
			});
		},
		
		getShippingCharge : function (){
			if( !this.isShippingEnabled() ){
				return;
			}
			
			var zipValue = jQuery('#quickZip').val();
			
			if (!this.isValidZip(zipValue)){
				return;
			}
			
			var shippingItems = this.getShippingItems();
			
			if (shippingItems.length == 0){
				return;
			}
			
			var shippingData = {};
			shippingData.shippingItems
			shippingData.customerData = customerInfoViewMediator.getCustomerShippingData();
			shippingData.serviceType = jQuery('#shipmentType').val();
			
			jQuery("#loadingShipping").show();
			
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
	