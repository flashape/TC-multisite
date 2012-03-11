var OrderItemsViewMediatorClass = JS.Class({
		construct : function (orderItemsView) {
	        this.view = orderItemsView;
			this.enableSubtotalUpdates = true;
			this.enableAjax = true;
			ordersAjaxService.newCustomCartItemAdded.add(this.onNewCustomCartItemAdded, this);
			ordersAjaxService.newCartItemAdded.add(this.onNewItemAddedToCart, this);
			ordersAjaxService.newCateringServiceCartItemAdded.add(this.onNewCateringServiceCartItemAdded, this);
			ordersAjaxService.newDeliveryCartItemAdded.add(this.onNewDeliveryCartItemAdded, this);
			ordersAjaxService.deliveryCartItemRemoved.add(this.onDeliveryCartItemRemoved, this);
			ordersAjaxService.couponValidationResult.add(this.onCouponValidationResult, this);
			ordersAjaxService.couponRemovedResult.add(this.onCouponRemovedResult, this);
			ordersAjaxService.shippingRateResultReceived.add(this.onShippingRateResultReceived, this);
			ordersAjaxService.getCartResultReceived.add(this.onGetCartResultReceived, this);
			ordersAjaxService.enableTaxResult.add(this.onEnableTaxResult, this);
			
	    },
	
		onCartReload : function (){
			// if this order form was reloaded from an existing cart:
			//	- fetch the cart
			//	- disable updating subtotal/total
			//	- create the necessary item rows
			//	- fill in necessary rows like discount / coupon
			//	- enable and update totals
			ordersAjaxService.getCart();
		},
	
		onGetCartResultReceived : function (serviceResult){
			if(serviceResult.success){
				debug.log('OrderItemsViewMediatorClass.onGetCartResultReceived success');
				debug.log(serviceResult.cart);
				var cart = serviceResult.cart;
				this.enableSubtotalUpdates = false;
				this.enableAjax = false;
				
				// add items
				this.addExisitingCartItems(cart.items);
				this.addExisitingServiceCartItems(cart.services);
				
				if (cart.hasOwnProperty("delivery")){
					this.addExistingDeliveryItem(cart.delivery);
				}				
				if (cart.hasOwnProperty("discount")){
					jQuery('#discountAmount').val(cart.discount.discount);
					if (cart.discount.type == "$"){
						jQuery('#discountType').val("dollar");
					}
				}
				if (cart.hasOwnProperty("coupon")){
					jQuery('#couponCode').val(cart.coupon.code);
					this.onCouponValidationResult({success:true, couponDetails:cart.coupon});
				}
			}else{
				alert('There was an error updating the discount.');
			}
			
			this.enableAjax = true;
			this.enableSubtotalUpdates = true;
			
			this.updateSubtotal();
		},
		
		addExistingDeliveryItem : function (item){
			this.addDeliveryItemRow(item.cartItemID);
			
			
			row = jQuery('#deliveryItemRow_'+item.cartItemID);
			row.find('.customItemNameTextInput').val(item.name);
			row.find('.customItemPriceTextInput').val(item.price);
			row.find('.customItemDescTextInput').val(item.description);	
			
			this.updateDeliveryItemTotal(row);
			
		},
		
		addExisitingServiceCartItems : function (items){
			var row;
			
			for (var prop in items){
				
				var item = items[prop]
				
				
				if (item.serviceType == "cottoncandy"){
					this.addNewCottonCandyCateringServiceItemRow(item.cartItemID);
				}else if (item.serviceType == "snowcones"){
					this.addNewSnowConeCateringServiceItemRow(item.cartItemID);
				}
				
				row = jQuery('#cateringServiceItemRow_'+item.cartItemID);
				
				var hoursClass = item.serviceType == "cottoncandy" ? '.ccServiceHoursTextInput' : '.scServiceHoursTextInput';
				var servingsClass = item.serviceType == "cottoncandy" ? '.ccServingsTextInput' : '.scServingsTextInput';
				
				row.find(hoursClass).val(item.hours);
				row.find(servingsClass).val(item.servings);
				row.find('.cateredServiceItemPriceTextInput').val(item.price);
				
				var variantDropDowns = row.find('select[name*="flavor"]');

				jQuery.each(variantDropDowns, function(key, value) {
					jQuery(value).val(item['flavor'+(key+1)]);
				});
				
				this.updateServiceItemTotal(row);
				
			}
		},
		
		
		addExisitingCartItems : function (items){
			debug.log('addExisitingCartItems');
			var row;
			for (var prop in items){
				var item = items[prop]
				// if the item has a productID, it's a product,
				// otherwise its a customItem
				if(item.hasOwnProperty("productID")){
					this.addNewProductItemRow(item.productID, item.cartItemID);
					
					// get the newly created product row
					row = jQuery('#item_'+item.cartItemID);
					
					// set the variants
					variantDropDowns = row.find('select[name*="variantGroup"]');
					
					if ( variantDropDowns.length > 0){


						jQuery.each(variantDropDowns, function(key, dropdown) {
							// just going to assume for now the dropdowns will always be in the same order
							// might need to manually check for the proper variantGroupID 
							
							// var prefix = "variantGroup";
							// parseInt(str.substring(prefix.length), 10);
							var label = item.data.variantGroups[key].shortDesc;
							jQuery(dropdown).find("option:contains('"+label+"')").attr("selected","selected");
							row.find('.quantity').val(item.data.quantity);
							
							if(item.data.hasOwnProperty('description')){
								row.find('.itemDescTextInput').val(item.data.description);
							}	
						});
					}
					
					this.updateProductRowTotal(row);
				}else{	
					this.addNewCustomItemRow(item.cartItemID, item.name);
					
					// get the newly created product row
					row = jQuery('#customItemRow_'+item.cartItemID);
					row.find('.customItemPriceTextInput').val(item.price);
					row.find('.customItemDescTextInput').val(item.description);
					this.updateCustomItemTotal(row);
						
				}	
				
			}
		},
	
		onAddItemClick : function (){
			var productID = jQuery("#_tc_crm_product_list option:selected").val();
			switch (productID){
				case "101":
					ordersAjaxService.addServiceItemToCartSession("cottoncandy");
				break;				
				
				case "102":
					ordersAjaxService.addServiceItemToCartSession("snowcones");
				break;
				
				default:
					// at the moment, the AdminAjaxService gathers the
					// product data itself.
					ordersAjaxService.addItemToCartSession();
				break;
			}
		},
	
		onAddCustomItemClick : function (customItemType){
			ordersAjaxService.addCustomItemToCartSession(customItemType);
		},
	
		onAddDeliveryClick : function (){
			ordersAjaxService.addDeliveryItemToCartSession();
		},

	
		onApplyCouponButtonClick : function(){
			debug.log('onApplyCouponButtonClick()');
			orderItemsViewMediator.validateCoupon(jQuery('#couponRow'));
			return false;
		},
		
		onRemoveCouponButtonClick : function(){
			debug.log('onRemoveCouponButtonClick()');
			orderItemsViewMediator.removeCoupon();
			return false;
		},
		
		onDiscountUpdated : function (serviceResult){
			if(serviceResult.success){
				debug.log('OrderItemsViewMediatorClass.onDiscountUpdated success')
			}else{
				alert('There was an error updating the discount.');
			}
		},
		
		onShippingRateResultReceived : function (serviceResult){
			if (serviceResult.success){
				var amount = parseFloat( serviceResult.amount );
				var markup = parseFloat(TC_ProductManager.shippingOptions.FedEx.markupAmount);
				amount +=  markup;
				jQuery('#shippingRowTotal').text(TC_ProductManager.priceToFixed(amount));
				
				
				this.updateShippingDiscount();
				
				
				
				this.updateTotal(TC_ProductManager.SKIP_UPDATE_SHIPPING);
				jQuery("#loadingShipping").hide();
				
			}else{
				alert('Error : '+JSON.stringify(serviceResult));
			}
		},
		
		updateShippingDiscount : function (){
			// check if there is a coupon  with a 
			// shipping discount applied
			var couponRow = jQuery("#couponRow");  
			if ( !jQuery.hasData(couponRow[0]) ){
				return;
			}
			var couponDetails =  couponRow.data('coupon');
			
			if ( couponDetails.freeShipping){
				var amount = jQuery('#shippingRowTotal').text();
				if(amount == ""){
					amount = "0";
				}
				jQuery('#shippingDiscountTitle').text('Shipping Discount : ');
				 jQuery('#shippingDiscountRowTotal').text('-'+amount);
			}
		},
		
		removeShippingDiscount : function (){
			jQuery('#shippingDiscountTitle').text('');
			jQuery('#shippingDiscountRowTotal').text('');
		},
		
		
		
		onCouponRemovedResult : function (serviceResult){
			jQuery("#validatingCoupon").hide();
			
			if(serviceResult.success){
				debug.log('OrderItemsViewMediatorClass.onCouponRemovedResult success');
				
				jQuery("#couponTitle").text('');  
				jQuery("#couponRowTotal").text('');  
				jQuery("#couponCode").val('');  
				
				var couponDetails =  jQuery("#couponRow").data('coupon');

				if ( couponDetails.freeShipping){
					this.removeShippingDiscount();
				}
					
				jQuery("#couponRow").removeData('coupon');


				jQuery('#couponCode').removeAttr("readonly");
				jQuery("#applyCouponButton").show();
				jQuery("#removeCouponButton").hide();
				
				jQuery('#couponRowTotal').text('')
				
				
				
                //this.updateCoupon( jQuery("#couponRow") );
				orderItemsViewMediator.updateTax();
				orderItemsViewMediator.updateTotal(TC_ProductManager.SKIP_UPDATE_SHIPPING);
				
			}else{
				alert('There was an error validating the coupon.');
			}
		},
		
		
		onCouponValidationResult : function (serviceResult){  
			jQuery("#validatingCoupon").hide();
			
			if(serviceResult.success){
				debug.log('OrderItemsViewMediatorClass.onCouponValidationResult success');
				jQuery("#couponTitle").text(serviceResult.couponDetails.title);  
				jQuery("#couponRow").data('coupon', serviceResult.couponDetails);    
				debug.log('jQuery("#couponRow").data() : '+jQuery("#couponRow").data('coupon'));
				debug.log(jQuery("#couponRow").data('coupon'));
				this.updateShippingDiscount();
				
                this.updateCoupon( jQuery("#couponRow") );
				jQuery('#couponCode').attr("readonly", "readonly");
				jQuery("#applyCouponButton").hide();
				jQuery("#removeCouponButton").show();

			}else{
				alert('There was an error validating the coupon.');
			}
		},
		
		onNewItemAddedToCart : function(serviceResult){
			//$result = array('success'=>true, 'productID'=>$productID, 'cartItemID'=>$cartItemID);
			if(serviceResult.success){
				debug.log('serviceResult success : '+serviceResult.success);
				
				this.addNewProductItemRow(serviceResult.productID, serviceResult.cartItemID);
			}else{
				alert('There was an error adding the item to the cart.');
			}
		},
		
		onNewCustomCartItemAdded : function(serviceResult){
			if(serviceResult.success){
				debug.log('onNewCustomCartItemAdded, serviceResult success : '+serviceResult.success);
				
				this.addNewCustomItemRow(serviceResult.cartItemID, serviceResult.customItemType);
			}else{
				alert('There was an error adding the item to the cart.');
			}
		},
				
		onNewDeliveryCartItemAdded : function(serviceResult){
			if(serviceResult.success){
				debug.log('onNewDeliveryCartItemAdded, serviceResult success : '+serviceResult.success);
				
				this.addDeliveryItemRow(serviceResult.cartItemID);
			}else{
				alert('There was an error adding the item to the cart.');
			}
		},
		
		onDeliveryCartItemRemoved : function(serviceResult){
			if(serviceResult.success){
				debug.log('onDeliveryCartItemRemoved, serviceResult success : '+serviceResult.success);
				jQuery('#addDeliveryButton').attr("disabled", false);
				
			}else{
				alert('There was an error removing the delivery charge from the cart.');
			}
		},
		
		onNewCateringServiceCartItemAdded : function(serviceResult){
			//$result = array('success'=>true, 'productID'=>$productID, 'cartItemID'=>$cartItemID);
			if(serviceResult.success){
				debug.log('onNewCateringServiceCartItemAdded, serviceResult success : '+serviceResult.success);
				if (serviceResult.serviceType == "cottoncandy"){
					this.addNewCottonCandyCateringServiceItemRow(serviceResult.cartItemID);
				}else if (serviceResult.serviceType == "snowcones"){
					this.addNewSnowConeCateringServiceItemRow(serviceResult.cartItemID);
					
				}
			}else{
				alert('There was an error adding the item to the cart.');
			}
		},
		
		onVariantChanged : function(eventObject){
			//debug.log(eventObject);
			
			// this method is currently scoped to the dropdown,
			// so "this" == the dropdown, not this mediator
			tr = jQuery(eventObject.target).closest('tr');

			orderItemsViewMediator.updateProductRowTotal(tr);
		},
		

		
		removeItem : function(row){
			row.remove();
			var idParts = row.attr("id").split('_');
			var cartItemID = idParts[1];
			
			if(idParts[0] == "customItemRow"){
				ordersAjaxService.removeCustomCartItem(cartItemID);
			}else if (idParts[0] == "cateringServiceItemRow") {
				ordersAjaxService.removeServiceCartItem(cartItemID);
			}else if (idParts[0] == "deliveryItemRow") {
				ordersAjaxService.removeDeliveryCartItem(cartItemID);
			}else{
				ordersAjaxService.removeCartItem(cartItemID);
			}
			
			orderItemsViewMediator.updateSubtotal();
		},
		
		updateRowTotal : function (row){
			var idParts = row.attr("id").split('_');
			
			if (idParts[0] == "cateringServiceItemRow") {
				this.updateServiceItemTotal(row);
			}else{
				this.updateProductRowTotal(row);
			}
		},
		
		updateProductRowTotal : function (row){

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
				
				row.find('.itemPrice').text(startPrice.toFixed(2));
				
			}

			var quantity = parseInt(row.find('.quantity').val());
			var quantityPrice = startPrice * quantity;

			row.find('#rowTotal').text(quantityPrice.toFixed(2));

			
			orderItemsViewMediator.updateSubtotal();

			itemUpdateInfo.quantity = quantity;
			var cartItemID = row.attr("id").split('_')[1];
			
			if (this.enableAjax){
				ordersAjaxService.updateCartItem(cartItemID,itemUpdateInfo);
			}
		},
		
		
		
		updateCustomItemTotal : function (row){	
			var idParts = row.attr("id").split('_')
			
			
			// deliveryItemRow is just a customItemRow with it's name field set to "Delivery",
			// but has it's own CRUD service methods, since discounts and coupons won't apply to it.
			if (idParts[0] == "deliveryItemRow"){
				orderItemsViewMediator.updateDeliveryItemTotal(row);
				return;
			}
			// the info to send when updating the cart in the session
			
			
			var customItemPrice = row.find('.customItemPriceTextInput').val();
			var price = '0.00';
			if( customItemPrice.length > 0){
				price = TC_ProductManager.priceToFixed(customItemPrice)
			}
			row.find('#rowTotal').text(price);
			orderItemsViewMediator.updateSubtotal();
			
			var itemUpdateInfo = {};
			itemUpdateInfo.name = row.find('.customItemNameTextInput').val();
			itemUpdateInfo.price = price;
			itemUpdateInfo.description = row.find('.customItemDescTextInput').val();
			var cartItemID = idParts[1];
			
			itemUpdateInfo.cartItemID = cartItemID;
			debug.log('updateCustomItemTotal:');
			
			debug.log(idParts);
			
			if (this.enableAjax){
				ordersAjaxService.updateCustomCartItem(cartItemID, itemUpdateInfo);
			}
			

		},		
		
		updateDeliveryItemTotal : function (row){	
			
			// the info to send when updating the cart in the session
			
			
			var customItemPrice = row.find('.customItemPriceTextInput').val();
			var price = '0.00';
			if( customItemPrice.length > 0){
				price = TC_ProductManager.priceToFixed(customItemPrice)
			}
			row.find('#deliveryRowTotal').text(price);
			orderItemsViewMediator.updateSubtotal();
			
			var itemUpdateInfo = {};
			itemUpdateInfo.name = row.find('.customItemNameTextInput').val();
			itemUpdateInfo.price = price;
			itemUpdateInfo.description = row.find('.customItemDescTextInput').val();
			
			var cartItemID = row.attr("id").split('_')[1];
			itemUpdateInfo.cartItemID = cartItemID;
			
			
			if (this.enableAjax){
				ordersAjaxService.updateDeliveryCartItem(cartItemID, itemUpdateInfo);
			}
			

		},
		
		updateServiceItemTotal : function (row){	
			
			// the info to send when updating the cart in the session
			
			
			var customItemPrice = row.find('.cateredServiceItemPriceTextInput').val();
			var price = '0.00';
			if( customItemPrice.length > 0){
				price = TC_ProductManager.priceToFixed(customItemPrice)
			}
			row.find('#rowTotal').text(price);
			
			var quantity = parseInt(row.find('.quantity').val());
			var quantityPrice = price * quantity;

			row.find('#rowTotal').text(quantityPrice.toFixed(2));
			
			
			orderItemsViewMediator.updateSubtotal();
			var serviceType = row.data('serviceType');
			
			var itemUpdateInfo = {};
			
			var hoursClass = serviceType == "cottoncandy" ? '.ccServiceHoursTextInput' : '.scServiceHoursTextInput';
			var servingsClass = serviceType == "cottoncandy" ? '.ccServingsTextInput' : '.scServingsTextInput';
			
			itemUpdateInfo.hours = row.find(hoursClass).val();
			itemUpdateInfo.servings = row.find(servingsClass).val();
			itemUpdateInfo.price = price;
			itemUpdateInfo.serviceType = serviceType;
			
			
			var variantDropDowns = row.find('select[name*="flavor"]');
			
			jQuery.each(variantDropDowns, function(key, value) {
				itemUpdateInfo['flavor'+(key+1)] = jQuery(value).children("option:selected").val();
			});
			
			
			itemUpdateInfo.includeCart = row.find('.includeCart').attr('checked') == "checked";
			
			var cartItemID = row.attr("id").split('_')[1];
			itemUpdateInfo.cartItemID = cartItemID;
			
			if (this.enableAjax){
				ordersAjaxService.updateServiceCartItem(cartItemID, itemUpdateInfo);
			}
		},
		
		onDiscountTypeChanged : function(){
			this.updateDiscount( jQuery('#discountRow') );
		},
		
		
		updateDiscount : function (row, isSubtotalUpdate){	
			var amount = jQuery('#discountAmount').val();
			if ( amount.length == 0) {
				// if we previously had a discount continue, otherwise return.
				if (jQuery('#discountRowTotal').text().length == 0 ){
					return
				};
				
			};


			var discount = orderItemsViewMediator.getDiscountValue();
			var discountTotal = orderItemsViewMediator.getDiscountTotal();

			var selectedIndex = jQuery("#discountType option").index(jQuery("#discountType option:selected"));


			row.find('#discountRowTotal').text('-'+(discountTotal.toFixed(2)))

			// if isSubtotalUpdate == true, we are updating the discount from
			// within the updateSubtotal() method.  Otherwise this is a manual
			// change to the discount and we need to update the total.
			if (!isSubtotalUpdate){
				orderItemsViewMediator.updateTax();
				orderItemsViewMediator.updateTotal(TC_ProductManager.SKIP_UPDATE_SHIPPING);
			}
			
			ordersAjaxService.updateDiscount({discount:discount, discountTotal:discountTotal, type:(selectedIndex == 0 ? '%' : '$')});
			
		},
		
		getDiscountValue : function (){
			var discountText = jQuery('#discountAmount').val();
			return (discountText.length > 0) ? parseInt(discountText) : 0;
		},
		
		getDiscountTotal : function (){
			//var discountText = row.find('#discountAmount').val();
			//var discount = (discountText.length > 0) ? parseInt(discountText) : 0;
			var discount = orderItemsViewMediator.getDiscountValue();
			
			debug.log('discount : ');
			debug.log(discount);
			var selectedIndex = jQuery("#discountType option").index(jQuery("#discountType option:selected"));
			var discountTotal;
			if ( selectedIndex == 0 ){
				var chargeTotal = orderItemsViewMediator.calculateChargeItems();
				//discountTotal = (chargeTotal * (discount/100)).toFixed(2);
				discountTotal = (chargeTotal * (discount/100));
			}else{
				//discountTotal = discount.toFixed(2);
				discountTotal = discount;
			}
			
			return discountTotal;
			
		},
		
		
		
		validateCoupon : function (row){   
			debug.log('validateCoupon()');
			
			jQuery("#validatingCoupon").show();
			var code = jQuery('#couponCode').val();
			
			ordersAjaxService.validateCoupon(code);
		},
                  			
		removeCoupon : function (){   
			debug.log('removeCoupon()');
			
			jQuery("#validatingCoupon").show();
			
			ordersAjaxService.removeCoupon();
		},
                  			
		updateCoupon : function (row, isSubtotalUpdate){	
               var couponRow = jQuery("#couponRow");  
			
			// jQuery.hasData() needs to check the actual html element, not the selector result
			if ( !jQuery.hasData(couponRow[0]) ){
				return;
			}
			var couponDetails =  couponRow.data('coupon');
			var discountAmount = parseFloat(couponDetails.discountAmount);        
			var discountTotal;
			switch(couponDetails.discountType){
				case "1":
				     // Dollar amount off the order total 
				   	discountTotal = discountAmount.toFixed(2);
					jQuery('#couponRowTotal').text('-'+discountTotal)
					
				break;   
  
				case "2":
				     // Dollar amount off each item in the order
				break;   

				case "3":
				     // Percentage off total 
					var chargeTotal = orderItemsViewMediator.calculateChargeItems();
					discountTotal = (chargeTotal * (discountAmount/100)).toFixed(2);  
					jQuery('#couponRowTotal').text('-'+discountTotal)
					
				break;   

				case "4":
				     // Percentage off each item in the order
				break;   

				case "5":
					// Dollar amount off the shipping total
					// For coupons with shipping discounts, 
					// check for a coupon when updating the shipping price
					
					//jQuery('#shippingDiscountTitle').text('Shipping Discount : ');
					 // jQuery('#shippingDiscountRowTotal').text('-'+discountTotal);
				break;   

				case "6":
					// Free shipping 
					// For coupons with shipping discounts, 
					// check for a coupon when updating the shipping price
				break;   
				
			  }

			// if isSubtotalUpdate == true, we are updating the discount from
			// within the updateSubtotal() method.  Otherwise this is a manual
			// change to the discount and we need to update the total.
			if (!isSubtotalUpdate){
				orderItemsViewMediator.updateTax();
				orderItemsViewMediator.updateTotal(TC_ProductManager.SKIP_UPDATE_SHIPPING);
			}
			
			
		},
                  

		getSubtotal : function(){
			var subTotal = 0;
			jQuery(".rowTotal").each(function() {
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
			if (this.enableSubtotalUpdates){
				var subTotal = orderItemsViewMediator.getSubtotal();
				jQuery('#subtotalField').text(subTotal.toFixed(2));
				orderItemsViewMediator.updateDiscount(jQuery('#discountRow'), true)
				orderItemsViewMediator.updateCoupon(jQuery('#couponRow'), true);
				orderItemsViewMediator.updateTax();
				orderItemsViewMediator.updateTotal();
				return subTotal;
			}


		},
		
		updateTotal : function(skipShippingUpdate){

			var subTotal = orderItemsViewMediator.getSubtotal();

			// apply manually entered discount
			var discount = jQuery('#discountRowTotal').text();
			if(discount.length){
				subTotal += parseFloat(discount);
			}                                                     
			
			// apply coupon discount
			var couponDiscount = jQuery('#couponRowTotal').text();
			if(couponDiscount.length){
				subTotal += parseFloat(couponDiscount);
			}
			
			// apply taxes to discounted subtotal 
			var taxTotal = jQuery('#taxRowTotal').text();
			if(taxTotal.length){
				subTotal += parseFloat(taxTotal);
			}
						
			// apply delivery charge, if any
			var deliveryCharge = jQuery('#deliveryRowTotal').text();
			if(deliveryCharge.length){
				subTotal += parseFloat(deliveryCharge);
			}
			
			debug.log('check calling ordersAjaxService.getShippingCharge()');
			if ( skipShippingUpdate != 'SKIP_UPDATE_SHIPPING' && TC_ProductManager.isValidZip() ){
				ordersAjaxService.getShippingCharge();
			}else{
				var total = subTotal;
				
				if (jQuery('#_tc_crm_shipping_enabled').is(':checked')){
					var shippingTotal = jQuery('#shippingRowTotal').text();
					if ( shippingTotal == '' ){
						shippingTotal = '0.00';
					}
					total = subTotal + parseFloat(shippingTotal);
				
					var shippingDiscount = jQuery('#shippingDiscountRowTotal').text();
			 	
					if(shippingDiscount != ''){
						total +=  parseFloat(shippingDiscount);
					}
				}

				jQuery('#totalField').text(total.toFixed(2));
				
				
				if (jQuery('.paymentRow').length){
					var paymentTotal = orderItemsViewMediator.getPaymentsTotal();
					jQuery('#balanceDueField').text( (total - paymentTotal).toFixed(2) ); 
				}else{
					jQuery('#balanceDueField').text( total.toFixed(2) ); 
				}

			}

		},
		
		getPaymentsTotal : function (){
			
			var paymentTotal = 0;
			
			
			var paymentRows = jQuery('.paymentRow');
			
			if (paymentRows.length){
				paymentRows.children(".paymentTotal").each(function() {
				    //each time we add the cell to the total
					paymentTotal += parseFloat(jQuery(this).text());
					
				});
			}
			debug.log('paymentTotal : '+paymentTotal);
			
			return paymentTotal;
		},
		
		
		calculateChargeItems : function(){
			var chargeTotal = 0;
			var chargeRows = jQuery('.chargeRow');
			chargeRows.children("#rowTotal").each(function() {
			    //each time we add the cell to the total
				chargeTotal += parseFloat(jQuery(this).text());
			});

			return chargeTotal;

			//return false;
		},
		
		addNewProductItemRow : function(selectedProductID, cartItemID){
			debug.log('addNewProductItemRow:'+selectedProductID);

			var selectedProduct = TC_ProductManager.getProductById(selectedProductID);
			var itemName = selectedProduct.itemName;
			var price = TC_ProductManager.priceToFixed(selectedProduct.price);
			var row = jQuery('<tr id="item_'+cartItemID+'" valign="top"></tr>');
			row.data('product', selectedProduct);
			row.addClass("chargeRow");
			var td = jQuery('<td width="100%"></td>');
			td.text(itemName)

			// currently, if an item does not have any variantGroups,
			// the property is serialized to an empty array.
			// If it does have variantGroups, it will be an object 
			// with each key being the id of the variantGroup.
			if (!(selectedProduct.variantGroups instanceof Array)) {
				for(var prop in selectedProduct.variantGroups){
					var p = jQuery('<p></p>');

					variantGroup = selectedProduct.variantGroups[prop];

					p.append(variantGroup.groupName);

					var variantDropDown = jQuery('<select></select>');
					variantDropDown.attr("name", 'variantGroup'+variantGroup.groupID);
					variantDropDown.attr("id", 'variantGroup'+variantGroup.groupID);

					jQuery.each(variantGroup.items, function(key, value) {
						// TODO:  there is an empty variant in one of the groups, remove it.
						if(value.shortDesc != ''){
							var variant = value;
							var optionValue = variant.variantID+'|'+TC_ProductManager.priceToFixed(variant.priceOffset);
							var option = jQuery('<option>', { value : optionValue }).text(variant.shortDesc);
							option.data('variant', variant);
						    variantDropDown.append(option); 
						}
					});

					//alert(variantDropDown.attr("name"));

					variantDropDown.change(this.onVariantChanged);

					variantDropDown.appendTo(p);
					p.appendTo(td);

				}
			}
			td.appendTo(row);

			jQuery('<td style="text-align:left" width="100%"><input type="text" class="itemDescTextInput" value=""> </td>').appendTo(row);
			jQuery('<td class="itemPrice">'+price+'</td>').appendTo(row);
			jQuery('<td><input type="text" class="quantity cmb_text_tiny" value="1" maxlength="3"  ></td>').appendTo(row);
			jQuery('<td style="text-align:right" id="rowTotal" class="rowTotal">'+price+'</td>').appendTo(row);
			jQuery('<td style="text-align:right"><a class="button-secondary" href="#" id="removeProductbutton" title="Remove">X</a></td>').appendTo(row);

			//return row;

			row.insertBefore(jQuery('#subtotalRow'));
				
			this.updateSubtotal();
		},

		// adds a new cutom item row to the table.
		// if a customItemName is provided,  it is used as the value
		// for the customItemNameTextInput, which will then be disabled.
		addNewCustomItemRow : function(cartItemID, customItemName){
			var row = jQuery(
				'<tr id="customItemRow_'+cartItemID+'">'+
					'<td style="text-align:left" width="100%">Name: <input type="text" class="customItemNameTextInput" value="'+((customItemName != null) ?  customItemName : '')+'"'+
					((customItemName != null) ?  ' readonly="readonly"' : '') + '> </td>'+ 
					'<td style="text-align:left" width="100%"><input type="text" class="customItemDescTextInput" value=""> </td>'+ 
					'<td><input type="text" class="customItemPriceTextInput" value="" maxlength="6" style="width:50px"></td>'+
					'<td></td>'+
					'<td id="rowTotal" class="rowTotal" style="text-align:right"></td>'+
					'<td style="text-align:right"><a class="button-secondary" href="#" id="removeProductbutton" title="Remove">X</a></td>'+
				'</tr>');
			row.addClass("chargeRow");
			//return row;
			//debug.debug(row);
			row.insertBefore(jQuery('#subtotalRow'));
			jQuery('.customItemPriceTextInput').ForcePriceOnly();
		},
		
		addDeliveryItemRow : function(cartItemID){
			var row = jQuery(
				'<tr id="deliveryItemRow_'+cartItemID+'">'+
					'<td style="text-align:left" width="100%">Name: <input type="text" class="customItemNameTextInput" value="Delivery" readonly="readonly"> </td>'+ 
					'<td style="text-align:left" width="100%"><input type="text" class="customItemDescTextInput" value=""> </td>'+ 
					'<td><input type="text" class="customItemPriceTextInput" value="" maxlength="6" style="width:50px"></td>'+
					'<td></td>'+
					'<td id="deliveryRowTotal" class="deliveryRowTotal" style="text-align:right">0.00</td>'+
					'<td style="text-align:right"><a class="button-secondary" href="#" id="removeProductbutton" title="Remove">X</a></td>'+
				'</tr>');
			//row.addClass("chargeRow");
			//return row;

			row.insertAfter(jQuery('#subtotalRow'));
			jQuery('.customItemPriceTextInput').ForcePriceOnly();
			
			jQuery('#addDeliveryButton').attr("disabled", true);
			
		},
		
		

		addNewCottonCandyCateringServiceItemRow : function(cartItemID){
			// <th class="row-title" style="text-align:left">Item</th>
			// <th style="text-align:left">Description</th>
			// <th style="text-align:left">Price</th>
			// <th style="text-align:left">Quantity</th>				
			// <th style="text-align:right">Total</th>
			// <th style="text-align:right">Remove Item</th>
			var flavorDropDowns = [];

			for (var i = 1; i<4; i++){
				var n = 'flavor'+i+'_item_'+cartItemID;
				flavorDropDowns.push(this.createCottonCandyFlavorsDropdown(n));
			}



			var row = jQuery(
				'<tr id="cateringServiceItemRow_'+cartItemID+'">'+
					'<td style="text-align:left">Catered Cotton Candy Machine Rental</td>'+ 
					'<td style="width:100%">'+
						'<p>For <input type="text" class="ccServiceHoursTextInput" value="3" maxlength="2" style="width:20px"> hours and <input type="text" class="ccServingsTextInput" value="50" maxlength="4" style="width:40px"> servings</p>'+
						// '<input type="checkbox" name="includeCart" class="includeCart" value="off" /><label for="includeCart">Include Cart</label><br />'+
						'Flavor 1: '+flavorDropDowns[0] +'<br />'+
						'Flavor 2: '+flavorDropDowns[1] +'<br />'+
						'Flavor 3: '+flavorDropDowns[2] +'<br />'+
					'</td>'+
					'<td><input type="text" class="cateredServiceItemPriceTextInput" value="" maxlength="6" style="width:50px"></td>'+
					'<td><input type="text" class="quantity cmb_text_tiny" value="1" maxlength="3" ></td>'+	
					'<td id="rowTotal" class="rowTotal" style="text-align:right"></td>'+
					'<td style="text-align:right"><a class="button-secondary" href="#" id="removeProductbutton" title="Remove">X</a></td>'+
				'</tr>');
			row.addClass("chargeRow");
			//return row;
			row.data('serviceType', 'cottoncandy');
			row.insertBefore(jQuery('#subtotalRow'));
			jQuery('.cateredServiceItemPriceTextInput').ForcePriceOnly();
		},			

		addNewSnowConeCateringServiceItemRow : function(cartItemID){
			
			var flavorDropDowns = [];

			for (var i = 1; i<4; i++){
				var n = 'flavor'+i+'_item_'+cartItemID;
				flavorDropDowns.push(this.createSnowConeFlavorsDropdown(n));
			}
			
			
			
			var row = jQuery(
				'<tr id="cateringServiceItemRow_'+cartItemID+'">'+
					'<td style="text-align:left">Catered Snow Cone Machine Rental</td>'+ 
					'<td style="width:100%">'+
						'<p>For <input type="text" class="scServiceHoursTextInput" value="3" maxlength="2" style="width:20px"> hours and <input type="text" class="scServingsTextInput" value="50" maxlength="4" style="width:40px"> servings</p>'+
						// '<input type="checkbox" name="includeCart" class="includeCart" value="off" /><label for="includeCart">Include Cart</label><br />'+
						'Flavor 1: '+flavorDropDowns[0] + '<br />'+
						'Flavor 2: '+flavorDropDowns[1] +'<br />'+
						'Flavor 2: '+flavorDropDowns[2] +'<br />'+
					'</td>'+
					'<td><input type="text" class="cateredServiceItemPriceTextInput" value="" maxlength="6" style="width:50px"></td>'+
					'<td><input type="text" class="quantity cmb_text_tiny" value="1" maxlength="3"  ></td>'+	
					'<td id="rowTotal" class="rowTotal" style="text-align:right"></td>'+
					'<td style="text-align:right"><a class="button-secondary" href="#" id="removeProductbutton" title="Remove">X</a></td>'+
				'</tr>');
			row.addClass("chargeRow");
			//return row;
			row.data('serviceType', 'snowcones');

			row.insertBefore(jQuery('#subtotalRow'));
			jQuery('.cateredServiceItemPriceTextInput').ForcePriceOnly();
		},
		
		createCottonCandyFlavorsDropdown : function (name){
			var flavorDropDown = '<select name="'+name+'" id="'+name+'">';

			jQuery.each(TC_ProductManager.cottonCandyFlavors, function(key, value) {
				flavorDropDown += '<option value="'+value+'">'+value+'</option>';
			});

			flavorDropDown += '</select>';
			
			return flavorDropDown;
		},
		
				
		createSnowConeFlavorsDropdown : function (name){
			var flavorDropDown = '<select name="'+name+'" id="'+name+'">';

			jQuery.each(TC_ProductManager.snowConeFlavors, function(key, value) {
				flavorDropDown += '<option value="'+value+'">'+value+'</option>';
			});

			flavorDropDown += '</select>';
			
			return flavorDropDown;
		},
		
		onShippingEnabledChange : function(){
			if (jQuery('#_tc_crm_shipping_enabled').is(':checked')  ){
				jQuery('#shippingRow').show();
				ordersAjaxService.getShippingCharge();
				
			}else{
				jQuery('#shippingRow').hide();
				this.updateTotal(TC_ProductManager.SKIP_UPDATE_SHIPPING);
				
			}
		},
			
		onTaxEnabledChange : function(){
			if (jQuery('#_tc_crm_tax_enabled').is(':checked')  ){
				//this.updateTax();
				this.updateSubtotal();
				ordersAjaxService.enableTax(true);
			}else{
				this.removeTax();
				ordersAjaxService.enableTax(false);
			}
		},
		
		getTaxableTotal : function (){
			var taxableTotal = this.getSubtotal();
			debug.log("taxableTotal : "+taxableTotal);
			taxableTotal -= this.getDiscountTotal();
			
			var couponDiscount = jQuery('#couponRowTotal').text();
			if(couponDiscount.length){
				debug.log(parseFloat(couponDiscount));
				taxableTotal += parseFloat(couponDiscount);
				debug.log("afer coupon taxableTotal : "+taxableTotal);
				
			}
			
			return taxableTotal;
		},
		
		getTaxTotal : function (){
			var taxTotal =  0;
			
			if ( jQuery('#_tc_crm_tax_enabled').is(':checked') ){
				var taxableTotal = this.getTaxableTotal();
				taxTotal = taxableTotal * .0875;
			}
			
			return taxTotal;
		},
		
		updateTax : function (){
			var taxTotal = this.getTaxTotal()
			jQuery('#taxRowTotal').text(taxTotal.toFixed(2));
			
		},
		
		removeTax : function (){
			jQuery('#taxRowTotal').text('');
			this.updateTotal();
			
		},
		
		onEnableTaxResult : function (serviceResult){
			debug.log('OrderItemsViewMediatorClass.onEnableTaxResult : ');
			debug.log(serviceResult.cart);
		},
		
		
		setRowStateToDefault: function (row) {
			row.find('.editState').hide();
			row.find('.defaultState').show();
		},

		setRowStateToEdit: function (row){
			row.find('.editState').show();
			row.find('.defaultState').hide();
		},
		
		addItemRow : function(selectedObj){
			var model = this.createOrderItemModel(selectedObj);
			switch(selectedObj.type){
				case 'tc_products':
					this.addProductRow(model);
				break;
				
				case 'tc_service':
					this.addServiceRow(model);
				break;
				
				
			}
			
		},
		
		addServiceRow : function (model){
			var newRow = jQuery( this.getTemplateRowIDByType(model.type) ).clone();
			newRow.removeAttr("id");

			
			this.insertRowIntoTable(newRow)
			newRow.data("model", model);
			debug.log("productModel : ", this.getProductById(model.productID));
			newRow.data("productModel", this.getProductById(model.productID));
			
			this.initializeNewRow(newRow);
			this.populateServiceRow(newRow);

			this.checkItemUpdated(newRow);
			return newRow;
			
		},
		
		
		addProductRow : function (model){
			
			debug.log('addProductRow : ', model);
			
			var newRow = jQuery( this.getTemplateRowIDByType(model.type) ).clone();
			newRow.removeAttr("id");

			
			this.insertRowIntoTable(newRow)
			newRow.data("model", model);
			debug.log("productModel : ", this.getProductById(model.productID));
			newRow.data("productModel", this.getProductById(model.productID));
			
			this.initializeNewRow(newRow);



			// newRow.find('.defaultState').hide();
			// 
			// newRow.find('.editState')
			// 	.mouseenter(function() { jQuery(this).addClass('within') })
			// 	        	.mouseleave(function() { jQuery(this).removeClass('within') })

			this.populateProductRow(newRow);

			this.checkItemUpdated(newRow);
			return newRow;
		},
		
		getTemplateRowIDByType : function(type) {
			var typeIDMap = {};
			typeIDMap['tc_products'] = '#productRowTemplate';
			typeIDMap['tc_service'] = '#serviceRowTemplate';
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
			var productModel = newRow.data('productModel');
			
			switch(productModel.type){
				case 'tc_products':
					if (productModel.variations.length > 0){
						this.generateVariationUIContent(newRow);
					}
				break;
				
				case 'tc_service':
					
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
		
		checkItemUpdated : function (row){
			var oldModel = row.data('model');
			var newModel = this.getUpdatedRowModel(row);
			debug.log('oldModel: ', oldModel);
			debug.log('newModel: ', newModel);
			debug.log('Object.equals : '+Object.equals(oldModel, newModel));
			
			if( !Object.equals(oldModel, newModel) ){
				row.data("model", newModel);
				
				var rowTotal = this.calculateRowTotal(row);
				debug.log("returned rowTotal :", rowTotal);
				
				row.data("rowTotal", rowTotal);
				row.find('.rowTotalColumn').text(this.priceToFixed(rowTotal));
			}
		},

		
		calculateRowTotal : function (row){
			
			// the info to send when updating the cart in the session
			//var itemUpdateInfo = {};
			var rowTotal;
			
			
			var productModel = row.data('productModel');
			var model = row.data('model');
			
			switch(productModel.type){
				case 'tc_products':
					rowTotal = this.calculateProductRowTotal(row);
				break;
				
				case 'tc_service':
					rowTotal = this.calculateServiceRowTotal(row);
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
			
			

			
			// // the info to send when updating the cart in the session
			// var itemUpdateInfo = {};
			// 
			// 
			// var startPrice = parseFloat( row.data('product').price );
			// variantDropDowns = row.find('select[name*="variantGroup"]');
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
			// 	
			// 	row.find('.itemPrice').text(startPrice.toFixed(2));
			// 	
			// }
			// 
			// var quantity = parseInt(row.find('.quantity').val());
			// var quantityPrice = startPrice * quantity;
			// 
			// row.find('#rowTotal').text(quantityPrice.toFixed(2));
			// 
			// 
			// orderItemsViewMediator.updateSubtotal();
			// 
			// itemUpdateInfo.quantity = quantity;
			// var cartItemID = row.attr("id").split('_')[1];
			// 
			// if (this.enableAjax){
			// 	ordersAjaxService.updateCartItem(cartItemID,itemUpdateInfo);
			// }
			
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
			model.productID = selectedObj.value;
			model.type = selectedObj.type;
			model.quantity = 1;
			model.description = ''			

			if (model.type == 'tc_products'){
				// will be an array of objects with properties: 
				// - variationID
				// - p2pid
				// - selected (array of selected variationItemIDs)
				model.variations = []; 
				model.price = parseFloat(selectedObj.price);
			}

			if (model.type == 'tc_service'){
				model.hours = selectedObj.defaults.default_hours; 
				model.servings = selectedObj.defaults.default_servings; 
				model.price = 0;				
			}

			//TODO Use the 'customPrice' property to allow for manual price changes on an item.
			//model.customPrice = null;
			return model;
		},
		
		getUpdatedRowModel : function (row){
			
			var oldModel = row.data('model');
			
			var newModel = {};
			
			//copy over the props that arent going to change
			newModel.id = oldModel.id;
			newModel.productID = oldModel.productID;
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
				
				
				
			}

			
			return newModel;
			
			
		},
		
		
		
		
		
		
		
		priceToFixed : function (price){
			return parseFloat(price).toFixed(2);
		},
		
		
		
		
		
		
		
		
			
			
	});
	