(function($){
	$(document).ready(function() {
		debug.log('tc_product_ajax.js ready');
		$('#checkout').on('change', 'input.shippingRadioInput', function(event){
			debug.log('on shippingRadio change!');
			if ($('#shippingRadioInput2').is(':checked')){
				$('#shippingAddressTable').show();
			}else{
				$('#shippingAddressTable').hide();

			}
			return false;

		});
	});
	
	
})(jQuery);