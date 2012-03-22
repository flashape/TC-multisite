var CustomerInfoViewMediatorClass = JS.Class({
	
	construct : function (customerInfoView) {
	        this.view = customerInfoView;
			this.test = 'testing this';
			this.selectedContactModel = null;
	    },
	
	clearContactForm : function () {
		jQuery("#_tc_crm_contact_first_name").val('');
		jQuery("#_tc_crm_contact_last_name").val('');
		jQuery("#_tc_crm_contact_company").val('');
		jQuery("#_tc_crm_contact_url").val('');
		jQuery("#_tc_crm_contact_personal_email").val('');
		jQuery("#_tc_crm_contact_personal_phone").val('');
		jQuery("#_tc_crm_contact_personal_address_1").val('');
		jQuery("#_tc_crm_contact_personal_address_2").val('');
		jQuery("#_tc_crm_contact_personal_address_city").val('');
		jQuery("#_tc_crm_contact_personal_address_state option:first").attr("selected", "selected");
		jQuery("#_tc_crm_contact_personal_address_zip").val('');
		jQuery("#_tc_crm_contact_business_email").val('');
		jQuery("#_tc_crm_contact_business_phone").val('');
		jQuery("#_tc_crm_contact_business_address_1").val('');
		jQuery("#_tc_crm_contact_business_address_2").val('');
		jQuery("#_tc_crm_contact_business_address_city").val('');
		jQuery("#_tc_crm_contact_business_address_state option:first").attr("selected", "selected");
		jQuery("#_tc_crm_contact_business_address_zip").val('');
	},
		
		
		
	onEditCustomerCheckboxChange : function (){
		debug.log("onEditCustomerCheckboxChange()");
		if (jQuery('#editCustomerCheckbox').is(':checked') ){
			jQuery("#customer_address_first_name").removeAttr('disabled');
			jQuery("#customer_address_last_name").removeAttr('disabled');
			jQuery("#customer_email").removeAttr('disabled');
			jQuery("#customer_phone").removeAttr('disabled');
			jQuery("#customer_company").removeAttr('disabled');
		}else{
			debug.log("this.customerInfoHasChanged() : ", this.customerInfoHasChanged());
			if (this.customerInfoHasChanged()){
				 jQuery("#customer-info-changed-dialog" ).dialog('open');
			}else{
				this.populateContactForm();
			}
		}

		
	},
	
	customerInfoHasChanged : function(){
		var newCustomerFirstName = jQuery("#customer_address_first_name").val();
		var newCustomerLastName = jQuery("#customer_address_last_name").val();
		var newCustomerEmail = jQuery("#customer_email").val();
		var newCustomerPhone = jQuery("#customer_phone").val();
		var newCustomerCompany = jQuery("#customer_company").val();
		
		if (
			this.selectedContactModel.customerFirstName != newCustomerFirstName || 
			this.selectedContactModel.customerLastName != newCustomerLastName || 
			this.selectedContactModel.customerEmail != newCustomerEmail || 
			this.selectedContactModel.customerPhone != newCustomerPhone || 
			this.selectedContactModel.customerCompany != newCustomerCompany)
			{
				return true;
			}else{
				return false;
			}

	}, 
	
	getUpdatedCustomerInfo : function(){
		
		
	},
	
	
	
			
	populateContactForm : function () { 
			
		jQuery("#customer_address_first_name").attr('disabled', 'disabled').val(this.selectedContactModel.customerFirstName);
		jQuery("#customer_address_last_name").attr('disabled', 'disabled').val(this.selectedContactModel.customerLastName);
		jQuery("#customer_email").attr('disabled', 'disabled').val(this.selectedContactModel.customerEmail);
		jQuery("#customer_phone").attr('disabled', 'disabled').val(this.selectedContactModel.customerPhone);
		jQuery("#customer_company").attr('disabled', 'disabled').val(this.selectedContactModel.customerCompany);
	
	},
	
	getShippingAddress : function (){
		var shippingAddress = {};
		// jQuery("#_tc_crm_contact_personal_email").val('');
		// jQuery("#_tc_crm_contact_personal_phone").val('');
		shippingAddress.address_1 = jQuery("#_tc_crm_contact_personal_address_1").val();
		shippingAddress.address_2 = jQuery("#_tc_crm_contact_personal_address_2").val();
		shippingAddress.city = jQuery("#_tc_crm_contact_personal_address_city").val();
		shippingAddress.state = jQuery("#_tc_crm_contact_personal_address_state").val();
		shippingAddress.zip = jQuery("#_tc_crm_contact_personal_address_zip").val();

		return shippingAddress;

	},
	
	getShippingData : function(){
		var data = {action:'tc_crm_update_shipping_rates'};

		data.customerInfo = this.getShippingAddress();

		debug.log(data);

		if (data.customerInfo.zip == ''){
			// need at lest zip to calculate shipping
			return;
		}

		if (data.customerInfo.state == 'null'){
			data.customerInfo.state = '';
		}


		data.shippingItems = [];



		var chargeRows = jQuery('.chargeRow');
		var shippingItem;
		chargeRows.each(function(key, value) {
			//alert('row id : '+row.attr('id'));
			var row = jQuery(value);
			var product = row.data('product');
			if (product){
				shippingItem = {};
				shippingItem.itemID = product.itemID;

				shippingItem.weight = product.weight;
				shippingItem.quantity = parseInt(row.find('.quantity').val());
				data.shippingItems.push(shippingItem);
			}
		});

		return data;

	},
	
	onContactSelected : function(){
		debug.log('CustomerInfoViewMediator.onContactSelected()')
	
		var selectedContactID = jQuery('#tc_selected_contact').val();
		debug.log('onContactChanged. selectedContactID :', selectedContactID)
		
		// if ( selectedContactID == '') { 
		// 	this.clearContactForm();
		// 	return;
		// };
		
		ordersAjaxService.getContactDetails(selectedContactID, jQuery.proxy(this, 'onGetContactDetailsResult'));
	
	
	},
			
	// 
	// onContactChanged : function(){
	// 	debug.log('onContactChanged')
	// 
	// 	var selectedContactID = jQuery('#panalo_selected_contact').val();
	// 	debug.log('onContactChanged. selectedContactID :', selectedContactID)
	// 	
	// 	if ( selectedContactID == '') { 
	// 		this.clearContactForm();
	// 		return;
	// 	};
	// 	
	// 	adminAjaxService.getContactDetails(selectedContactID, jQuery.proxy(this, 'onGetContactDetailsResult'));
	// 
	// 
	// },
	// 		

	
	onGetContactDetailsResult : function (result){
		debug.log('onGetContactDetailsResult : ', result)
		if (result.success){
			this.selectedContactModel = result.contactModel;
			this.populateContactForm();
	
			//adminAjaxService.getShippingCharge();
		}else{
			alert('Error getting contact details.');
		}
	}
});