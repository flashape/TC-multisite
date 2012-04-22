var OrdersAjaxServiceClass = JS.Class({
	construct : function () {
        //this.list = new Array();
		this.addToCartResult = new signals.Signal();
		this.removeFromCartResult = new signals.Signal();
		this.updateCartItemResult = new signals.Signal();

		
		
		this.discountUpdated = new signals.Signal();
		this.couponValidationResult = new signals.Signal();
		this.couponRemovedResult = new signals.Signal();
		this.shippingRateResultReceived = new signals.Signal();
		
		this.enableTaxResult = new signals.Signal();
		
		this.getCartResultReceived = new signals.Signal();
		this.reloadOrderResultReceived = new signals.Signal();
    },


	getContactDetails : function (selectedContactID, resultHandler){
		debug.log('getContactDetails : '+selectedContactID);
		var data = {action:'tc_get_contact_details'};
		data.selectedContactID = selectedContactID;
		jQuery.post(ajaxurl, data, resultHandler, 'json');
	},
	
	
	addCartItem : function (model){
		var data = this.createCartActionData('tc_add_cart_item');
		data.rawModel = model;
		data.model = JSON.stringify(model);
		this.doCartPost(data, 'addToCartResult', 'addCartItem');
		
		
	},
		
	removeCartItem : function (model){
		var data = this.createCartActionData('tc_remove_cart_item');
		//data.model = model;
		data.rawModel = model;
		data.model = JSON.stringify(model);
		this.doCartPost(data, 'removeFromCartResult', 'removeCartItem');
		
		
	},
	
				
	updateCartItem : function (model){
		var data = this.createCartActionData('tc_update_cart_item');
		//data.model = model;
		data.rawModel = model;
		data.model = JSON.stringify(model);
		this.doCartPost(data, 'updateCartItemResult', 'updateCartItem');
		
	},
	
	updateDiscount : function (discountInfo){
		var data = this.createCartActionData('tc_update_discount');
		data.discountData = JSON.stringify(discountInfo);
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
	
		
	
	reloadOrder : function (orderID){
		var data = this.createCartActionData('tc_reload_order');
		data.orderID = orderID;
		this.doCartPost(data, 'reloadOrderResultReceived', 'getCart');
	},
	
	
	
	doCartPost : function (data, resultSignal, methodName ){
		var service = this;
		debug.log('DO CART POST : action : ', data.action, ' data : ', data);
		jQuery.post(ajaxurl, data, 
			function (result){
				debug.log(methodName+' result:');
				debug.log(result);
				result.postData = data;
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
	


	
	getShippingCharge : function(shippingData){
		
		//var data = customerInfoViewMediator.getShippingData();
		var data = shippingData;
		data.action = "tc_update_shipping_rates";
		// if (!(jQuery('#_tc_crm_shipping_enabled').is(':checked')) ){
		// 	return;
		// }
		// 
		// if (data.shippingItems.length == 0){
		// 	jQuery('#shippingRowTotal').text('');
		// 	return;
		// }

		debug.log('getShippingCharge()');

		data.cartID = jQuery('#cartID').val();
		
		this.doCartPost(data, 'shippingRateResultReceived', 'getShippingCharge');
		

		return false;
	},

	
    
});