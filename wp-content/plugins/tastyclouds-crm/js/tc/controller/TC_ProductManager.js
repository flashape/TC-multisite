try {
	TC_ProductManager
} catch(e) {
	TC_ProductManager = new Object();
	TC_ProductManager.SKIP_UPDATE_SHIPPING = 'SKIP_UPDATE_SHIPPING';
}

TC_ProductManager.cottonCandyFlavors = [ "Apple Verde", "Banana Cadabra", "Banana Mango Sorbet", "Berry Caliente", "Berry Nana", "Cherry Blast", "Cherry Lemonade", "Cherry Limeade", "Citrus Swirl", "Lemon Blush", "Lima Lime", "Luscious Lemon", "Orange Mango Tango", "Philippine Mango", "Pina Colada", "Pink Bubble", "Pretty in Pink", "Purple Grape", "Spicy J", "Spicy Watermelon", "Summer Breeze", "Superstar Strawberry", "Tropical Delight", "Tropical Orange", "True Blue", "Wild Watermelon" ]
TC_ProductManager.snowConeFlavors = ["Blueberry", "Blue Raspberry", "Cherry", "Raspberry", "Strawberry", "Watermelon", "Chocolate Milano", "Classic Root Beer", "Lime", "Mango", "Orange", "Passionfruit", "Peach", "Vanilla", "White Chocolate"];
// 
// <tr>
// 	<th class="row-title" style="text-align:left">Item</th>
// 	<th style="text-align:left">Price</th>
// 	<th style="text-align:left">Quantity</th>				
// 	<th style="text-align:right">Total</th>
// 	<th style="text-align:right">Remove Item</th>
// </tr>
// 


TC_ProductManager.getProductDefaultCartData = function (productID){
	var cartItem = {};
	cartItem.quantity = 1;
	cartItem.productID = jQuery("#_tc_crm_product_list option:selected").val();

	var selectedProduct = TC_ProductManager.getProductById(cartItem.productID);
	
	
	var price = TC_ProductManager.priceToFixed(selectedProduct.price);
	
	if (!(selectedProduct.variantGroups instanceof Array)) {
		cartItem.variantGroups = [];
		
		for(var prop in selectedProduct.variantGroups){
			var variantGroup = selectedProduct.variantGroups[prop];
			var selected = variantGroup.items[0];
			cartItem.variantGroups.push(selected);		
			// cartItem.variantGroups.push({
			// 	name:variantGroup.groupName,
			// 	groupID:variantGroup.groupID,
			// 	selected:selected
			// });
		}
	}
	
	return cartItem;		
	
}


TC_ProductManager.getProductById = function (productID){
	for (var i = TC_ProductManager.products.length - 1; i >= 0; i--){
		var product = TC_ProductManager.products[i];
		if( product.itemID == productID){
			return product;
		}
	};
}

TC_ProductManager.priceToFixed = function (price){
	return parseFloat(price).toFixed(2);
}



TC_ProductManager.dumpObject = function (obj){
	var out = '';
	//var op = jQuery("this option:selected")
	for (var prop in obj){
		out += prop +' = '+obj[prop]+'\\n';
	}
	
	return out;
}		




TC_ProductManager.zipInputFieldKeypress = function (event) {
	
	if ((!event.shiftKey && !event.ctrlKey && !event.altKey) && ((event.keyCode >= 48 && event.keyCode <= 57) || (event.keyCode >= 96 && event.keyCode <= 105))) // 0-9 or numpad 0-9, disallow shift, ctrl, and alt 
	{ 
	// check textbox value now and tab over if necessary 
	}else if(event.keyCode == 13 || event.keyCode == 9){
		var zipValue = jQuery(this).val();
		//alert('zipValue : '+zipValue.length);
		
		if(zipValue.length == 5){
			adminAjaxService.getShippingCharge();
		}
	}
	else if (event.keyCode != 8 && event.keyCode != 46 && event.keyCode != 37 && event.keyCode != 39) // not esc, del, left or right 
	{ 
	event.preventDefault(); 
	} 
	// else the key should be handled normally 
}		

TC_ProductManager.quantityInputFieldKeypress = function (event) {
	
	if ((!event.shiftKey && !event.ctrlKey && !event.altKey) && ((event.keyCode >= 48 && event.keyCode <= 57) || (event.keyCode >= 96 && event.keyCode <= 105))) // 0-9 or numpad 0-9, disallow shift, ctrl, and alt 
	{ 
	// check textbox value now and tab over if necessary 
	}else if(event.keyCode == 13 || event.keyCode == 9 || event.keyCode == null){
		var tr = jQuery(this).closest('tr');
		orderItemsViewMediator.updateRowTotal(tr);
	}
	else if (event.keyCode != 8 && event.keyCode != 46 && event.keyCode != 37 && event.keyCode != 39) // not esc, del, left or right 
	{ 
	event.preventDefault(); 
	} 
	// else the key should be handled normally 
}	
	
