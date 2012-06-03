<?php

class SaveFrontEndOrderCommand
{

	var $orderID;
	var $contactID;
	var $contactModel;
	var $isNewOrder;
	var $orderWasReloaded;
	var $billingAddress;
	var $shippingAddress;
	var $cart;
	var $paymentID;
	var $checkoutAsGuest;
	
	function __construct($orderID)
	{
		$this->orderID = $orderID;
	}
	
	public function execute(){
		
		
		$this->checkoutAsGuest =  (@$_POST['tc_guest_checkout'] == "yes");
		

		$this->contactModel = $this->processContact();
		$this->contactID = $this->contactModel['contactID'];		

		
		$this->billingAddress = $this->processBillingAddress();
		$this->shippingAddress = $this->processShippingAddress($this->billingAddress);

		// // save payment info if submitted with order
		if (!empty($_POST['stripeToken'] ) ){
			$this->paymentID = $this->processPayment();
		}	
		// 
		// OrderProxy::removeContactTaxonomyTerms($this->orderID);
		// 
		// OrderProxy::setOrderTypeTaxonomyTerms($this->orderID);
		// 
		// if(isset($_POST['_tc_event_date'])){
		// 	update_post_meta( $this->orderID, '_tc_event_date', $_POST['_tc_event_date'] );	
		// 	// store the formatted date to make it easier to search for today's orders later
		// 	$formattedDate = date('Y-m-d', strtotime($_POST['_tc_event_date']));	
		// 	error_log("_tc_event_date_formated : $formattedDate"  );	
		// 	update_post_meta( $this->orderID, '_tc_event_date_formatted', $formattedDate );					
		// }
		// update_post_meta( $this->orderID,'tc_order_total', $_POST['tc_order_total']);
		// update_post_meta( $this->orderID,'tc_balance_due', $_POST['tc_balance_due']);
		// update_post_meta( $this->orderID,'tc_payments_total', $_POST['tc_payments_total']); 
		// 
		// 
		// if ($this->isNewOrder || $this->orderWasReloaded){
		// 	$cartID = $_POST['cartID'];
		// 	$this->cart = CartAjax::getCartById($cartID);
		// 	OrderProxy::saveCart($this->cart, $this->orderID, $cartID);
		// }
		// 
		// 
		// 
		// if ( $this->isNewOrder  || $this->orderWasReloaded ){
		// 	//if this is a new order, check to see if we need to create an invoice on Freshbooks.
		// 
		// 	// TODO: determine if we want to save this invoice to FB.
		// 	$orderType = $_POST['_tc_order_type'];
		// 
		// 	// if we are saving any type of order except "Walk In", link with freshbooks
		// 	// to send customer an invoice.
		// 	if ($orderType == "36"){ // 36 is a walk-in order, we dont need an invoice on Freshbooks for that.
		// 		return;
		// 	}
		// 	
		// 	$this->createInvoice();
		// 
		// }
		
	}
	
	
	private function createInvoice(){
		
		// Freshbooks requires a valid email address for a client,
		// so make sure we have one before attempting to add. 
		$customerEmail = $this->contactModel['customerEmail'];
		
		if (empty($customerEmail) || filter_var($customerEmail, FILTER_VALIDATE_EMAIL) === FALSE){
			error_log("\n\nNo valid email provided, skipping invoice.\n\n");								
			return;
		}
		
		// TODO: generate invoice email and send to customer
		
		
	}
	
	private function processContact(){
		
		// For the front end, we will have one of the following:
		//		- A logged in user -  get the previously saved customer info.
		//		- Checkout as guest - Create new contact info from the billing address
		//		- Create an account - Create new contact info from the billing address, create WP user, link contact model with WP user id
		
		
		if (is_user_logged_in()){
			// TODO : handle logged in user
		}else{
			// Create a contact using the billing address
			$customerFirstName = @$_POST['billing_address_first_name'];
			$customerLastName = @$_POST['billing_address_last_name'];
			$customerEmail = @$_POST['customer_email'];
			$customerPhone = @$_POST['customer_phone'];
			$customerCompany = @$_POST['billing_address_company'];
			
			$contactModel = array(
				'customerFirstName'=>$customerFirstName,
				'customerLastName'=>$customerLastName,
				'customerEmail'=>$customerEmail,
				'customerPhone'=>$customerPhone,
				'customerCompany'=>$customerCompany
			);
			
			$newContactID = ContactProxy::createNew(array('use_post'=>false));
			$contactModel['contactID'] = $newContactID;
			ContactProxy::updateMeta($contactModel);
			
			
		}
		
		error_log("Connecting contactID : $contactIDToLink to orderID : ".$this->orderID);
		$c = p2p_type( 'contact_to_order' )->connect( $contactModel['contactID'], $this->orderID, array(
			'date' => current_time('mysql'),			
		) );
		
		error_log('linked contact to order, p2pid: ');
		error_log(var_export($c, 1));

		return $contactModel;
		

	}
	
	
	private function processPayment(){
		// TODO:  submit payment to stripe
		// set your secret key: remember to change this to your live secret key in production
		// see your keys here https://manage.stripe.com/account
		Stripe::setApiKey("YUHmdlnsLPInqkUrAWZxKrO82hRDgQDQ");

		// get the credit card details submitted by the form
		$token = $_POST['stripeToken'];
		
		// If they chose to create an account, create a Stripe Customer object and charge that,
		// If they chose to check out as guest, just charge the card directly.
		
		$description = array('orderID'=>$this->orderID);
		
		$descriptionJSON = json_encode($description);
		
		if($this->checkoutAsGuest){
			// create the charge on Stripe's servers - this will charge the user's card
			$charge = Stripe_Charge::create(array(
				  "amount" => 1000, // amount in cents, again
				  "currency" => "usd",
				  "card" => $token,
				  "description" => $descriptionJSON 
				)
			);
			
			
			
		}else{
			
			
		}
		

		
		
				
		$paymentID = PaymentProxy::insertNew(array('use_post'=>true, 'orderID'=>$this->orderID));

		p2p_type( 'payment_to_order' )->connect( $paymentID, $this->orderID, array(
			'date' => current_time('mysql'),			
		) );
		
		return $paymentID;
		
	}
	
