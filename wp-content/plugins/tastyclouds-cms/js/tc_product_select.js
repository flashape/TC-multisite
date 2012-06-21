(function($){

	$(document).ready(function() {
		debug.log('tc_product_select.js ready');
		$('#maxbutton-2').on('click', function(){
			debug.log('calling sendToCart:');
			sendToCart();
			return false;
		})
		
		
		$('body').on('click', '#maxbutton-4', function(){
			$.colorbox.close();
			return false;
		})
		

		
	});
	
	
	
	function getProductPrice(){
		debug.log('getProductPrice()');
		var data = {action:'tc_get_product_price'};
		data.productID = $("#product_dropdown option:selected").val();
		data.addToCartNonce = TCProductSelectAjax.addToCartNonce;
        data.site = TCProductSelectAjax.site;

		jQuery.post(
		    TCProductSelectAjax.ajaxurl, 
			data,
		    function( response ) {
		        debug.log('sendToCart response : ', response );
				showAddToCartPopup(response.popupContent);
		    },
			'json'
		);
	}
	
	
	
	
	
	function updatePrice(){
		updatedPrice = calculateProductTotal();
		$('#priceColumn').text('$'+parseFloat(updatedPrice).toFixed(2));
	}
	
	
	function sendToCart(){
		debug.log('sendToCart()');
		var data = {action:'tc_add_cart_product_by_id'};
		data.productID = $("#product_dropdown option:selected").val();
		data.addToCartNonce = TCProductSelectAjax.addToCartNonce;
        data.site = TCProductSelectAjax.site;

		jQuery.post(
		    TCProductSelectAjax.ajaxurl, 
			data,
		    function( response ) {
		        debug.log('sendToCart response : ', response );
				showAddToCartPopup(response.popupContent);
		    },
			'json'
		);
	}
	
	
	function showAddToCartPopup(popupContent){
		$.colorbox({html:popupContent});
		
	}
	
})(jQuery);