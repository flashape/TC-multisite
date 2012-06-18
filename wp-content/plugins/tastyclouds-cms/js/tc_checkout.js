(function($){
	$(document).ready(function() {
		debug.log('tc_product_ajax.js ready');
		$("#validatingCoupon").hide();
		$("#couponTitle").hide();
		
		$("#_tc_event_date").glDatePicker({
			allowOld: false,
		    startDate: new Date(),
		 	position: "absolute",
		});
		
		$('td.required').append('<span class="req">*</span>');
		
		jQuery(".validate-text").seaBehavior( "text", {"notEmpty":true, "minLength":3}, { "okClass": "ok", "errorClass": "error" } )
		jQuery(".validate-email").seaBehavior( "email", {"notEmpty":true}, { "okClass": "ok", "errorClass": "error", "errorMessage":"A valid email is required" } )
		jQuery(".validate-phone").seaBehavior( "numeric", {"notEmpty":true}, { "okClass": "ok", "errorClass": "error", "errorMessage":"A phone number is required" } )
		jQuery(".validate-zip").seaBehavior( "numeric", {"notEmpty":true, "allowedCharacters":"-", "aditionalValidation":validateZip, "minLength":5, "maxLength":10}, { "okClass": "ok", "errorClass": "error", "errorMessage":"A phone number is required" } )
		jQuery("#card-cvc").seaBehavior( "numeric", {"notEmpty":true, "minLength":2, "maxLength":4, "aditionalValidation":validateCreditCardCVC}, { "okClass": "ok", "errorClass": "error", "errorMessage":"A valid email is required" } )
		jQuery("#card-number").seaBehavior( "numeric", {"notEmpty":true, "minLength":10, "maxLength":20, "aditionalValidation":validateCreditCard}, { "okClass": "ok", "errorClass": "error", "errorMessage":"A valid email is required" } )
		jQuery("#card-expiry-month").seaBehavior( "text", {"notEmpty":true, "minLength":2, "maxLength":2, "aditionalValidation":validateCreditCardExpiry}, { "okClass": "ok", "errorClass": "error" } )
		jQuery("#card-expiry-year").seaBehavior( "text", {"notEmpty":true, "minLength":4, "maxLength":4, "aditionalValidation":validateCreditCardExpiry}, { "okClass": "ok", "errorClass": "error" } )
	
		//Seahorse.form("checkout-form", function(msjs, array) {alert(msjs);}, "Submit error" );
		
		//for stripe testing
		$('#card-number').val('4242424242424242');
		//$('#card-number').val('4000000000000002'); // test for card_declined response
		$('#card-cvc').val('999');
		$('#card-expiry-month').val('12');
		$('#card-expiry-year').val('2015');
		
		
		$('#checkout').on('change', 'input.shippingRadioInput', function(event){
			debug.log('on shippingRadio change!');
			if ($('#shippingRadioInput2').is(':checked')){
				$('#shippingAddressTable').show();
			}else{
				$('#shippingAddressTable').hide();

			}
			return false;

		});		
				
		
		$('#checkout').on('change', 'input.accountRadioInput', function(event){
			debug.log('on checkoutAsGuest change!');
			if ($('#accountRadioInput2').is(':checked')){
				$('#newAccountPwdDiv').show();
			}else{
				$('#newAccountPwdDiv').hide();

			}
			return false;

		});		
		
		$('#checkout').on('change', 'input.arriveByRadioInput', function(event){
			debug.log('on shippingRadio change!');
			if ($('#arriveByRadioInput2').is(':checked')){
				$('#scheduledDateDiv').show();
			}else{
				$('#scheduledDateDiv').hide();

			}
			return false;

		});
		
		
				
		$('#checkout').on('change', 'input.shipmentTypeRadioInput', function(event){
			
			debug.log('on shipmentTypeRadio change!');
			if ($('#shipmentTypeRadioInput1').is(':checked')){
				$('#_tc_order_type').val(TCCheckoutAjax.pickupTermID);
			}else{
				$('#_tc_order_type').val(TCCheckoutAjax.shippingTermID);
			}
			
			debug.log('set _tc_order_type to : ', $('#_tc_order_type').val());
			
			submitShippingSelection();
			
			return false;

		});
		
		
		$('#getShippingRatesButton').on('click', function(event){
			//TODO : Check if the shipping info is valid, show alert if not
			retrieveShippingRates();
		});
		
		
		$('#applyCouponButton').on('click', function() {
			submitCouponCode();
		    return false;
		});
		
		$('#removeCouponButton').on('click', function() {
			removeCoupon();
		    return false;
		});
		
					
		$('#editOrderButton').on('click', function() {
			window.location.href = "http://tastyclouds.com/cart";
		    //return false;
		});
		
				
		$('#isGiftCheckbox').on('change', function() {
			if ( $(this).is(":checked") ){
				$('#giftMessageTextArea').removeAttr('disabled').focus();
			}else{
				$('#giftMessageTextArea').attr('disabled', 'disabled');
				
			}
		    return false;
		});
		
		
		
		function validateZip(element){
			//US Zip Codes: /(^\d{5}$)|(^\d{5}-\d{4}$)/
			var zip = $(element).val();
			var isValidZip = /(^\d{5}$)|(^\d{5}-\d{4}$)/.test(zip);
			debug.log('validateZip zip : '+zip, isValidZip );
			return isValidZip;
			
		}
					
		
		function validateCreditCard(){
			debug.log('validateCreditCard : ', Stripe.validateCardNumber( $('#card-number').val() ) );
			return Stripe.validateCardNumber( $('#card-number').val() )
			
		}
				
		function validateCreditCardCVC(){
			debug.log('validateCreditCardCVC : ', Stripe.validateCVC( $('#card-cvc').val() ) );
			return true;
			//return Stripe.validateCVC( $('#card-cvc').val() )
		}
		
						
		function validateCreditCardExpiry(){
			debug.log('validateCreditCardExpiry : ', Stripe.validateExpiry( $('#card-expiry-month').val(),  $('#card-expiry-year').val() ) );
			return true;
			//return Stripe.validateExpiry( $('#card-expiry-month').val(),  $('#card-expiry-year').val() )
		}
		
		
		
		
		function retrieveShippingRates(){
			debug.log('retrieveShippingRates()');
			var data = {action:'tc_get_checkout_shipping_rates'};
			data.shippingNonce = TCCheckoutAjax.shippingNonce;
			data.cartID = TCCheckoutAjax.cartID;
	        data.site = TCCheckoutAjax.site;
	
			var shippingAddressZip = jQuery('#shipping_address_zip').val();
			var billingAddressZip = jQuery('#billing_address_zip').val();
			zipValue = '';
			if ( shippingAddressZip != ""){
				zipValue = shippingAddressZip;
			}else if(billingAddressZip != "" && jQuery('#shippingRadioInput1').is(':checked') ){
				zipValue = billingAddressZip;
			}
			
			if(zipValue == ''){
				$.colorbox({initialHeight:0, initialWidth:0, html:"<p>Please enter shipping information above, or select Pickup.</p>"})
				//$('#shippingContentDiv').colorbox({transition:'fade', html:"<p>Please enter shipping information above, or select Pickup.</p>"});
				//$.colorbox({transition:'fade', html:"<p>Please enter shipping information above, or select Pickup.</p>"})
				//$.colorbox({inline:true, href:"#shippingContentDiv"})
				return;
			}
			
			
			data.customerData = {zip:zipValue}
			
			jQuery.post(
			    TCCheckoutAjax.ajaxurl, 
				data,
			    function( response ) {
			        debug.log('retrieveShippingRates response : ', response );
					addShippingRatesContent(response.selectShippingContent);
			    },
				'json'
			);
			
			$("#loadingShipping").show();
			
			
		}
		
		function addShippingRatesContent(selectShippingContent){
			$('#getShippingRatesButton').hide();
			$("#loadingShipping").hide();
			
			$('#shippingContentDiv').append(selectShippingContent);
		}
		
		function formIsValid(){
			//validate new account password
			var valid = true;
			
			if ($('#accountRadioInput2').is(':checked')){
				var newPass = $.trim($('#newuser_pwd').val());
				var confirmNewPass = $.trim($('#confirm_newuser_pwd').val());
			
				if (newPass == "" || newPass != confirmNewPass){
					//TODO: show error
					$('#newPassValidationError').show();
					valid = false;
				}else{
					$('#newPassValidationError').hide();				
				}
			}
			
			
			//validate shipping method
			var radio_buttons = $("input[name='shipmentType']");
			if( radio_buttons.filter(':checked').length == 0){
			  	$('#shipmentTypeValidationError').show();
				valid = false;
			} else {
			  // If you need to use the result you can do so without
			  // another (costly) jQuery selector call:
			  // var val = radio_buttons.val();
			  $('#shipmentTypeValidationError').hide();

			}
			
			
			
			// var result = jQuery(".validate-email").seaVerify();
			// debug.log("seaVerify result : ", result);			
			var result = jQuery(".validate-email").seaValidate();
			debug.log("seaValidate email result : ", result);
			
			if(!result){
				jQuery(".validate-email").seaVerify();
				valid = false;
			}
			
			result = jQuery("#card-cvc").seaValidate();
			debug.log("seaValidate card-cvc result : ", result);
			
			if(!result){
				jQuery("#card-cvc").seaVerify();
				
				valid = false;
			}
						
			result = jQuery("#card-number").seaValidate();
			debug.log("seaValidate card-number result : ", result);
			
			if(!result){
				jQuery("#card-number").seaVerify();
				valid = false;
			}
									
			result = jQuery("#card-expiry-month").seaValidate();
			debug.log("seaValidate card-expiry-month result : ", result);
			
			if(!result){
				jQuery("#card-expiry-month").seaVerify();
				valid = false;
			}
												
			result = jQuery("#card-expiry-year").seaValidate();
			debug.log("seaValidate card-expiry-year result : ", result);
			
			if(!result){
				jQuery("#card-expiry-year").seaVerify();
				valid = false;
			}
			
			// result = Seahorse.validateForm('checkout-form');
			// debug.log("validateForm result : ", result);
			
			return valid;
		}
		
		
		$('#checkout-form').submit( function(event) {
			//$('.submit-button').attr("disabled", "disabled");
			
			if ( formIsValid() ){
				if ($('#accountRadioInput2').is(':checked')){
					validateEmail();
				}else{
					getCardToken();
				}
			}
			
			//prevent the form from submitting with the default action
			return false;
		});
		

		
		
		function validateEmail (){
			var data = {action:'tc_check_email_exists'};
			data.email = $('#customer_email').val();
	        data.site = TCCheckoutAjax.site;
	
			jQuery.post(
			    TCCheckoutAjax.ajaxurl, 
				data,
			    function( response ) {
			        debug.log('validateEmail response : ', response );
					onEmailValidationResult(response);
			    },
				'json'
			);
						
		}
		
		function onEmailValidationResult (serviceResult){  
			debug.log('onEmailValidationResult , serviceResult : ', serviceResult);
			
			if(serviceResult.success){
				getCardToken();
			}else{
				alert('There was an error validating the email address : '+serviceResult.message);				
			}
		}
		
		
		
		function getCardToken(){
		    Stripe.createToken({
		        number: $('#card-number').val(),
		        cvc: $('#card-cvc').val(),
		        exp_month: $('#card-expiry-month').val(),
		        exp_year: $('#card-expiry-year').val()
		    }, getCardTokenResponseHandler);
		}
		
		
		function getCardTokenResponseHandler(status, response) {
			debug.log('stripeResponseHandler, status : ', status, 'response : ', response);
		    if (response.error) {
		        // show the errors on the form
				$.colorbox({initialHeight:0, initialWidth:0, html:"<p>"+response.error.message+"</p>"})
		
		        //$(".payment-errors").text(response.error.message);
		    } else {
		        var $form = $("#checkout-form");
		        // token contains id, last4, and card type
		        var token = response['id'];
		        // insert the token into the form so it gets submitted to the server
		        $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
		        
				//doFormSubmit();
				submitPayment(token);
		    }
		}
		
		function submitPayment(token){
			// submit payment via ajax before submitting rest of form
			var data = {action:'tc_create_charge'};
			data.stripeToken = token;
			jQuery.post(
			    TCCheckoutAjax.ajaxurl, 
				data,
			    function( response ) {
			        debug.log('submitPayment response : ', response );
					onCreateChargeResult(response);
			    },
				'json'
			);
			
			
		}
		
		function onCreateChargeResult(serviceResult){
			
			debug.log('onCreateChargeResult , serviceResult : ', serviceResult);
			
			if(serviceResult.success){
				debug.log("onCreateChargeResult success!");

				doFormSubmit();
			}else{
				$.colorbox({initialHeight:0, initialWidth:0, html:"<p>"+serviceResult.message+"</p>"})				
				// jQuery('#couponCodeInput').val('');
				
			}
			
			

		}
		

		function doFormSubmit(){
			if( $('#accountRadioInput2').is(':checked') ){
				var newPass = $('#newuser_pwd').val();
				$('#tc_newuser_pwd').val(newPass);
				$('#tc_guest_checkout').val("no");
			}else{
				$('#tc_guest_checkout').val("yes");
				
			}
			
			
			var $form = $("#checkout-form");
	        
			// and submit
	        $form.get(0).submit();
	
		}
		
		
		
		

		
		
				
		
		function submitShippingSelection (){
			debug.log('submitShippingSelection()');
			$("#settingShipping").show();
			setShippingSelection();
			
		}
		
		
		
		function setShippingSelection (){
			
			
			var data = {action:'tc_select_shipping_checkout'};
			data.shipmentType = $("input[name='shipmentType']:checked").val();
	        data.site = TCCheckoutAjax.site;
			debug.log("setShippingSelection data : ", data);
			jQuery.post(
			    TCCheckoutAjax.ajaxurl, 
				data,
			    function( response ) {
			        debug.log('setShippingSelection response : ', response );
					onSetShippingSelectionResult(response);
			    },
				'json'
			);
						
		}
		
		
		function onSetShippingSelectionResult (serviceResult){  
			$("#settingShipping").hide();
			debug.log('onSetShippingSelectionResult , serviceResult : ', serviceResult);
			
			if(serviceResult.success){
				debug.log("onSetShippingSelectionResult success!");
				// var couponModel = serviceResult.couponModel;
				// jQuery("#couponDiv").data('couponModel', couponModel);    
				// populateCouponInfo();

			}else{
				$("input[name='shipmentType']:checked").removeAttr('checked');
				alert('There was an error setting the shipping selection : '+serviceResult.message);
				
				// jQuery('#couponCodeInput').val('');
				
			}
		}
		
		
		
		
		
		
		
		
		
		
		function submitCouponCode (){
			debug.log('submitCouponCode()');
			
			jQuery("#validatingCoupon").show();
			var code = jQuery('#couponCodeInput').val();
			validateCoupon(code);
			
		}
		
		
		
		
		
		function validateCoupon (couponCode){
			var data = {action:'tc_validate_coupon_checkout'};
			data.couponCode = couponCode;
			data.cartID = TCCheckoutAjax.cartID;
	        data.site = TCCheckoutAjax.site;
	
			jQuery.post(
			    TCCheckoutAjax.ajaxurl, 
				data,
			    function( response ) {
			        debug.log('validateCoupon response : ', response );
					onCouponValidationResult(response);
			    },
				'json'
			);
						
		}
		
		
		function onCouponValidationResult (serviceResult){  
			jQuery("#validatingCoupon").hide();
			debug.log('onCouponValidationResult , serviceResult : ', serviceResult);
			
			if(serviceResult.success){
				
				var couponModel = serviceResult.couponModel;
				jQuery("#couponDiv").data('couponModel', couponModel);    
				populateCouponInfo();

			}else{
				alert('There was an error validating the coupon : '+serviceResult.message);
				jQuery('#couponCodeInput').val('');
				
			}
		}
		
		
		
		function populateCouponInfo (){
			var couponModel = jQuery('#couponDiv').data('couponModel');
			
			jQuery("#couponTitle").prepend(couponModel.title);  
			jQuery("#couponTitle").show();
			debug.log(jQuery("#couponDiv").data('couponModel'));
			//this.updateShippingDiscount();
			
			//this.updateCoupon( jQuery("#couponRow") );
			jQuery('#couponCodeInput').val(couponModel.code);
			jQuery('#couponCodeInput').attr("readonly", "readonly");
			jQuery("#applyCouponButton").hide();
			jQuery("#removeCouponButton").show();
		}
		
		
		
		function removeCoupon (){   
			debug.log('removeCoupon()');
			
			jQuery("#validatingCoupon").show();
			
			var data = {action:'tc_remove_coupon_checkout'};
	
			jQuery.post(
			    TCCheckoutAjax.ajaxurl, 
				data,
			    function( response ) {
			        debug.log('removeCoupon response : ', response );
					onCouponRemovedResult(response);
			    },
				'json'
			);
			
			
		}
		
		function onCouponRemovedResult  (serviceResult){
			jQuery("#validatingCoupon").hide();
			
			if(serviceResult.success){
				debug.log('onCouponRemovedResult success');
				
				jQuery("#couponTitle").text('');  
				jQuery("#couponRowTotal").text('');  
				jQuery("#couponCodeInput").val('');  
				jQuery('#couponCodeInput').removeAttr("readonly");
				jQuery("#applyCouponButton").show();
				jQuery("#removeCouponButton").hide();
				
				jQuery("#couponDiv").removeData('couponModel');
				
			}else{
				alert('There was an error removing the coupon.');
			}
		}
		

		
		
		
		
	});
	
	
})(jQuery);