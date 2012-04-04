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
	
	
			
		
	onEditBillingAddressCheckboxChange : function (){
		debug.log("onEditBillingAddressCheckboxChange()");
		
		if (jQuery('#editBillingAddressCheckbox').is(':checked') ){
			jQuery("#billing_address_first_name").removeAttr('disabled');
			jQuery("#billing_address_last_name").removeAttr('disabled');
			jQuery("#billing_address_line_1").removeAttr('disabled');
			jQuery("#billing_address_line_2").removeAttr('disabled');
			jQuery("#billing_address_company").removeAttr('disabled');
			jQuery("#billing_address_city").removeAttr('disabled');
			jQuery("#billing_address_state").removeAttr('disabled');
			jQuery("#billing_address_zip").removeAttr('disabled');
			jQuery('#billingAddressSelect').removeAttr('disabled');
		}else{
			//debug.log("this.billingAddressHasChanged() : ", this.billingAddressHasChanged());
			if (this.billingAddressHasChanged()){
				 jQuery("#billing-address-changed-dialog" ).dialog('open');
			}else{
				if (adminpage == 'post-php'){
					var oldSelectedID = jQuery('#tc_saved_billing_addr').val();
					var newSelectedID = jQuery('#billingAddressSelect option:selected').val();
					if (oldSelectedID == newSelectedID){
						jQuery('#billingAddressSelect').attr('disabled', 'disabled');
					}
					this.populateBillingAddress();
				}else{
					this.populateBillingAddress();
				}			
			}
		}

		
	},
	
	
				
		
	onEditShippingAddressCheckboxChange : function (){
		debug.log("onEditShippingAddressCheckboxChange()");
		
		if (jQuery('#editShippingAddressCheckbox').is(':checked') ){
			jQuery("#shipping_address_first_name").removeAttr('disabled');
			jQuery("#shipping_address_last_name").removeAttr('disabled');
			jQuery("#shipping_address_line_1").removeAttr('disabled');
			jQuery("#shipping_address_line_2").removeAttr('disabled');
			jQuery("#shipping_address_company").removeAttr('disabled');
			jQuery("#shipping_address_city").removeAttr('disabled');
			jQuery("#shipping_address_state").removeAttr('disabled');
			jQuery("#shipping_address_zip").removeAttr('disabled');
			jQuery('#shippingAddressSelect').removeAttr('disabled');
			
		}else{
			debug.log("this.shippingAddressHasChanged() : ", this.shippingAddressHasChanged());
			if (this.shippingAddressHasChanged()){
				 jQuery("#shipping-address-changed-dialog" ).dialog('open');
			}else{
				
				if (adminpage == 'post-php'){
					var oldSelectedID = jQuery('#tc_saved_shipping_addr').val();
					var newSelectedID = jQuery('#shippingAddressSelect option:selected').val();
					if (oldSelectedID == newSelectedID){
						jQuery('#shippingAddressSelect').attr('disabled', 'disabled');
					}
					this.populateShippingAddress();
				}else{
					this.populateShippingAddress();
				}
			}
		}

		
	},
	
	
	
	
	
	
	
	populateAddressBookDropdowns : function(){
		debug.log("populateAddressBookDropdowns, addresses : ", this.selectedContactModel.addresses);
		var option = jQuery('<option>', { value : "" }).text("Select Billing Address...");
		jQuery('#billingAddressSelect').append(option); 
	   	
		jQuery.each(this.selectedContactModel.addresses, function(key, address) {
			var optionValue = address.addressID;
			var option = jQuery('<option>', { value : optionValue }).text(address.addressLine1 + ' '+ address.addressLine2 + ' '+address.city);
			option.data('address', address);
		   	jQuery('#billingAddressSelect').append(option); 
		});
		
		var option = jQuery('<option>', { value : "" }).text("Select Shipping Address...");
		jQuery('#shippingAddressSelect').append(option);
		jQuery.each(this.selectedContactModel.addresses, function(key, address) {
			var optionValue = address.addressID;
			var option = jQuery('<option>', { value : optionValue }).text(address.addressLine1 + ' '+ address.addressLine2 + ' '+address.city);
			option.data('address', address);
		    jQuery('#shippingAddressSelect').append(option); 
		});
		
	},
	
	populateBillingAddress : function(){
		
		var addressModel = jQuery('#billingAddressSelect option:selected').data('address');
		
		jQuery("#billing_address_first_name").attr('disabled', 'disabled').val(addressModel.firstName);
		jQuery("#billing_address_last_name").attr('disabled', 'disabled').val(addressModel.lastName);
		jQuery("#billing_address_line_1").attr('disabled', 'disabled').val(addressModel.addressLine1);
		jQuery("#billing_address_line_2").attr('disabled', 'disabled').val(addressModel.addressLine2);
		jQuery("#billing_address_company").attr('disabled', 'disabled').val(addressModel.company);
		jQuery("#billing_address_city").attr('disabled', 'disabled').val(addressModel.city);
		jQuery("#billing_address_state").attr('disabled', 'disabled').val(addressModel.state);
		jQuery("#billing_address_zip").attr('disabled', 'disabled').val(addressModel.zip);
		jQuery('#editBillingAddressCheckbox').removeAttr('checked');
		
		

	},
	
		
	populateShippingAddress : function(){
		var addressModel = jQuery('#shippingAddressSelect option:selected').data('address');
		
		jQuery("#shipping_address_first_name").attr('disabled', 'disabled').val(addressModel.firstName);
		jQuery("#shipping_address_last_name").attr('disabled', 'disabled').val(addressModel.lastName);
		jQuery("#shipping_address_line_1").attr('disabled', 'disabled').val(addressModel.addressLine1);
		jQuery("#shipping_address_line_2").attr('disabled', 'disabled').val(addressModel.addressLine2);
		jQuery("#shipping_address_company").attr('disabled', 'disabled').val(addressModel.company);
		jQuery("#shipping_address_city").attr('disabled', 'disabled').val(addressModel.city);
		jQuery("#shipping_address_state").attr('disabled', 'disabled').val(addressModel.state);
		jQuery("#shipping_address_zip").attr('disabled', 'disabled').val(addressModel.zip);
		jQuery('#editShippingAddressCheckbox').removeAttr('checked');

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
		
	billingAddressHasChanged : function(){
		//TODO:  check if the address dropdown has changed, or the user has entered new info
		
		var oldSelectedID = jQuery('#tc_saved_billing_addr').val();
		var newSelectedID = jQuery('#billingAddressSelect option:selected').val();
		
		
		var addressModel = jQuery('#billingAddressSelect option:selected').data('address');
		
		var newBillingAddressFirstName = jQuery("#billing_address_first_name").val();
		var newBillingAddressLastName = jQuery("#billing_address_last_name").val();
		var newBillingAddressLine1 = jQuery("#billing_address_line_1").val();
		var newBillingAddressLine2 = jQuery("#billing_address_line_2").val();
		var newBillingAddressCompany = jQuery("#billing_address_company").val();
		var newBillingAddressCity = jQuery("#billing_address_city").val();
		var newBillingAddressState = jQuery("#billing_address_state").val();
		var newBillingAddressZip = jQuery("#billing_address_zip").val();
		
		debug.log('addressModel : ', addressModel);
		debug.log('newBillingAddressFirstName : ', newBillingAddressFirstName);
		debug.log('newBillingAddressLastName : ', newBillingAddressLastName);
		debug.log('newBillingAddressLine1 : ', newBillingAddressLine1);
		debug.log('newBillingAddressLine2 : ', newBillingAddressLine2);
		debug.log('newBillingAddressCompany : ', newBillingAddressCompany);
		debug.log('newBillingAddressCity : ', newBillingAddressCity);
		debug.log('newBillingAddressState : ', newBillingAddressState);
		debug.log('newBillingAddressZip : ', newBillingAddressZip);
		var changed;
		
		if (
			addressModel.firstName != newBillingAddressFirstName || 
			addressModel.lastName != newBillingAddressLastName || 
			addressModel.company != newBillingAddressCompany || 
			addressModel.addressLine1 != newBillingAddressLine1 || 
			addressModel.addressLine2 != newBillingAddressLine2 ||
			addressModel.city != newBillingAddressCity ||
			addressModel.state != newBillingAddressState ||
			addressModel.zip != newBillingAddressZip)
			{
				changed = true;
			}else{
				changed = false;
			}
		
		debug.log('billingAddressHasChanged : ', changed);
		return changed;
	},
	
	shippingAddressHasChanged : function(){
		//TODO:  check if the address dropdown has changed, or the user has entered new info
		
		var oldSelectedID = jQuery('#tc_saved_shipping_addr').val();
		var newSelectedID = jQuery('#shippingAddressSelect option:selected').val();
		
		
		var addressModel = jQuery('#shippingAddressSelect option:selected').data('address');
		
		var newShippingAddressFirstName = jQuery("#shipping_address_first_name").val();
		var newShippingAddressLastName = jQuery("#shipping_address_last_name").val();
		var newShippingAddressLine1 = jQuery("#shipping_address_line_1").val();
		var newShippingAddressLine2 = jQuery("#shipping_address_line_2").val();
		var newShippingAddressCompany = jQuery("#shipping_address_company").val();
		var newShippingAddressCity = jQuery("#shipping_address_city").val();
		var newShippingAddressState = jQuery("#shipping_address_state").val();
		var newShippingAddressZip = jQuery("#shipping_address_zip").val();
		
		debug.log('addressModel : ', addressModel);
		debug.log('newShippingAddressFirstName : ', newShippingAddressFirstName);
		debug.log('newShippingAddressLastName : ', newShippingAddressLastName);
		debug.log('newShippingAddressLine1 : ', newShippingAddressLine1);
		debug.log('newShippingAddressLine2 : ', newShippingAddressLine2);
		debug.log('newShippingAddressCompany : ', newShippingAddressCompany);
		debug.log('newShippingAddressCity : ', newShippingAddressCity);
		debug.log('newShippingAddressState : ', newShippingAddressState);
		debug.log('newShippingAddressZip : ', newShippingAddressZip);
		var changed;
		

		if (
			addressModel.firstName != newShippingAddressFirstName || 
			addressModel.lastName != newShippingAddressLastName || 
			addressModel.company != newShippingAddressCompany || 
			addressModel.addressLine1 != newShippingAddressLine1 || 
			addressModel.addressLine2 != newShippingAddressLine2 || 
			addressModel.city != newShippingAddressCity ||
			addressModel.state != newShippingAddressState ||
			addressModel.zip != newShippingAddressZip)
			{
				changed = true;
			}else{
				changed = false;
			}
			
			
			debug.log('shippingAddressHasChanged : ', changed);
			return changed;

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
	checkPreSelectedAddresses : function (){
		var billingAddressID = jQuery('#tc_saved_billing_addr').val();
		if ( billingAddressID != ''){
			jQuery('#billingAddressSelect').val(billingAddressID).attr('disabled', 'disabled');
			this.populateBillingAddress();
		}
		
		var shippingAddressID = jQuery('#tc_saved_shipping_addr').val();
		if ( shippingAddressID != ''){
			jQuery('#shippingAddressSelect').val(shippingAddressID).attr('disabled', 'disabled');
			this.populateShippingAddress();
		}
		
		if ( (billingAddressID != '' && shippingAddressID != '') && (billingAddressID != shippingAddressID) ){
			jQuery('#shippingRadioInput2').attr('checked', 'checked').trigger('change');
		}
		
		
	},
	
	onGetContactDetailsResult : function (result){
		debug.log('onGetContactDetailsResult : ', result)
		if (result.success){
			this.selectedContactModel = result.contactModel;
			this.populateContactForm();
			
			this.populateAddressBookDropdowns();
			
			this.checkPreSelectedAddresses()
	
			//adminAjaxService.getShippingCharge();
		}else{
			alert('Error getting contact details.');
		}
	}
});