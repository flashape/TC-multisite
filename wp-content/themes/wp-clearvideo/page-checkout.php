<?php get_header(); ?>

<div id="page" class="clearfix">

	<h1 class="page-title" id="post-<?php the_ID(); ?>"><?php the_title(); ?></h1>
	
	
	<div id="checkout">
		<div class="checkoutBlock">
	        <h3 class="checkoutBlockTitle">Account</h3>
	        <div class="checkoutBlockContent">
				<div id="accountContainer" >
					<h6>New Customer</h6>
					<p>Register with us for a faster checkout, to track the status of your order and more. You can also checkout as a guest.</p>
					<label class="accountRadio"><input class="accountRadioInput" type="radio" id="accountRadioInput1" name="checkoutAsGuest" value="yes" />Checkout As Guest</label><br />
					<label class="accountRadio"><input class="accountRadioInput" type="radio" id="accountRadioInput2" name="checkoutAsGuest" value="no" />Register An Account</label>
				</div>
				<div id="loginContainer">
					<h6>Returning Customer</h6>
					<p>To continue, please enter your email address and password that you use for your account.</p>	
					<?php login_with_ajax() ?>
				</div>
			</div>
		</div>

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
	        <div class="checkoutBlockContent">
        
			</div>
		</div>
    </div>
<?php get_footer(); ?>