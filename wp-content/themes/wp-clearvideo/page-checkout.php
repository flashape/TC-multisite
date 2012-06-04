<?php

$cartKey = CartAjax::hasCartInSession();
if ($cartKey !== FALSE){
	$cartID = str_replace('cart_', '', $cartKey);
	$cart = CartAjax::getCartById( $cartID );
}
//TODO:  redirect to cart.php if the cart is empty.


$orderSummary = OrderProxy::getOrderSummary($cart);



$summaryRows = '';

foreach ($orderSummary['lines']['line'] as $lineItem){
	$row = '<tr>';
		$row  .= '<td style="text-align:left">'.$lineItem['quantity'].'</td>';
		$row  .= '<td style="text-align:left">'.$lineItem['name'].'</td>';
		$row  .= '<td style="text-align:left">'.$lineItem['description'].'</td>';
		$row  .= '<td style="text-align:left">'.$lineItem['unit_cost'].'</td>';
		$itemPrice = ($lineItem['unit_cost'] * $lineItem['quantity'] );
		$row  .= '<td style="text-align:left">'.number_format($itemPrice, 2, '.', '').'</td>';
	$row  .= '</tr>';
	
	$summaryRows .= $row;
}


?>




<?php get_header(); ?>


<script type="text/javascript">
    // this identifies your website in the createToken call below
    Stripe.setPublishableKey('pk_tgdbVsxsj5AJFmCCFM3AakzC3LC0J');
</script>


