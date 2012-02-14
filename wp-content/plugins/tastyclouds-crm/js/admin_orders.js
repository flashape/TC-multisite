var signalContext = new SignalContextClass();
var adminAjaxService = new AdminAjaxServiceClass();
var customerInfoViewMediator;
var orderItemsViewMediator;

jQuery(document).ready(function($){
	

	customerInfoViewMediator = new CustomerInfoViewMediatorClass(jQuery('#client_information'));
	orderItemsViewMediator = new OrderItemsViewMediatorClass(jQuery('#tc_crm_order_items'));
	
	
	
	// // an array of product items
	TC_ProductManager.products = productsJson;

	TC_ProductManager.shippingOptions = shippingOptionsJson;
	
	$('#addProductButton').live('click', function() {
		orderItemsViewMediator.onAddItemClick();
	    return false;			
	});		

	$('#addCustomChargeButton').live('click', function() {
		orderItemsViewMediator.onAddCustomItemClick();
	    return false;			
	});
	
	
	
	$('#addServingsButton').live('click', function() {
		orderItemsViewMediator.onAddCustomItemClick("Additional Servings");
	    return false;			
	});		
	$('#addHoursButton').live('click', function() {
		orderItemsViewMediator.onAddCustomItemClick("Additional Hours");
	    return false;			
	});
	
	$('#addFlavorButton').live('click', function() {
		orderItemsViewMediator.onAddCustomItemClick("Additional Flavors");
	    return false;			
	});
	
	
	$('#addDeliveryButton').live('click', function() {
		orderItemsViewMediator.onAddDeliveryClick();
	    return false;			
	});
	
	
	
	
	$('#getShippingChargeButton').live('click', adminAjaxService.getShippingCharge);   
	
	$('#createNewContactButton').live('click', function(){
		customerInfoViewMediator.clearContactForm();
		return false;
	});
	
	$('#removeProductbutton').live('click', function() {
		orderItemsViewMediator.removeItem( $(this).parent().parent() );
	    return false;
	});			


	
	jQuery('.cateredServiceItemPriceTextInput').live('keydown', TC_ProductManager.cateredServicePriceInputFieldKeypress);
	jQuery('.cateredServiceItemPriceTextInput').live('blur', TC_ProductManager.cateredServicePriceInputFieldKeypress);
	
	jQuery('.customItemPriceTextInput').live('keydown', TC_ProductManager.customItemPriceInputFieldKeypress);
	jQuery('.customItemPriceTextInput').live('blur', TC_ProductManager.customItemPriceInputFieldKeypress);
	
	
	$('.quantity').live('keydown', TC_ProductManager.quantityInputFieldKeypress);
	$('.quantity').live('blur', TC_ProductManager.quantityInputFieldKeypress);
	
	
	$('#discountAmount').live('keydown', TC_ProductManager.discountInputFieldKeypress);
	$('#discountAmount').live('blur', TC_ProductManager.discountInputFieldKeypress);

	// disable form submission by pressing Enter key
	$("form").bind("keypress", function(e) {
        if (e.keyCode == 13) return false;
  	});
	
	$('#_tc_crm_contact_personal_address_zip').live('keydown', TC_ProductManager.zipInputFieldKeypress);
	$('#_tc_crm_contact_personal_address_zip').live('blur', TC_ProductManager.zipInputFieldKeypress);

	$('#quickZip').live('keydown', TC_ProductManager.zipInputFieldKeypress);
	$('#quickZip').live('blur', TC_ProductManager.zipInputFieldKeypress);


	var shippingDropDown = $('#shipmentType');
	var fedExOptions = TC_ProductManager.shippingOptions.FedEx.services;

	
	$.each(fedExOptions, function(key, shippingInfo) {
		var optionValue = shippingInfo.value;
		var option = $('<option>', { value : optionValue }).text(shippingInfo.name);
		option.data('shippingMethod', shippingInfo);
	    shippingDropDown.append(option); 
	});
	
	$('#_tc_crm_payment_amount').ForcePriceOnly();
	
	$("#_tc_crm_contact_personal_address_state").html(states);
	$("#_tc_crm_contact_business_address_state").html(states);
	
	$('#shipmentType').change(jQuery.proxy(adminAjaxService, "getShippingCharge"));
	$('#discountType').change(jQuery.proxy(orderItemsViewMediator, "onDiscountTypeChanged"));
	$('#_tc_crm_shipping_enabled').change(jQuery.proxy(orderItemsViewMediator, "onShippingEnabledChange"));
	$('#_tc_crm_tax_enabled').change(jQuery.proxy(orderItemsViewMediator, "onTaxEnabledChange"));
	$('#wats_select_ticket_type').change(jQuery.proxy(signalContext.onTicketTypeChange));
	jQuery("#applyCouponButton").click(jQuery.proxy( orderItemsViewMediator, "onApplyCouponButtonClick" ));
	jQuery("#removeCouponButton").click(jQuery.proxy( orderItemsViewMediator, "onRemoveCouponButtonClick" ));
	
	//$("#post").validate();
	
	customerInfoViewMediator.onContactChanged();
	
	

	
	$("#loadingShipping").hide();
	$("#validatingCoupon").hide();

	

	debug.log($('#isNewCart'));
	if ( $('#isNewCart').length ) {
		if ($('#isNewCart').val() != "1"){
			orderItemsViewMediator.onCartReload();
		}
	}
	
	$('div.tagsdiv').siblings().hide();
	
	$('#tc_crm_order_items .inside').prependTo('#tc_crm_order_form-tab');
	$('#tc_crm_order_items').hide();
	
	$('#client_information .inside').prependTo('#tc_crm_contact-tab');
	$('#tc_crm_order_items').hide();
	
	$('#client_information').hide();
	$('#titlediv').hide();
	$('#submitdiv').hide();
	
	$('#addPaymentButton').live('click', function() {
		$('#publish').click();
	    return false;
	});
	
	$('#saveOrderButton').live('click', function() {
		$('#publish').click();
	    return false;
	});
	
	$('#quickZip').addClass('copyZip');
	$('#_tc_crm_contact_personal_address_zip').addClass('copyZip');
	
	// keeps the "Quick Zip" and contact zip text fields in sync
	$(".copyZip").keyup(function(){
        $(".copyZip").val($(this).val());
    });

	$('#panalo-order-types input:radio').change(function(){
		
		if($('#_panalo_order_type-event-catering').is(':checked')){
			$('#panalo-event-types').slideDown('fast');
		}else{
			$('#panalo-event-types').slideUp('fast');
		}
	});
	
	$('#panalo_contact_input').autocomplete({
		source:contactAutocompleteJSON,
		select: function(event, ui) {
					var selectedObj = ui.item;
					$('#panalo_contact_input').val(selectedObj.label);
					$('#panalo_selected_contact').val(selectedObj.value);
					//customerInfoViewMediator.onContactChanged();
					return false;
				},		
		focus: function(event, ui) {
					var selectedObj = ui.item;
					$('#panalo_contact_input').val(selectedObj.label);
					return false;
				}
		})
	


	
	/*
		From the jquery validation docs re: errorContainer : http://docs.jquery.com/Plugins/Validation/validate#toptions
		
		Uses an additonal container for error messages. 
		The elements given as the errorContainer are all shown and hidden when errors occur. 
		But the error labels themselve are added to the element(s) given as errorLabelContainer, here an unordered list. 
		Therefore the error labels are also wrapped into li elements (wrapper option).
	*/
	$("#post").validate({
		/* 	
			'ignore' is set to ':hidden' by default in v1.9, which disables validation of hidden inputs. 
			Set to an empty array to disable: http://bassistance.de/2011/10/07/release-validation-plugin-1-9-0/
		*/
		ignore:[], 
		errorContainer: "#submitErrorBox, #messageBox2",
		errorLabelContainer: "#submitErrorBox ul",
		wrapper: "li", 
		debug:false,
		rules: { 
			_panalo_order_type	: { 
				required : true 
			},
			
			_panalo_event_type	: {
				required : {
			         depends: function(element) {
			           return $("#_panalo_order_type-event-catering").is(':checked');
			         }
		       	}
			},			
			
			_tc_crm_contact_personal_email	: {
				required : {
			         depends: function(element) {
			           return $("#_panalo_order_type-event-catering").is(':checked');
			         }
		       	}
			}
		},
		messages: 
		{
	        _panalo_order_type: "Please select an order type.",
	        _panalo_event_type: "Please select an event type.",
	        _tc_crm_contact_personal_email: "An email is required for event orders.",
		},
		invalidHandler: function(event, validator) { 
			$('#publish').removeClass('button-primary-disabled'); $('#ajax-loading').css('visibility', 'hidden'); 
		}

	});
	
	jQuery('.tc_datepicker').datepicker();
	$( '#accordion' ).accordion({ header: 'h5' });
	

	
});