TC_ProductManager.customItemPriceInputFieldKeypress = function (event) {
	debug.log('customItemPriceInputFieldKeypress, key code :'+event.keyCode);
	
	if ((!event.shiftKey && !event.ctrlKey && !event.altKey) && ((event.keyCode >= 48 && event.keyCode <= 57) || (event.keyCode >= 96 && event.keyCode <= 105))) // 0-9 or numpad 0-9, disallow shift, ctrl, and alt 
	{ 
	// check textbox value now and tab over if necessary 
	}else if(event.keyCode == 13 || event.keyCode == 9 || event.keyCode == null){
		if (event.keyCode == 9){
			jQuery(this).data('isTabbedOut', true);
		}
		
		if (event.keyCode == null && jQuery(this).data('isTabbedOut') == true){
			jQuery(this).data('isTabbedOut', false);
			return;
		}
		var tr = jQuery(this).closest('tr');
		orderItemsViewMediator.updateCustomItemTotal(tr);
	}
	else if (event.keyCode != 8 && event.keyCode != 46 && event.keyCode != 37 && event.keyCode != 39 && event.keyCode != 190 && event.keyCode != 110) // not esc, del, left or right 
	{ 
	event.preventDefault(); 
	} 
	// else the key should be handled normally 
}

TC_ProductManager.cateredServicePriceInputFieldKeypress = function (event) {
	debug.log('cateredServicePriceInputFieldKeypress, key code :'+event.keyCode);
	
	if ((!event.shiftKey && !event.ctrlKey && !event.altKey) && ((event.keyCode >= 48 && event.keyCode <= 57) || (event.keyCode >= 96 && event.keyCode <= 105))) // 0-9 or numpad 0-9, disallow shift, ctrl, and alt 
	{ 
	// check textbox value now and tab over if necessary 
	}else if(event.keyCode == 13 || event.keyCode == 9 || event.keyCode == null){
		debug.log('key : '+event.keyCode+', isTabbedOut : '+jQuery(this).data('isTabbedOut'));
		if (event.keyCode == 9){
			jQuery(this).data('isTabbedOut', true);
		}
		
		if (event.keyCode == null && jQuery(this).data('isTabbedOut') == true){
			jQuery(this).data('isTabbedOut', false);
			return;
		}
		var tr = jQuery(this).closest('tr');
		orderItemsViewMediator.updateServiceItemTotal(tr);
		//return false;
	}
	else if (event.keyCode != 8 && event.keyCode != 46 && event.keyCode != 37 && event.keyCode != 39 && event.keyCode != 9) // not esc, del, left or right 
	{ 
		event.preventDefault(); 
	} 
	// else the key should be handled normally 
}


 
TC_ProductManager.discountInputFieldKeypress = function (event) { 
	if ((!event.shiftKey && !event.ctrlKey && !event.altKey) && ((event.keyCode >= 48 && event.keyCode <= 57) || (event.keyCode >= 96 && event.keyCode <= 105))) // 0-9 or numpad 0-9, disallow shift, ctrl, and alt 
	{ 
	// check textbox value now and tab over if necessary 
	}else if(event.keyCode == 13  || event.keyCode == 9 || event.keyCode == null){
		var tr = jQuery(this).closest('tr');
		orderItemsViewMediator.updateDiscount(tr);
	}
	else if (event.keyCode != 8 && event.keyCode != 46 && event.keyCode != 37 && event.keyCode != 39 && event.keyCode != 9) // not esc, del, left or right 
	{ 
	event.preventDefault(); 
	} 
	//else the key should be handled normally 
}




TC_ProductManager.couponCodeInputFieldKeypress = function (event) { 
	if ((!event.shiftKey && !event.ctrlKey && !event.altKey) && ((event.keyCode >= 48 && event.keyCode <= 57) || (event.keyCode >= 96 && event.keyCode <= 105))) // 0-9 or numpad 0-9, disallow shift, ctrl, and alt 
	{ 
	// check textbox value now and tab over if necessary 
	}else if(event.keyCode == 13  || event.keyCode == 9 || event.keyCode == null){
		// var tr = jQuery(this).closest('tr');
		// orderItemsViewMediator.validateCoupon(tr);
	}
	else if (event.keyCode != 8 && event.keyCode != 46 && event.keyCode != 37 && event.keyCode != 39 && event.keyCode != 9) // not esc, del, left or right 
	{ 
	event.preventDefault(); 
	} 
	//else the key should be handled normally 
}



TC_ProductManager.isValidZip = function (){
	var zipValue = jQuery('#_tc_crm_contact_personal_address_zip').val();
	
	if( zipValue.indexOf('-') != -1){
		zipParts = zipValue.split('-');
		return (zipParts[0].length == 5 && zipParts[1].length == 4);
	}else{
		return (zipValue.length == 5);
	}	
}