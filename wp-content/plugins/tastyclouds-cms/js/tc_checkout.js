(function($){
	$(document).ready(function() {
		debug.log('tc_product_ajax.js ready');
		$("#validatingCoupon").hide();
		$("#couponTitle").hide();
		
		$("#_tc_event_date").glDatePicker({
			allowOld: false,
		    startDate: new Date()
		});
		
		
		// for stripe testing
		$('#card-number').val('4242424242424242');
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
		
		
		$('#checkout-form').submit( function(event) {
			$('.submit-button').attr("disabled", "disabled");
		    Stripe.createToken({
		        number: $('#card-number').val(),
		        cvc: $('#card-cvc').val(),
		        exp_month: $('#card-expiry-month').val(),
		        exp_year: $('#card-expiry-year').val()
		    }, stripeResponseHandler);
			
			// prevent the form from submitting with the default action
			return false;
		});
		
		
		function stripeResponseHandler(status, response) {
			debug.log('stripeResponseHandler, status : ', status, 'response : ', response);
		    if (response.error) {
		        // show the errors on the form
		        $(".payment-errors").text(response.error.message);
		    } else {
		        var form$ = $("#checkout-form");
		        // token contains id, last4, and card type
		        var token = response['id'];
		        // insert the token into the form so it gets submitted to the server
		        form$.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
		        // and submit
		        form$.get(0).submit();
		    }
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
		
		function submitCouponCode (){
			debug.log('submitCouponCode()');
			
			jQuery("#validatingCoupon").show();
			var code = jQuery('#couponCodeInput').val();
			validateCoupon(code);
			
		}
		
		
		
		
		
		
		
	});
	
	
})(jQuery);