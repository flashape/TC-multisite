<?php

class SaveOrderCommand
{

	var $orderID;
	var $contactID;
	
	function __construct($orderID)
	{
		$this->orderID = $orderID;
	}
	
	public function execute(){
		global $order_details_metabox;
		$orderID = $this->orderID;

		// remove the save action handler so it doesnt fire if/when we need to save new posts of other types (like contacts or payments)
		$order_details_metabox->remove_action('save', 'onOrderDetailsMetaboxSaveAction');

		$contactModel = $this->processContact();
		$contactID = $this->contactID;
		$billingAddress = $this->processBillingAddress();
		
		$shippingAddress = $this->processShippingAddress($billingAddress);
		

		// save payment info if submitted with order
		if (!empty($_POST['payment_amount'] ) ){
			$paymentID = $this->processPayment();
		}	

		OrderProxy::removeContactTaxonomyTerms($orderID);

		OrderProxy::setOrderTypeTaxonomyTerms($orderID);

		if(isset($_POST['_tc_event_date'])){
			update_post_meta( $orderID, '_tc_event_date', $_POST['_tc_event_date'] );					
		}



		if ( defined( 'IS_NEW_ORDER_POST' ) && IS_NEW_ORDER_POST ){
			//if this is a new order, check to see if we need to create an invoice on Freshbooks.

			$cartID = $_POST['cartID'];
			$cart = CartAjax::getCartById($cartID);

			OrderProxy::saveCart($cart, $orderID, $cartID);

			// TODO: determine if we want to save this invoice to FB.
			$orderType = $_POST['_tc_order_type'];

			// if we are saving any type of order except "Walk In", link with freshbooks
			// to send customer an invoice.
			if ($orderType == "36"){ // 36 is a walk-in order, we dont need an invoice on Freshbooks for that.
				return;
			}

			// Freshbooks requires a valid email address for a client,
			// so make sure we have one before attempting to add. 
			$customerEmail = $contactModel['customerEmail'];
			
			if (empty($customerEmail) || filter_var($customerEmail, FILTER_VALIDATE_EMAIL) === FALSE){
				error_log("\n\nNo valid email provided, skipping Freshbooks invoice.\n\n");								
				return;
			}

			require_once(TASTY_CMS_PLUGIN_LIBS_DIR .'freshbooks/FreshbooksService.php');
			require_once(TASTY_CMS_PLUGIN_LIBS_DIR .'freshbooks/FreshbooksUtils.php');
			$freshbooksService = new FreshbooksService();

			$fbClientID = FreshbooksUtils::getFreshbooksClientID($contactID);

			if (empty($fbClientID)){
				$clientObj = FreshbooksUtils::createClientObject(array('contact'=>$contactModel, 'address'=>$billingAddress));

				$createClientResult = $freshbooksService->createNewClient($clientObj);
				$response = $createClientResult['response'];

				if ($createClientResult['success']){
					error_log("\n\nSuccessfully created new client on freshbooks!");
					$fbClientID = $response['client_id'];
					update_post_meta($contactID, '_tc_fb_id', $fbClientID);
				}else{
					// throw a fit
					error_log("\n\nError adding client to freshbooks");
					error_log(print_r($response, 1));
					error_log(print_r($createClientResult['error'], 1));
					return;
				}	
			}

			/**********************************************
			 * Now that we have a client id for Freshbooks,
			 * create a new invoice for the order.
			//  **********************************************/
			$invoice = FreshbooksUtils::getInvoiceFromCart($fbClientID, $cart);
			error_log(var_export($invoice,1));

			$createInvoiceResult = $freshbooksService->createInvoice($invoice);
			$invoiceResponse = $createInvoiceResult['response'];

			if ($createInvoiceResult['success']){
				error_log("\n\nSuccessfully created new invoice on freshbooks!");								
				$invoiceID = $invoiceResponse['invoice_id'];
			}else{
				error_log("\n\nError adding invoice to fresbooks");
				error_log(print_r($invoiceResponse, 1));
				error_log(print_r($createInvoiceResult['error'], 1));
				return;
			}


			/**********************************************
			 * If there was a payment submitted with this order,
			 * save the payment as a post, save it to Freshbooks, 
			 * and add the payment to the invoice
			//  **********************************************/
			if ( isset($paymentID) ){
				// save payment to Freshbooks
				$payment = FreshbooksUtils::createNewInvoicePaymentFromPost($invoiceID);
				$createPaymentResult = $freshbooksService->createPaymentForInvoice($payment);
				$paymentResponse = $createPaymentResult['response'];

				if ($createPaymentResult['success']){
					error_log("\n\nSuccessfully created new payment on freshbooks!");
					$invoicePaymentID = $paymentResponse['payment_id'];
					update_post_meta($paymentID, '_tc_fb_payment_id', $invoicePaymentID);
				}else{
					error_log("\n\nError adding payment to freshbooks");
					error_log(print_r($paymentResponse, 1));
					error_log(print_r($createPaymentResult['error'], 1));
					return;
				}
			}


			/**********************************************
			 * Now that the invoice is ready, email to the client
			//  **********************************************/
			$emailInfo = array();
			$emailInfo['invoice_id'] = $invoiceID;
			$emailInfo['message'] = 'You have a new invoice. Get it here: ::invoice link::';
			$emailInfo['subject'] = 'Tasty Clouds Cotton Candy Company : Invoice';

			$sendInvoiceResult = $freshbooksService->sendInvoiceByEmail($emailInfo);
			$sendInvoiceResponse = $sendInvoiceResult['response'];

			if ($sendInvoiceResult['success']){
				error_log("\n\nSuccessfully send email!");

			}else{
				error_log("\n\nError sending email");
				error_log(print_r($sendInvoiceResponse, 1));
				error_log(print_r($sendInvoiceResult['error'], 1));
				return;
			}



		}
		
	}
	
