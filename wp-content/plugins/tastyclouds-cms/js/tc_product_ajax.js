(function($){
	debug.log('immediate');
	$(document).ready(function() {
		debug.log('tc_product_ajax.js ready');
		$('#maxbutton-2').on('click', function(){
			debug.log('calling sendToCart:');
			
			sendToCart(getProductModelToPost());
			return false;
		})
		
		$('body').on('click', '#maxbutton-4', function(){
			$.colorbox.close();
			return false;
		})
		
	});
	
	function getProductModelToPost(){
		var model = {};
		model.description =  "";
		model.id = 0;
		model.price =  TCProductAjax.price;
		model.productID =  TCProductAjax.productID;
		model.quantity =  $('#quantity').val();
		model.taxable =  false;
		model.type = "tc_products";
		
		return model;
	}
	
	function sendToCart(model){
		debug.log('sendToCart(), item: ', model);
		var data = {action:'tc_add_cart_item'};
		data.addToCartNonce = TCProductAjax.addToCartNonce;
		data.cartID = TCProductAjax.cartID;
        data.model = JSON.stringify(model);
        data.site = TCProductAjax.site;

		jQuery.post(
		    TCProductAjax.ajaxurl, 
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