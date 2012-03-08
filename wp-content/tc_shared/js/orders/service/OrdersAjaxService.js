var OrdersAjaxServiceClass = JS.Class({
	construct : function () {
        //this.list = new Array();
		this.newCartItemAdded = new signals.Signal();
		this.cartItemRemoved = new signals.Signal();
		this.cartItemUpdated = new signals.Signal();
		
		
		this.newCustomCartItemAdded = new signals.Signal();	
		this.customCartItemUpdated = new signals.Signal();
		this.customCartItemRemoved = new signals.Signal();
		
		this.newCateringServiceCartItemAdded = new signals.Signal();
		this.serviceCartItemUpdated = new signals.Signal();
		this.serviceCartItemRemoved = new signals.Signal();	
			
		this.newDeliveryCartItemAdded = new signals.Signal();
		this.deliveryCartItemUpdated = new signals.Signal();
		this.deliveryCartItemRemoved = new signals.Signal();
		
		
		this.discountUpdated = new signals.Signal();
		this.couponValidationResult = new signals.Signal();
		this.couponRemovedResult = new signals.Signal();
		this.shippingRateResultReceived = new signals.Signal();
		
		this.enableTaxResult = new signals.Signal();
		
		this.getCartResultReceived = new signals.Signal();
    },

	getContactDetails : function (selectedContactID, resultHandler){
		debug.log('getContactDetails : '+selectedContactID);
		var data = {action:'tc_crm_get_contact_details'};
		data.selectedContactID = selectedContactID;
		jQuery.post(ajaxurl, data, resultHandler, 'json');
	},	
		
	addItemToCartSession : function (){
		debug.log('addItemToCartSession()');
		// currently will use the item selected in the products dropdown
		
		var data = this.createCartActionData('tc_add_to_cart');
		
		var cartItem = TC_ProductManager.getProductDefaultCartData();
		
		data.productID = cartItem.productID;
		data.itemToAdd = stringify(cartItem);
		debug.log(data);
		this.doCartPost(data, 'newCartItemAdded', 'addItemToCartSession');
		
	},



	updateCartItem : function (cartItemID, itemData){
		debug.log('updateCartItem()');
		
		var data = this.createCartActionData('tc_update_item', cartItemID);
		
		data.itemData = stringify(itemData);
		debug.log(data);
		this.doCartPost(data, 'cartItemUpdated', 'updateCartItem');
	},
	
	
	removeCartItem : function (cartItemID){
		
		var data = this.createCartActionData('tc_remove_from_cart', cartItemID);
		this.doCartPost(data, 'cartItemRemoved', 'removeCartItem');
	},
	
	
	addCustomItemToCartSession : function (customItemType){
		debug.log('addCustomItemToCartSession()');
		
		var data = this.createCartActionData('tc_add_custom_item_to_cart');
		if (customItemType){
			data.name = customItemType;
		}
		this.doCartPost(data, 'newCustomCartItemAdded', 'addCustomItemToCartSession');
	},
	
	


	updateCustomCartItem : function (cartItemID, itemData){
		
		var data = this.createCartActionData('tc_update_custom_item', cartItemID);
		
		data.itemData = stringify(itemData);
		debug.log(data);
		this.doCartPost(data, 'customCartItemUpdated', 'updateCustomCartItem');
	},


	removeCustomCartItem : function (cartItemID){
		var data = this.createCartActionData('tc_remove_custom_item_from_cart', cartItemID);
		this.doCartPost(data, 'customCartItemRemoved', 'removeCustomCartItem');
	},
	
	
	addServiceItemToCartSession : function (serviceType){
		debug.log('addServiceItemToCartSession()');
		
		var data = this.createCartActionData('tc_add_service_item_to_cart');
		data.serviceType = serviceType;
		this.doCartPost(data, 'newCateringServiceCartItemAdded', 'addServiceItemToCartSession');
	},
	
	
	updateServiceCartItem : function (cartItemID, itemData){
		
		var data = this.createCartActionData('tc_update_service_item', cartItemID);
		
		data.itemData = stringify(itemData);
		debug.log(data);
		this.doCartPost(data, 'serviceCartItemUpdated', 'updateServiceCartItem');
	},


	removeServiceCartItem : function (cartItemID){
		var data = this.createCartActionData('tc_remove_service_item_from_cart', cartItemID);
		this.doCartPost(data, 'serviceCartItemRemoved', 'removeServiceCartItem');
	},
	
	
		
	addDeliveryItemToCartSession : function (){
		debug.log('addDeliveryItemToCartSession()');
		
		var data = this.createCartActionData('tc_add_delivery_item_to_cart');
		this.doCartPost(data, 'newDeliveryCartItemAdded', 'addDeliveryItemToCartSession');
	},
	
	
	updateDeliveryCartItem : function (cartItemID, itemData){
		
		var data = this.createCartActionData('tc_update_delivery_item', cartItemID);
		
		data.itemData = stringify(itemData);
		debug.log(data);
		this.doCartPost(data, 'deliveryCartItemUpdated', 'updateDeliveryCartItem');
	},


	removeDeliveryCartItem : function (cartItemID){
		var data = this.createCartActionData('tc_remove_delivery_item_from_cart', cartItemID);
		this.doCartPost(data, 'deliveryCartItemRemoved', 'removeDeliveryCartItem');
	},
	
	
	
	
	updateDiscount : function (discountInfo){
		var data = this.createCartActionData('tc_update_discount');
		data.discountData = stringify(discountInfo);
		this.doCartPost(data, 'discountUpdated', 'updateDiscount');
	},
	validateCoupon : function (couponCode){
		var data = this.createCartActionData('tc_validate_coupon');
		data.couponCode = couponCode;
		this.doCartPost(data, 'couponValidationResult', 'validateCoupon');
	},
	
	removeCoupon : function (){
		var data = this.createCartActionData('tc_remove_coupon');
		this.doCartPost(data, 'couponRemovedResult', 'removeCoupon');
	},
	
	enableTax : function (enabled){
		var data = this.createCartActionData('tc_enable_tax');
		data.taxEnabled = enabled;
		this.doCartPost(data, 'enableTaxResult', 'enableTax');
	},
	
	
	
	getCart : function (){
		var data = this.createCartActionData('tc_get_cart');
		this.doCartPost(data, 'getCartResultReceived', 'getCart');
	},
	
	
	
	doCartPost : function (data, resultSignal, methodName ){
		var service = this;
		
		jQuery.post(ajaxurl, data, 
			function (result){
				debug.log(methodName+' result:');
				debug.log(result);
				service[resultSignal].dispatch(result);
			},
			'json'
		);
	},
	
	createCartActionData : function (actionName, cartItemID){
		var data = {action:actionName};
		data.cartID = jQuery('#cartID').val();
		
		if ( cartItemID){
			data.cartItemID = cartItemID;
		}
		
		debug.log(data);
		
		return data;
	},
	



	getShippingCharge : function(){
		jQuery('#shippingRowTotal').text('');

		var data = customerInfoViewMediator.getShippingData();
		
		if (!data){ return };
		
		if (!(jQuery('#_tc_crm_shipping_enabled').is(':checked')) ){
			return;
		}
		
		if (data.shippingItems.length == 0){
			jQuery('#shippingRowTotal').text('');
			return;
		}

		debug.log('getShippingCharge()');

		data.serviceType = jQuery('#shipmentType').val();
		data.cartID = jQuery('#cartID').val();
		
		this.doCartPost(data, 'shippingRateResultReceived', 'getShippingCharge');
		
		jQuery("#loadingShipping").show();

		return false;
	},

	
    
});