	private function processContact(){
		// if the tc_selected_contact var is empty, and user info was submitted, save a new contact
		$customerFirstName = @$_POST['customer_address_first_name'];
		$customerLastName = @$_POST['customer_address_last_name'];
		$customerEmail = @$_POST['customer_email'];
		$customerPhone = @$_POST['customer_phone'];
		$customerCompany = @$_POST['customer_company'];

		$contactModel = array(
			'customerFirstName'=>$customerFirstName,
			'customerLastName'=>$customerLastName,
			'customerEmail'=>$customerEmail,
			'customerPhone'=>$customerPhone,
			'customerCompany'=>$customerCompany
		);

		$contactID = $_POST['tc_selected_contact'];

		$contactModelString = implode('', $contactModel);
		
		$linkContactToOrder = false;

		if ( !empty($contactModelString) ){
			error_log("contactModelString not empty!");
			
			if( empty($contactID) ){
				$contactID = ContactProxy::createNew(array('use_post'=>true));
			}

			//store the contact meta info with the post
			$contactModel['contactID'] = $contactID;
			ContactProxy::updateMeta($contactModel);
			
			$linkContactToOrder = true;

		}elseif( empty($contactModelString) && $contactID ){
			error_log("contactModelString is empty and contactID is $contactID, linking to order....");
			$linkContactToOrder = true;

		}
		
		if ($linkContactToOrder){
			error_log("Connected contactID : $contactID to orderID : ".$this->orderID);
			$c = p2p_type( 'contact_to_order' )->connect( $contactID, $this->orderID, array(
				'date' => current_time('mysql'),			
			) );
			
			error_log('linked contact to order, p2pid: ');
			error_log(var_export($c, 1));
		}
		
		$this->contactID = $contactID;
		return $contactModel;
		
		
	}
	
	private function processPayment(){
		$orderID = $this->orderID;
		
		$paymentID = PaymentProxy::insertNew(array('use_post'=>true, 'orderID'=>$orderID));

		p2p_type( 'payment_to_order' )->connect( $paymentID, $orderID, array(
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