<div id="page" class="clearfix">

	<h1 class="page-title" id="post-<?php the_ID(); ?>"><?php the_title(); ?></h1>
	
	
	<div id="checkout">
		<div class="checkoutBlock">
	        <h3 class="checkoutBlockTitle">Account</h3>
	        <div class="checkoutBlockContent clearfix">
				<div id="accountContainer" class="alignleft" >
					<h6>New Customer</h6>
					<p>Register with us for a faster checkout, to track the status of your order and more. You can also checkout as a guest.</p>
					<label class="accountRadio"><input class="accountRadioInput" type="radio" id="accountRadioInput1" name="checkoutAsGuest" value="yes" />Checkout As Guest</label><br />
					<label class="accountRadio"><input class="accountRadioInput" type="radio" id="accountRadioInput2" name="checkoutAsGuest" value="no" />Register An Account</label>
				</div>
				<div id="loginContainer" class="alignright">
					<h6>Returning Customer</h6>
					<p>To continue, please enter your email address and password that you use for your account.</p>	
					<?php login_with_ajax() ?>
				</div>
			</div>
		</div>
		<form id="checkout-form" action="/checkout/process" method="post">
			<input type="hidden" name="tc_guest_checkout" id="tc_guest_checkout" value="yes" />
			<input type="hidden" name="_tc_order_type" id="_tc_order_type" value="35" />
		


			<div class="checkoutBlock">
		        <h3 class="checkoutBlockTitle">Customer Details</h3>
		        <div class="checkoutBlockContent">
					<div id="billingAddressDiv" class="one-half first">
						<span class="addressFormHeader">Billing Address:</span>
						<table id="billingAddressTable" style="width:100%;" >
							<tbody>
								<tr style="display:none;">
									<td class="address-form-label-column">Address Book:</td>
									<td style="text-align:left"><select class="addressBookDropdown" id="billingAddressSelect"></select></td>
								</tr>
								<tr>
									<td class="address-form-label-column">Email address:</td>
									<td style="text-align:left"> <input type="text" name="customer_email"  id="customer_email"  /></td>
								</tr>								
								<tr>
									<td class="address-form-label-column">Confirm Email address:</td>
									<td style="text-align:left"> <input type="text" name="customer_email_confirm"  id="customer_email_confirm"  /></td>
								</tr>								
								<tr>
									<td class="address-form-label-column">Phone:</td>
									<td style="text-align:left"> <input type="text" name="customer_phone"  id="customer_phone"  /></td>
								</tr>								
								
								<tr>
									<td class="address-form-label-column">First Name:</td>
									<td style="text-align:left"> <input type="text" name="billing_address_first_name"  id="billing_address_first_name"  /></td>
								</tr>
								<tr>
									<td class="address-form-label-column">Last Name:</td>
									<td style="text-align:left"> <input type="text" name="billing_address_last_name"  id="billing_address_last_name"  /></td>
								</tr>
								<tr>
									<td class="address-form-label-column">Company:</td>
									<td style="text-align:left"> <input type="text" name="billing_address_company"  id="billing_address_company"  /></td>
								</tr>
								<tr>
									<td class="address-form-label-column">Address Line 1:</td>
									<td style="text-align:left"> <input type="text" name="billing_address_line_1"  id="billing_address_line_1"  /></td>
								</tr>
								<tr>
									<td class="address-form-label-column">Address Line 2:</td>
									<td style="text-align:left"> <input type="text" name="billing_address_line_2"  id="billing_address_line_2"  /></td>
								</tr>
								<tr>
									<td class="address-form-label-column">City:</td>
									<td style="text-align:left"> <input type="text" name="billing_address_city"  id="billing_address_city"  /></td>
								</tr>
								<tr>
									<td class="address-form-label-column">State:</td>
									<td style="text-align:left"> <select name="billing_address_state"  id="billing_address_state"></select></td>
								</tr>
								<tr>
									<td class="address-form-label-column">Zip:</td>
									<td style="text-align:left"> <input type="text" name="billing_address_zip"  id="billing_address_zip"  /></td>
								</tr>
								<tr>
									<td class="address-form-label-column">Country:</td>
									<td style="text-align:left"> <input type="text" name="billing_address_country"  id="billing_address_country"  /></td>
								</tr>
							</tbody>
						</table>
						<label id="editBillingAddressLabel" style="display:none"><input type="checkbox" id="editBillingAddressCheckbox" />Edit Billing Address</label>
					</div>
				
					<div id="shippingAddressDiv" class="one-half">

						<span class="addressFormHeader">Shipping Address:</span><br />
						<table id="shippingAddressTable"  style="display:none;width:100%;" >
							<tbody>
								<tr style="display:none;">
									<td class="address-form-label-column">Address Book:</td>
									<td style="text-align:left"><select class="addressBookDropdown" id="shippingAddressSelect"></select></td>
								</tr>
								<tr>
									<td class="address-form-label-column">First Name:</td>
									<td style="text-align:left"> <input type="text" name="shipping_address_first_name"  id="shipping_address_first_name"  /></td>
								</tr>
								<tr>
									<td class="address-form-label-column">Last Name:</td>
									<td style="text-align:left"> <input type="text" name="shipping_address_last_name"  id="shipping_address_last_name"  /></td>
								</tr>
								<tr>
									<td class="address-form-label-column">Company:</td>
									<td style="text-align:left"> <input type="text" name="shipping_address_company"  id="shipping_address_company"  /></td>
								</tr>
								<tr>
									<td class="address-form-label-column">Address Line 1:</td>
									<td style="text-align:left"> <input type="text" name="shipping_address_line_1"  id="shipping_address_line_1"  /></td>
								</tr>
								<tr>
									<td class="address-form-label-column">Address Line 2:</td>
									<td style="text-align:left"> <input type="text" name="shipping_address_line_2"  id="shipping_address_line_2"  /></td>
								</tr>
								<tr>
									<td class="address-form-label-column">City:</td>
									<td style="text-align:left"> <input type="text" name="shipping_address_city"  id="shipping_address_city"  /></td>
								</tr>
								<tr>
									<td class="address-form-label-column">State:</td>
									<td style="text-align:left"> <select name="shipping_address_state"  id="shipping_address_state"></select></td>
								</tr>
								<tr>
									<td class="address-form-label-column">Zip:</td>
									<td style="text-align:left"> <input type="text" name="shipping_address_zip"  id="shipping_address_zip"  /></td>
								</tr>
								<tr>
									<td class="address-form-label-column">Country:</td>
									<td style="text-align:left"> <input type="text" name="shipping_address_country"  id="shipping_address_country"  /></td>
								</tr>
							</tbody>
						</table>
					
						<label id="editShippingAddressLabel" style="display:none"><input type="checkbox" id="editShippingAddressCheckbox"  />Edit Shipping Address</label><br /><br />
					
					
						<label class="shippingRadio"><input class="shippingRadioInput" type="radio" id="shippingRadioInput1" name="shippingSameAsBilling" value="yes" />Use Billing Address</label><br />
						<label class="shippingRadio"><input class="shippingRadioInput" type="radio" id="shippingRadioInput2" name="shippingSameAsBilling" value="no" />Specify Different Shipping Address</label>
					
					</div>
					<div style="clear: both"></div>
				</div>
			</div>
		
			<div class="checkoutBlock">
		        <h3 class="checkoutBlockTitle">Shipping / Pickup Details</h3>
		        <div class="checkoutBlockContent clearfix">
					<div class="one-third first" >
		        		<p>Arrive By Date:</p>
						<label class="arriveByRadio"><input class="arriveByRadioInput" type="radio" id="arriveByRadioInput1" name="arriveASAP" value="yes" checked="checked" />As soon as possible</label><br />
						<label class="arriveByRadio"><input class="arriveByRadioInput" type="radio" id="arriveByRadioInput2" name="arriveASAP" value="no" />A specific date (please select):</label>
						<div id="scheduledDateDiv" style="display:none;">
							Scheduled Date: <input name="_tc_event_date" id="_tc_event_date" style="width:100px;" class="tc_datepicker" type="text"  />
						</div>
					</div>
					<div id="shippingContentDiv" class="two-thirds">
						<p>Select Pickup or Shipping Method:</p>
						<label class="shipmentTypeRadio"><input class="shipmentTypeRadioInput" type="radio" id="shipmentTypeRadioInput1" name="shipmentType" value="PICKUP"  />Pickup</label><br />
						<input type="button" id="getShippingRatesButton" value="Get Shipping Rates">
						<div id="loadingShipping" style="display:none;">
						  <p style="font-size:10px"><img src="<?php echo plugins_url('/tastyclouds-crm/images/ajax-loader-circle.gif'); ?>" />Loading shipping...</p>
						</div>
					
						<?php
							// error_log(var_export($cart,1));
							// $data = array();
							// 
							// // 'Address' => array(
							// // 	'StreetLines' => array(@$customerInfo['address_1'], @$customerInfo['address_2']),
							// // 	'City' => @$customerInfo['city'],
							// // 	'StateOrProvinceCode' => @$customerInfo['state'],
							// // 	'PostalCode' => @$customerInfo['zip'],
							// // 	'CountryCode' => 'US',
							// // 	'Residential' => true)
							// 	
							// $data['customerData'] = array();
							// $data['customerData']['address_1'] = '42 Moffitt Blvd'; 	
							// //$data['customerInfo']['address_2'] = '42 Moffitt Blvd'; 	
							// $data['customerData']['city'] = 'East Islip'; 	
							// $data['customerData']['state'] = 'NY'; 	
							// $data['customerData']['zip'] = '11730'; 	
							// ShippingAjax::getShippingRatesForCheckout($data);
							// 
						
						?>
					</div>
				</div>
			</div>
			
			
			<div class="checkoutBlock">
		        <h3 class="checkoutBlockTitle">Order Summary</h3>
		        <div class="checkoutBlockContent clearfix">
					<div id="orderSummary">
						<div>
							<table id="orderSummaryTable">
								<tbody>
									<tr>
										<th style="text-align:left">Quantity</th>				
										<th style="text-align:left">Item</th>				
										<th style="text-align:left">Description</th>
										<th style="text-align:left">Unit Price</th>
										<th style="text-align:right">Total</th>
									</tr>
									
									<?php echo $summaryRows ?>
								</tbody>
							</table>
						</div>
						
						<button id="editOrderButton">Edit Cart</button><br /><br />
					</div>
				</div>
			</div>
			
			
    					
			<div class="checkoutBlock">
		        <h3 class="checkoutBlockTitle">Finalize Order</h3>
		        <div class="checkoutBlockContent clearfix">
					<div id="couponDiv" class="one-third first">
						<p>Coupon Code / Gift Certificate:</p>
						<input type="text" value="" id="couponCodeInput" />
						<button id="applyCouponButton" >Apply Coupon</button>
						<button id="removeCouponButton" class="button-secondary" style="display:none;">Remove Coupoon</button>
						<div id="validatingCoupon">
						  <p style="font-size:10px"><img src="<?php echo plugins_url('/tastyclouds-crm/images/ajax-loader-circle.gif'); ?>" />Validating coupon...</p>
						</div>
						<div id="couponTitle"><br /><span style="font-style:italic;color:#CCC;font-size:10px;">(Will be applied during checkout)<span></div>
					</div>
					<div class="two-thirds" >
		        		<p>Payment Information:</p>
						<table id="ccTable" style="width:100%;" >
							<tbody>
								<tr>
									<td class="address-form-label-column">Card Number:</td>
									<td style="text-align:left"> <input type="text" size="20" autocomplete="off" id="card-number" /> </td>
								</tr>									
								<tr>
									<td class="address-form-label-column">CVV:</td>
									<td style="text-align:left"> <input type="text" size="4" autocomplete="off" id="card-cvc" /></td>
								</tr>								
								<tr>
									<td class="address-form-label-column">Expiration (MM/YYYY):</td>
									<td style="text-align:left"> <input type="text" size="2" id="card-expiry-month"/>
									        <span> / </span>
									        <input type="text" size="4" id="card-expiry-year"/>
									</td>
								</tr>								
							</tbody>
						</table>
					</div>
				</div>
			</div>
			
			
    		
            <p><button type="submit" class="submit-button">Submit Payment</button></p>

			<!-- <p><input type="submit" value="Process Order &rarr;"></p> -->
		</form>

</div>
<?php get_footer(); ?>