	private function processBillingAddress(){
		$contactID = $this->contactID;
		error_log("processBillingAddress, contactID : $contactID");
		// check for billing address submission
		$billingAddress = ContactProxy::getAddressFromPost('billing');
		$billingAddressString = implode('', $billingAddress);
		$selectedBillingAddressID = @$_POST['tc_selected_billing_addr'];
		$billingAddressID = '';

		// if the address is empty and an addressID was selected...
		if (empty($billingAddressString) && !empty($selectedBillingAddressID)){
			error_log(" billing address is empty and an addressID was selected...");
			$billingAddress = ContactProxy::getAddressByID($selectedBillingAddressID);
			$billingAddressString = implode('', $billingAddress);
			
			$billingAddressID = $selectedBillingAddressID;
		}else{
			
			// if we have an address and there was no addressID selected, it's new....
			if (!empty($billingAddressString) && empty($selectedBillingAddressID)){
				error_log("billing address and there was no addressID selected, it's new....");
				$billingAddressID = ContactProxy::insertNewAddress(array('contactID'=>$contactID, 'address'=>$billingAddress, 'type'=>'billing'));
			}

			// if we have an address and there was also addressID selected, save it as a new address...
			if (!empty($billingAddressString) && !empty($selectedBillingAddressID)){
				error_log("we have a billing address and there was also addressID selected, save it as a new address...");
				$billingAddressID = ContactProxy::insertNewAddress(array('contactID'=>$contactID, 'address'=>$billingAddress, 'type'=>'billing'));
			}
		}

		// if we have an address and an order id, link the billing address with the order.
		if (!empty($billingAddressString) && !empty($billingAddressID)){
			error_log("we have an address and an order id, link the billing address with the order.");
		
			error_log("Connecting billingAddressID : $billingAddressID to orderID : ".$this->orderID);	
			
			$ba = p2p_type('billing_address_to_order' )->connect( $billingAddressID, $this->orderID );
			error_log('linked billing address to order, p2pid : ');
			error_log(var_export($ba, 1));
		}
		
		return $billingAddress;
		
		
	}
	
	private function processShippingAddress($billingAddress){
		$contactID = $this->contactID;
		
		$shippingSameAsBilling = @$_POST['shippingSameAsBilling'];
		error_log("shippingSameAsBilling : $shippingSameAsBilling");

		
		
		// for the shipping address, start with either a clone of the billing address,
		// or build the shipping address from POST.
		if ($shippingSameAsBilling == "yes"){

			// if we clone from POST, set selectedShippingAddressID to "" so that we can save it as a new address.
			error_log("using billing address as shipping address...");
			$shippingAddress = $billingAddress;
			$shippingAddressString = implode('', $shippingAddress);
			$shippingAddressID = '';
			$selectedShippingAddressID = '';
		}else{
			// check for shipping address submission
			$shippingAddress = ContactProxy::getAddressFromPost('shipping');
			$shippingAddressString = implode('', $shippingAddress);
			$selectedShippingAddressID = @$_POST['tc_selected_shipping_addr'];
			$shippingAddressID = '';
		}



		// if the address is empty and an addressID was selected, get the address...
		if (empty($shippingAddressString) && !empty($selectedShippingAddressID)){
			error_log("shipping address is empty and an addressID was selected...");
			$shippingAddress = ContactProxy::getAddressByID($selectedShippingAddressID);
			$shippingAddressString = implode('', $shippingAddress);
			
			$shippingAddressID = $selectedShippingAddressID;
		}else{
			
			// if we have an address and there was no addressID selected, it's new....
			if (!empty($shippingAddressString) && empty($selectedShippingAddressID)){
				error_log("shipping address and there was no addressID selected, it's new....");
				$shippingAddressID = ContactProxy::insertNewAddress(array('contactID'=>$contactID, 'address'=>$shippingAddress, 'type'=>'shipping'));
			}

			// if we have an address and there was also addressID selected, save it as a new address...
			if (!empty($shippingAddressString) && !empty($selectedShippingAddressID)){
				error_log("we have a shipping address and there was also addressID selected, save it as a new address...");
				$shippingAddressID = ContactProxy::insertNewAddress(array('contactID'=>$contactID, 'address'=>$shippingAddress, 'type'=>'shipping'));
			}
			
			
		}



		// if we have an address and an order id, link the shipping address with the order.
		if (!empty($shippingAddressString) && !empty($shippingAddressID)){
			error_log("we have an address and an order id, link the shipping address with the order.");
			
			error_log("Connecting shippingAddressID : $shippingAddressID to orderID : ".$this->orderID);	
			
			$sa = p2p_type('shipping_address_to_order' )->connect( $shippingAddressID, $this->orderID );
			
			error_log('linked shipping address to order : ');
			error_log(var_export($sa, 1));
		}
		
		
	}
}


?>