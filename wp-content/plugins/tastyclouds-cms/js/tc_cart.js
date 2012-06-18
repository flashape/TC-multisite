(function($){
	$(document).ready(function() {
		debug.log('tc_cart.js ready');
		
		$('.quantity').forceNumeric();
		
		$('#orderItemsTable').on('click', '.updateQuantityButton', function(){
			$elem = jQuery(this);
			var $row = $elem.closest('tr');debug.log("row : ", $row);
			var cartItemID = $row.find('.cartItemID').val();
			var quantity = $row.find('.quantity').val();
			
			var data = {action:'tc_update_quantity'};
			data.cartItemID = cartItemID;
			data.quantity = quantity;
			
			jQuery.post(
			    TCCartAjax.ajaxurl, 
				data,
			    function( response ) {
			        debug.log('update quaantity response : ', response );
					onUpdateQuantityResult(response);
			    },
				'json'
			);
			
			
		});
		
		
		$('#orderItemsTable').on('click', '.removeProductButton', function(event){

			$elem = jQuery(this);
			var $row = $elem.closest('tr');debug.log("row : ", $row);
			var cartItemID = $row.find('.cartItemID').val();
			
			var data = {action:'tc_remove_cart_item_by_id'};
			data.cartItemID = cartItemID;
			
			jQuery.post(
			    TCCartAjax.ajaxurl, 
				data,
			    function( response ) {
			        debug.log('retrieveShippingRates response : ', response );
					onRemoveItemResult(response);
			    },
				'json'
			);
			
			
			
			return false;

		});
		
		
		
		
		
	});
	
	function onUpdateQuantityResult (serviceResult){  
		//jQuery("#validatingCoupon").hide();
		debug.log('onUpdateQuantityResult , serviceResult : ', serviceResult);
		
		if(serviceResult.success){
			window.location.replace("http://tastyclouds.com/cart");
			return;
		}else{
			alert('There was an error updating the item : '+serviceResult.message);
		}
	}
	
	
	function onRemoveItemResult (serviceResult){  
		//jQuery("#validatingCoupon").hide();
		debug.log('onRemoveItemResult , serviceResult : ', serviceResult);
		
		if(serviceResult.success){
			window.location.replace("http://tastyclouds.com/cart");
			return;
		}else{
			alert('There was an error removing the item : '+serviceResult.message);
		}
	}
	
	
	
	// $('#orderItemsTable').on('click', '.addNextItemButton', function(event){
	// 	$('#tc_product_input').focus();
	// 	debug.log('on addNextItembutton click!');
	// 	return false;
	//     
	// });		

	

	
	
	function showAddToCartPopup(popupContent){
		$.colorbox({html:popupContent});
		
	}
	
})(jQuery);