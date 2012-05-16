(function($){
	debug.log('immediate');
	$(document).ready(function() {
		debug.log('tc_cart.js ready');
		$('#maxbutton-2').on('click', function(){
			debug.log('calling sendToCart:');
			
			sendToCart(getProductModelToPost());
			return false;
		})
	});
	
	function getProductModelToPost(){
		var model = {};
		model.description =  "";
		model.id = 0;
		model.price =  TCAjax.price;
		model.productID =  TCAjax.productID;
		model.quantity =  $('#quantity').val();
		model.taxable =  false;
		model.type = "tc_products";
		
		return model;
	}
	
	function sendToCart(model){
		debug.log('sendToCart(), item: ', model);
		var data = {action:'tc_add_cart_item'};
		data.addToCartNonce = TCAjax.addToCartNonce;
		data.cartID = TCAjax.cartID;
        data.model = JSON.stringify(model);
		jQuery.post(
		    TCAjax.ajaxurl, 
			data,
		    function( response ) {
		        debug.log('sendToCart response : ', response );
		    },
			'json'
		);
	}
	
})(jQuery);