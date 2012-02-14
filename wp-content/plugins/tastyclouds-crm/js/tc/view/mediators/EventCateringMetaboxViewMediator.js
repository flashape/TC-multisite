var EventCateringMetaboxViewMediatorClass = JS.Class({

		construct : function (eventCateringMetaboxView) {
			
	        this.view = eventCateringMetaboxView;
			adminAjaxService.newCateringServiceCartItemAdded.add(this.onNewCateringServiceCartItemAdded, this);
			adminAjaxService.newCartItemAdded.add(this.onNewItemAddedToCart, this);
			adminAjaxService.couponValidationResult.add(this.onCouponValidationResult, this);
			//adminAjaxService.shippingRateResultReceived.add(this.onShippingRateResultReceived, this);
	    },
	
	
		onAddServiceItemClick : function (){
			var selectedIndex = jQuery("#serviceTypeDropdown option").index(jQuery("#serviceTypeDropdown option:selected"));
			adminAjaxService.addServiceItemToCartSession(selectedIndex == 0 ? "cottoncandy" : "snowcones");
		},
		
	
		onApplyCouponButtonClick : function(){
			debug.log('onApplyCouponButtonClick()');
			eventCateringMetaboxViewMediator.validateCoupon(jQuery('#event_couponRow'));
			return false;
		},
		
		onDiscountUpdated : function (serviceResult){
			if(serviceResult.success){
				debug.log('OrderItemsViewMediatorClass.onDiscountUpdated success')
			}else{
				alert('There was an error updating the discount.');
			}
		},
		
		
		
		
		onCouponValidationResult : function (serviceResult){  
			jQuery("#validatingCoupon").hide();
			
			if(serviceResult.success){
				debug.log('OrderItemsViewMediatorClass.onCouponValidationResult success');
				jQuery("#event_couponTitle").text(serviceResult.couponDetails.title);  
				jQuery("#event_couponRow").data('coupon', serviceResult.couponDetails);    
				debug.log('jQuery("#event_couponRow").data() : '+jQuery("#event_couponRow").data('coupon'));
				debug.log(jQuery("#event_couponRow").data('coupon'));
				this.updateShippingDiscount();
				
		                this.updateCoupon( jQuery("#event_couponRow") );
			}else{
				alert('There was an error validating the coupon.');
			}
		},
		
		onNewItemAddedToCart : function(serviceResult){
			//$result = array('success'=>true, 'productID'=>$productID, 'cartItemID'=>$cartItemID);
			if(serviceResult.success){
				debug.log('serviceResult.succss');
				
				this.addNewOrderItemRow(serviceResult.productID, serviceResult.cartItemID);
			}else{
				alert('There was an error adding the item to the cart.');
			}
		},
		
		onNewCateringServiceCartItemAdded : function(serviceResult){
			//$result = array('success'=>true, 'productID'=>$productID, 'cartItemID'=>$cartItemID);
			if(serviceResult.success){
				debug.log('onNewCateringServiceCartItemAdded, serviceResult.succss');
				if (serviceResult.serviceType == "cottoncandy"){
					this.addNewCottonCandyCateringServiceItemRow(serviceResult.cartItemID);
				}else if (serviceResult.serviceType == "snowcones"){
					this.addNewSnowConeCateringServiceItemRow(serviceResult.cartItemID);
					
				}
			}else{
				alert('There was an error adding the item to the cart.');
			}
		},
		

			
			addNewCottonCandyCateringServiceItemRow : function(cartItemID){
				// <th class="row-title" style="text-align:left">Item</th>
				// <th style="text-align:left">Description</th>
				// <th style="text-align:left">Price</th>
				// <th style="text-align:left">Quantity</th>				
				// <th style="text-align:right">Total</th>
				// <th style="text-align:right">Remove Item</th>
				var flavorDropDown;
				var flavorDropDowns = [];
				
				for (var i = 1; i<3; i++){
					var n = 'flavor'+i+'_item_'+cartItemID;
					flavorDropDown = '<select name="'+n+'" id="'+n+'">';

					jQuery.each(TC_ProductManager.cottonCandyFlavors, function(key, value) {
						flavorDropDown += '<option value="'+value+'">'+value+'</option>';
					});
					
					flavorDropDown += '</select>';
					
					flavorDropDowns.push(flavorDropDown);
				}

				
				
				var row = jQuery(
					'<tr id="cateringServiceItemRow_'+cartItemID+'">'+
						'<td style="text-align:left">Catered Cotton Candy Machine Rental</td>'+ 
						'<td style="width:100%">'+
							'<p>For <input type="text" class="ccServiceHoursTextInput" value="3" maxlength="2" style="width:20px"> hours and <input type="text" class="ccServingsTextInput" value="50" maxlength="4" style="width:40px"> servings</p>'+
							'<input type="checkbox" name="includeCart" class="includeCart" value="off" /><label for="includeCart">Include Cart</label><br />'+
							'Flavor 1: '+flavorDropDowns[0] + '<br />'+
							'Flavor 2: '+flavorDropDowns[1] +'<br />'+
						'</td>'+
						'<td><input type="text" class="cateredServiceItemPriceTextInput" value="" maxlength="6" style="width:50px"></td>'+
						'<td><input type="text" class="event_quantity" value="1" ></td>'+	
						'<td id="event_rowTotal" class="event_rowTotal" style="text-align:right"></td>'+
						'<td style="text-align:right"><a class="button-secondary" href="#" id="event_removeProductbutton" title="Remove">X</a></td>'+
					'</tr>');
				row.addClass("event_chargeRow");
				//return row;
				
				row.insertBefore(jQuery('#event_subtotalRow'));
				jQuery('.cateredServiceItemPriceTextInput').ForcePriceOnly();
			},			
			
			addNewSnowConeCateringServiceItemRow : function(cartItemID){
				var row = jQuery(
					'<tr id="cateringServiceItemRow_'+cartItemID+'">'+
						'<td style="text-align:left">Catered Snow Cone Machine Rental</td>'+ 
						'<td>'+
							'<p>Catered Machine Rental for <input type="text" class="ccServiceHoursTextInput" value="" maxlength="2" style="width:20px"></p>'+
							'<p>Supplies for <input type="text" class="ccServingsTextInput" value="" maxlength="4" style="width:40px"> servings</p>'+
							'<input type="checkbox" name="includeCart" class="includeCart" value="off" />'+
						'</td>'+
						'<td><input type="text" class="cateredServiceItemPriceTextInput" value="" maxlength="6" style="width:50px"></td>'+
						'<td><input type="text" class="event_quantity" value="1" ></td>'+	
						'<td id="event_rowTotal" class="event_rowTotal" style="text-align:right"></td>'+
						'<td style="text-align:right"><a class="button-secondary" href="#" id="event_removeProductbutton" title="Remove">X</a></td>'+
					'</tr>');
				row.addClass("event_chargeRow");
				//return row;
				
				row.insertBefore(jQuery('#event_subtotalRow'));
				jQuery('.cateredServiceItemPriceTextInput').ForcePriceOnly();
			},
			
			onVariantChanged : function(eventObject){
				//debug.log(eventObject);
				
				// this method is currently scoped to the dropdown,
				// so "this" == the dropdown, not this mediator
				tr = jQuery(eventObject.target).closest('tr');

				eventCateringMetaboxViewMediator.updateProductRowPrice(tr);
			},
			
			updateServiceItemRowPrice : function (row){

				// the info to send when updating the cart in the session
				var itemUpdateInfo = {};
				
				
				var customItemPrice = row.find('.cateredServiceItemPriceTextInput').val();
				var price = '0.00';
				if( customItemPrice.length > 0){
					price = TC_ProductManager.priceToFixed(customItemPrice)
				}				// variantDropDowns = row.find('select[name*="variantGroup"]');
				// 
				// if ( variantDropDowns.length > 0){
				// 	
				// 	itemUpdateInfo.variantGroups = [];
				// 	
				// 	jQuery.each(variantDropDowns, function(key, value) {
				// 		var selectedVariant = jQuery(value).children("option:selected").data('variant');
				// 		var priceOffset = parseFloat( selectedVariant.priceOffset );
				// 		startPrice = startPrice + parseFloat(priceOffset);
				// 		
				// 		itemUpdateInfo.variantGroups.push(selectedVariant);
				// 	});
				// }

				var quantity = parseInt(row.find('.event_quantity').val());
				var quantityPrice = price * quantity;

				row.find('#event_rowTotal').text(quantityPrice.toFixed(2));

			
				eventCateringMetaboxViewMediator.updateSubtotal();

				itemUpdateInfo.quantity = quantity;
				itemUpdateInfo.hours = row.find('.ccServiceHoursTextInput').val();
				itemUpdateInfo.servings = row.find('.ccServingsTextInput').val();
				itemUpdateInfo.price = price;
				itemUpdateInfo.includeCart = row.find('.includeCart').attr('checked') == "checked";
				var cartItemID = row.attr("id").split('_')[1];
				adminAjaxService.updateServiceCartItem(cartItemID,itemUpdateInfo);
			},
					
			updateProductRowPrice : function (row){

				// the info to send when updating the cart in the session
				var itemUpdateInfo = {};
				
				
				var startPrice = parseFloat( row.data('product').price );
				variantDropDowns = row.find('select[name*="variantGroup"]');

				if ( variantDropDowns.length > 0){
					
					itemUpdateInfo.variantGroups = [];
					
					jQuery.each(variantDropDowns, function(key, value) {
						var selectedVariant = jQuery(value).children("option:selected").data('variant');
						var priceOffset = parseFloat( selectedVariant.priceOffset );
						startPrice = startPrice + parseFloat(priceOffset);
						
						itemUpdateInfo.variantGroups.push(selectedVariant);
					});
				}

				var quantity = parseInt(row.find('.quantity').val());
				var quantityPrice = startPrice * quantity;

				row.find('#event_rowTotal').text(quantityPrice.toFixed(2));

			
				eventCateringMetaboxViewMediator.updateSubtotal();

				itemUpdateInfo.quantity = quantity;
				var cartItemID = row.attr("id").split('_')[1];
				adminAjaxService.updateCartItem(cartItemID,itemUpdateInfo);
			},
			
			removeItem : function(row){
				row.remove();
				var idParts = row.attr("id").split('_');
				var cartItemID = idParts[1];
				
				if(idParts[0] == "cateringServiceItemRow"){
					adminAjaxService.removeServiceCartItem(cartItemID);
				}else{
					adminAjaxService.removeCartItem(cartItemID);
				}
				
				eventCateringMetaboxViewMediator.updateSubtotal();
			},
			
			updateCustomItemTotal : function (row){	
				
				// the info to send when updating the cart in the session
				
				
				var customItemPrice = row.find('.customItemPriceTextInput').val();
				var price = '0.00';
				if( customItemPrice.length > 0){
					price = TC_ProductManager.priceToFixed(customItemPrice)
				}
				row.find('#event_rowTotal').text(price);
				eventCateringMetaboxViewMediator.updateSubtotal();
				
				var itemUpdateInfo = {};
				itemUpdateInfo.name = row.find('.customItemNameTextInput').val();
				itemUpdateInfo.price = price;
				var cartItemID = row.attr("id").split('_')[1];
				
				adminAjaxService.updateCustomCartItem(cartItemID, itemUpdateInfo);
				

			},
			
			
			
			
			updateServiceItemTotal : function (row){	
				
				// the info to send when updating the cart in the session
				
				
				var customItemPrice = row.find('.cateredServiceItemPriceTextInput').val();
				var price = '0.00';
				if( customItemPrice.length > 0){
					price = TC_ProductManager.priceToFixed(customItemPrice)
				}
				row.find('#event_rowTotal').text(price);
				
				var quantity = parseInt(row.find('.event_quantity').val());
				var quantityPrice = price * quantity;

				row.find('#event_rowTotal').text(quantityPrice.toFixed(2));
				
				
				eventCateringMetaboxViewMediator.updateSubtotal();
				
				var itemUpdateInfo = {};
				itemUpdateInfo.hours = row.find('.ccServiceHoursTextInput').val();
				itemUpdateInfo.servings = row.find('.ccServingsTextInput').val();
				itemUpdateInfo.price = price;
				itemUpdateInfo.includeCart = row.find('.includeCart').attr('checked') == "checked";
				var cartItemID = row.attr("id").split('_')[1];
				
				adminAjaxService.updateServiceCartItem(cartItemID, itemUpdateInfo);
				

			},
			
			updateDiscount : function (row, isSubtotalUpdate){	
				// var amount = row.find('#event_discountAmount').val();
				// if ( amount.length == 0) {return};
				// 			
				// var discount = parseInt(row.find('#event_discountAmount').val());
				// var selectedIndex = jQuery("#event_discountType option").index(jQuery("#event_discountType option:selected"));
				// var discountTotal;
				// if ( selectedIndex == 0 ){
				// 	var chargeTotal = eventCateringMetaboxViewMediator.calculateChargeItems();
				// 	discountTotal = (chargeTotal * (discount/100)).toFixed(2);
				// }else{
				// 	discountTotal = discount.toFixed(2);
				// }
				// 			
				// row.find('#event_discountRowTotal').text('-'+discountTotal)
				// 			
				// // if isSubtotalUpdate == true, we are updating the discount from
				// // within the updateSubtotal() method.  Otherwise this is a manual
				// // change to the discount and we need to update the total.
				// if (!isSubtotalUpdate){
				// 	eventCateringMetaboxViewMediator.updateTotal(TC_ProductManager.SKIP_UPDATE_SHIPPING);
				// }
				// 
				// adminAjaxService.updateDiscount({discount:discount, discountTotal:discountTotal, type:(selectedIndex == 0 ? '%' : '$')});
				
			},
			
			validateCoupon : function (row){   
				debug.log('validateCoupon()');
				
				// jQuery("#validatingCoupon").show();
				// var code = jQuery('#event_couponCode').val();
				// 
				// adminAjaxService.validateCoupon(code);
			},
                   			
			updateCoupon : function (row, isSubtotalUpdate){	
			//                 var couponRow = jQuery("#event_couponRow");  
			// 	
			// 	// jQuery.hasData() needs to check the actual html element, not the selector result
			// 	if ( !jQuery.hasData(couponRow[0]) ){
			// 		return;
			// 	}
			// 	var couponDetails =  couponRow.data('coupon');
			// 	var discountAmount = parseFloat(couponDetails.discountAmount);        
			// 	var discountTotal;
			// 	switch(couponDetails.discountType){
			// 		case "1":
			// 		     // Dollar amount off the order total 
			// 		   	discountTotal = discountAmount.toFixed(2);
			// 			jQuery('#event_couponRowTotal').text('-'+discountTotal)
			// 			
			// 		break;   
			//    
			// 		case "2":
			// 		     // Dollar amount off each item in the order
			// 		break;   
			// 
			// 		case "3":
			// 		     // Percentage off total 
			// 			var chargeTotal = eventCateringMetaboxViewMediator.calculateChargeItems();
			// 			discountTotal = (chargeTotal * (discountAmount/100)).toFixed(2);  
			// 			jQuery('#event_couponRowTotal').text('-'+discountTotal)
			// 			
			// 		break;   
			// 
			// 		case "4":
			// 		     // Percentage off each item in the order
			// 		break;   
			// 
			// 		case "5":
			// 			// Dollar amount off the shipping total
			// 			// For coupons with shipping discounts, 
			// 			// check for a coupon when updating the shipping price
			// 			
			// 			//jQuery('#shippingDiscountTitle').text('Shipping Discount : ');
			// 			 // jQuery('#shippingDiscountRowTotal').text('-'+discountTotal);
			// 		break;   
			// 
			// 		case "6":
			// 			// Free shipping 
			// 			// For coupons with shipping discounts, 
			// 			// check for a coupon when updating the shipping price
			// 		break;   
			// 		
			// 	  }
			// 
			// 	// if isSubtotalUpdate == true, we are updating the discount from
			// 	// within the updateSubtotal() method.  Otherwise this is a manual
			// 	// change to the discount and we need to update the total.
			// 	if (!isSubtotalUpdate){
			// 		eventCateringMetaboxViewMediator.updateTotal(TC_ProductManager.SKIP_UPDATE_SHIPPING);
			// 	}
			// 	
			// 	
			},
                   
			
			getSubtotal : function(){
				var subTotal = 0;
				jQuery(".event_rowTotal").each(function() {
				    //each time we add the cell to the total
					var totalText = jQuery(this).text();
					if ( totalText == ''){
						totalText = '0.00';
					}
					subTotal += parseFloat(totalText);
				});
			
				return subTotal;
			},
			
			updateSubtotal : function(){
				var subTotal = eventCateringMetaboxViewMediator.getSubtotal();
				jQuery('#event_subtotalField').text(subTotal.toFixed(2));
				eventCateringMetaboxViewMediator.updateDiscount(jQuery('#event_discountRow'), true)
				eventCateringMetaboxViewMediator.updateCoupon(jQuery('#event_couponRow'), true)
				eventCateringMetaboxViewMediator.updateTotal();
				return subTotal;
			
			},
			
			updateTotal : function(skipShippingUpdate){
			
				var subTotal = eventCateringMetaboxViewMediator.getSubtotal();
			
				// apply manually entered discount
				var discount = jQuery('#event_discountRowTotal').text();
				if(discount.length){
					subTotal += parseFloat(discount);
				}                                                     
				
				// apply coupon discount
				var couponDiscount = jQuery('#event_couponRowTotal').text();
				if(couponDiscount.length){
					subTotal += parseFloat(couponDiscount);
				}
				
				debug.log('check calling adminAjaxService.getShippingCharge()');
				if ( skipShippingUpdate != 'SKIP_UPDATE_SHIPPING' && TC_ProductManager.isValidZip() ){
					adminAjaxService.getShippingCharge();
				}else{
					var shippingTotal = jQuery('#event_shippingRowTotal').text();
					if ( shippingTotal == '' ){
						shippingTotal = '0.00';
					}
					var total = subTotal + parseFloat(shippingTotal);
					
					var shippingDiscount = jQuery('#event_shippingDiscountRowTotal').text();
				 	
					if(shippingDiscount != ''){
						total +=  parseFloat(shippingDiscount);
					}
			
					jQuery('#event_totalField').text(total.toFixed(2));
			
				}
			
			},
			
			calculateChargeItems : function(){
				var chargeTotal = 0;
				var chargeRows = jQuery('.event_chargeRow');
				chargeRows.children("#event_rowTotal").each(function() {
				    //each time we add the cell to the total
					chargeTotal += parseFloat(jQuery(this).text());
				});
			
				return chargeTotal;
			
				//return false;
			}
			
			
			
	});
	