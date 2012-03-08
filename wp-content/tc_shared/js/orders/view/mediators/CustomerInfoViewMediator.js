var CustomerInfoViewMediatorClass = JS.Class({
	
	construct : function (customerInfoView) {
	        this.view = customerInfoView;
			this.test = 'testing this';
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
		
		populateContactForm : function (contactMeta) { 
			//'_tc_crm_contact_business_address_state',

			var keys = ['_tc_crm_contact_first_name',
			'_tc_crm_contact_last_name',
			'_tc_crm_contact_company',
			'_tc_crm_contact_url',
			'_tc_crm_contact_personal_email',
			'_tc_crm_contact_personal_phone',
			'_tc_crm_contact_personal_address_1',
			'_tc_crm_contact_personal_address_2',
			'_tc_crm_contact_personal_address_city',
			'_tc_crm_contact_personal_address_zip',
			'_tc_crm_contact_business_email',
			'_tc_crm_contact_business_phone',
			'_tc_crm_contact_business_address_1',
			'_tc_crm_contact_business_address_2',
			'_tc_crm_contact_business_address_city',
			'_tc_crm_contact_business_address_zip'];

			var num = keys.length; 
			var key;
			for (var i=0; i<num; i++){
				key = keys[i];
				val = (key in contactMeta) ? contactMeta[key] : '';
				jQuery("#"+key).val( val );
			}

			key = '_tc_crm_contact_personal_address_state';
			val = (key in contactMeta) ? contactMeta[key] : '';
			jQuery("#"+key).val(val).attr("selected", "selected");			

			key = '_tc_crm_contact_business_address_state';
			val = (key in contactMeta) ? contactMeta[key] : '';
			jQuery("#"+key).val(val).attr("selected", "selected");

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
		
		onContactChanged : function(){
			debug.log('onContactChanged')
		
			var selectedContactID = jQuery('#panalo_selected_contact').val();
			debug.log('onContactChanged. selectedContactID :', selectedContactID)
			
			if ( selectedContactID == '') { 
				this.clearContactForm();
				return;
			};
			
			adminAjaxService.getContactDetails(selectedContactID, jQuery.proxy(this, 'onGetContactDetailsResult'));
		
		
		},
				

		
		onGetContactDetailsResult : function (result){
			debug.log('onGetContactDetailsResult : ')
			if (result.success){
				this.populateContactForm(result.meta);
		
				adminAjaxService.getShippingCharge();
			}else{
				alert('Error getting contact details.');
			}
		}
	});