(function($){

	$(document).ready(function() {
		debug.log('tc_product_select.js ready');
		$('#maxbutton-2').on('click', function(){
			debug.log('calling sendToCart:');
			if($('#maxbutton-2').data('clickEnabled')){
				sendToCart();
			}
			return false;
		})
		
		$('#maxbutton-2').data('clickEnabled', false);
		$('.maxbutton').data('originalBackground', $('.maxbutton').css('background'));
		
		
		$('body').on('click', '#maxbutton-4', function(){
			$.colorbox.close();
			return false;
		})
		
		
		
		$('#product_dropdown').on('change', function(){
			getProductPrice();
			disableAddToCartButton();
		})
		
		$('#product_dropdown').trigger('change');
		
	});
	
	function disableAddToCartButton(){
		$('#updatingPriceDiv').show();
		$('#maxbutton-2').data('clickEnabled', false);
		$('.maxbutton').css('background', '#CCCCCC');
	}
	
	
	function enableAddToCartButton(){
		$('#updatingPriceDiv').hide();
		$('#maxbutton-2').data('clickEnabled', true);
		
		$('.maxbutton').css('background', $('.maxbutton').data('originalBackground'));
		
		//$('#maxbutton-2').show();
	}
	
	
	function getProductPrice(){
		debug.log('getProductPrice()');
		var data = {action:'tc_get_product_price'};
		data.productID = $("#product_dropdown option:selected").val();
		data.addToCartNonce = TCProductSelectAjax.addToCartNonce;
		data.variationItemID = TCProductSelectAjax.variationItemID;
        data.site = TCProductSelectAjax.site;

		jQuery.post(
		    TCProductSelectAjax.ajaxurl, 
			data,
		    function( response ) {
		        debug.log('getProductPrice response : ', response );
				updatePrice(response.price);
				enableAddToCartButton();
		    },
			'json'
		);
	}
	
	
	
	
	
	function updatePrice(updatedPrice){
		$('#priceColumn').text('$'+parseFloat(updatedPrice).toFixed(2));
	}
	
	
	function sendToCart(){
		debug.log('sendToCart()');
		var data = {action:'tc_add_cart_product_by_id'};
		data.productID = $("#product_dropdown option:selected").val();
		data.addToCartNonce = TCProductSelectAjax.addToCartNonce;
		data.variationItemID = TCProductSelectAjax.variationItemID;
		
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