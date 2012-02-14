<?php


error_reporting(E_ALL);
ini_set('display_errors','On');

function fail($message){
	echo "result=error";
}

function getVarString($var){
	return (empty($var) || $var == 'null') ? 'Not Provided' : $var;
}

require('../freshbooks/FreshBooksRequest.php');

// Setup the login credentials
$domain = 'tastyclouds';
$token = 'fb42853c7885e871b83a64d7c27c499b';
FreshBooksRequest::init($domain, $token);

/**********************************************
 * Fetch all clients by a specific id
 **********************************************/
// $fb = new FreshBooksRequest('item.list');
// $fb->post(array('per_page'=>50));
// 
// 
// $fb->request();
// if($fb->success())
// {
//     echo 'successful! the full response is in an array below';
//     print_r($fb->getResponse());
// }
// else
// {
//     echo $fb->getError();
//     print_r($fb->getResponse());
// }

/**********************************************
 * Create a new client on Freshbooks
//  **********************************************/
// $fbCreateClientRequest = new FreshBooksRequest('client.create');
// $client = array();
// $tstamp = time();
// $client['first_name'] = 'APITEST';
// $client['last_name'] = 'TEST';
// //TODO:  Check if an organization was entered in AmeriCommerce when the order was placed.
// $client['organization'] = $client['first_name'] . ' ' . $client['last_name'];
// 
// $client['email'] = 'apitest.'.$tstamp.'@notreal.com';
// $client['p_street1'] = '123 Sesame St.'; 
// $client['p_street2'] = ''; 
// $client['p_city'] = 'Awesometown';   
// $client['p_state'] = 'CA'; 
// $client['p_country'] = 'United States';
// $client['p_code'] = '90025';
// 
// 
// $fbCreateClientRequest->post(array('client' => $client));
// //print_r($fb->getGeneratedXML());
// $fbCreateClientRequest->request();
// if($fbCreateClientRequest->success())
// {
//     $res = $fbCreateClientRequest->getResponse();
// 	$newFBClientID = $res['client_id'];
//     
// 	$invoice['client_id'] = $newFBClientID;
// 	$invoice['lines'] = array();
// 	$invoice['lines'][''] = '';
// }
// else
// {
//     echo $fbCreateClientRequest->getError();
//     print_r($fbCreateClientRequest->getResponse());
// }

include('../americommerce/AmeriCommerceDatabaseIO.php');       

$ns = "http://www.americommerce.com";
$user = 'rich';
$pass = 'M1ll10n$';
$token = '2da0e279-c42f-48aa-afe6-ed3195221f08';
$header = new AmericommerceHeaderInfo($user, $pass, $token);

$api = new AmeriCommerceDatabaseIO(array('trace'=>1));

//Body of the Soap Header. 
$headerbody = array('UserName' => $user, 
                    'Password' => $pass, 
                    'SecurityToken'=>$token); 


$orderID = $_GET['orderID'];

//Create Soap Header.        
$header = new SOAPHeader($ns, 'AmeriCommerceHeaderInfo', $headerbody);        
        
//set the Headers of Soap Client. 
$api->__setSoapHeaders($header);

/**********************************************
* Get the order object.  The call to Order_GetByKey does not return a fully populated order,
* So we find the customerID in the response and call Order_GetByCustomerIDPreFilled to get the full order.
**********************************************/

$getOrderResponse = $api->Order_GetByKey(new Order_GetByKey($orderID));
 
//echo "getOrderResponse : \n<br />";
$customerID = $getOrderResponse->Order_GetByKeyResult->customerID->Value;
// echo "customerID :$customerID \n<br />";
// echo "orderID :$orderID \n<br />";

$orderGetByCustomerIDPreFilledResponse = $api->Order_GetByCustomerIDPreFilled(new Order_GetByCustomerIDPreFilled($customerID));

$orderTransArray = $orderGetByCustomerIDPreFilledResponse->Order_GetByCustomerIDPreFilledResult->OrderTrans;

$orderTransToProcess = null;

foreach ($orderTransArray as $orderTrans) {	
	if($orderTrans->orderID->Value == $orderID){
		$orderTransToProcess = $orderTrans;
		break;
	}
}

//var_dump($orderTransToProcess);

$orderBillingAddressTrans = $orderTransToProcess->OrderBillingAddressTrans;
$customerTrans = $orderTransToProcess->CustomerTrans;

/**********************************************
 * Now that we have the order info, create a new client on Freshbooks
//  **********************************************/
// 
// $fbCreateClientRequest = new FreshBooksRequest('client.create');
// $client = array();
// $tstamp = time();
// $client['first_name'] = 'APITEST';
// $client['last_name'] = 'TEST';
// 
// $companyName = '';
// if (isset($customerTrans->Company)){
// 	$companyName = $customerTrans->Company;
// }else{
// 	$companyName = $client['first_name'] . ' ' . $client['last_name'];
// }
// $client['organization'] = $companyName;
// 
// // prefix with timestamp for dev testing
// $client['email'] = $tstamp.'_'.$customerTrans->email;
// $client['p_street1'] = $orderBillingAddressTrans->Address1; 
// $client['p_street2'] = $orderBillingAddressTrans->Address2; 
// $client['p_city'] = $orderBillingAddressTrans->City;   
// $client['p_state'] = $orderBillingAddressTrans->StateTrans->state; 
// $client['p_country'] = $orderBillingAddressTrans->CountryTrans->country;
// $client['p_code'] = $orderBillingAddressTrans->ZipCode;
// 
// 
// $fbCreateClientRequest->post(array('client' => $client));
// print_r($fbCreateClientRequest->getGeneratedXML());
// $fbCreateClientRequest->request();
// if($fbCreateClientRequest->success())
// {
// 	
// 	/**********************************************
// 	 * Now that we have added the client to Freshbooks,
// 	 * create a new invoice for the order.
// 	//  **********************************************/
//     $createClientResult = $fbCreateClientRequest->getResponse();
// 	$newFBClientID = $createClientResult['client_id'];
//     
// 	$invoice['client_id'] = $newFBClientID;
// 	$invoice['lines'] = array();
// 	
// 	//loop through the OrderItemsCollection and add a line 
// 	// for each to the invoice
// 	$orderItemTransArray = $orderTransToProcess->OrderItemColTrans;
// 	
// 	foreach ($orderItemTransArray as $orderItemTrans) {	
// 			$lineItem = array();
// 			$lineItem['name'] = $orderItemTrans->itemName;
// 			$lineItem['description'] = $orderItemTrans->variations;
// 			$lineItem['unit_cost'] = number_format($orderItemTrans->price->Value, 2, '.', '');
// 			$lineItem['quantity'] = $orderItemTrans->quantity->Value;
// 			// $lineItem['tax1_name'] = '';
// 			// $lineItem['tax2_name'] = '';
// 			// $lineItem['tax1_percent'] = '';
// 			// $lineItem['tax2_percent'] = '';
// 			$lineItem['type'] = 'Item';
// 			
// 			$invoice['lines'][] = $lineItem;	
// 	}
// 	
// 	// add the Shipping line to the invoice
// 	
// 	
// 	$fbCreateInvoiceRequest->post(array('invoice' => $invoice));
// 	print_r($fbCreateInvoiceRequest->getGeneratedXML());
// 	$fbCreateInvoiceRequest->request();
// 	
// 	if($fbCreateInvoiceRequest->success())
// 	{
// 		
// 		/**********************************************
// 		 * Now that we have created an invoice for this order,
// 		 * send the invoice to the customer
// 		//  **********************************************/
// 		$createInvoiceResult = $fbCreateInvoiceRequest->getResponse();
// 		$newInvoiceID = $createInvoiceResult['invoice_id'];
// 		
// 	}
// 	
// 	// <name>Yard Work</name>                       <!-- (Optional) -->  
// 	//     <description>Mowed the lawn.</description>   <!-- (Optional) -->  
// 	//     <unit_cost>10</unit_cost>                    <!-- Default is 0 -->  
// 	//     <quantity>4</quantity>                       <!-- Default is 0 -->  
// 	//     <tax1_name>GST</tax1_name>                   <!-- (Optional) -->  
// 	//     <tax2_name>PST</tax2_name>                   <!-- (Optional) -->  
// 	//     <tax1_percent>5</tax1_percent>               <!-- (Optional) -->  
// 	//     <tax2_percent>8</tax2_percent>               <!-- (Optional) -->  
// 	//     <type>Item</type>
// }
// else
// {
//     echo $fbCreateClientRequest->getError();
//     print_r($fbCreateClientRequest->getResponse());
// }




// $senderEmail = 'orderadmin_noreply@tastyclouds.com';
// 
// $emailBody = <<<ENDOFBODY
// 
// A new order has been manually entered at the online store.
// 
// REQUEST VARS:
// 
// $requestVars
// 
// ENDOFBODY;




$submitToSolve360 = false;

if ($submitToSolve360){
	
	// version 2.1

	// All placeholders that are used such as {yourEmail@yourDomain.com}, {yourSolve360Token}, {ownership},
	// {categoryId}, {templateId} should be replaced with real values without the {} brackets.

	// REQUIRED Edit with the email address you login to Solve360 with
	define('SOLVE360_USER', 'rich@tastyclouds.com');
	// REQUIRED Edit with token, Workspace > My Account > API Reference > API Token                             
	define('SOLVE360_TOKEN', 'CdxfE8Z0n1g7a7e4tfB2r3mbd4KaBbW1qfe5ba25');  


	// Configure service gateway object
	require './solve360/Solve360Service.php';
	$solve360Service = new Solve360Service(SOLVE360_USER, SOLVE360_TOKEN);

	//
	// Preparing the contact data
	//

	$contactData = array(
	    'firstname'     => $firstName,
	    'lastname'      => $lastName,
	    'businessemail' => $senderEmail,
   
	    // OPTION Apply category tag(s) and set the owner for the contact to a group
	    // You will find a list of IDs for your tags, groups and users in Workspace > My Account > API Reference
	    // To enable this option, uncomment the following:

	       
	    // Specify a different ownership i.e. share the item
	    'ownership'     => 16979874,
		
	    // Add categories
	    'categories'    => array(
	        'add' => array('category' => array(23134495)) // category tag 23134495 is "Website Contact Form Submission" Contact category tag in Solve360.
	    ),
	        
   
	);
	
	if (isset($phone) ){
		$contactData['cellularphone'] = $phone;
	}

	// 
	// Saving the contact
	//
	// Check if the contact already exists by searching for a matching email address.
	// If a match is found update the existing contact, otherwise create a new one.
	//

	$contacts = $solve360Service->searchContacts(array(
	    'filtermode' => 'byemail',
	    'filtervalue' => $contactData['businessemail'],
	));
	
	
	if ((integer) $contacts->count > 0) {
	    $contactId = (integer) current($contacts->children())->id;
	    $contactName = (string) current($contacts->children())->name;
	    $contact = $solve360Service->editContact($contactId, $contactData);
	} else {
	    $contact = $solve360Service->addContact($contactData);
	    $contactName = (string) $contact->item->name;
	    $contactId   = (integer) $contact->item->id;        
	}

	if (isset($contact->errors)) {
	    // Mail yourself if errors occur  
	    mail(
	        SOLVE360_USER, 
	        'Error while adding contact to Solve360', 
	        'Error: ' . $contact->errors->asXml()
	    );
	    die ('System error');
	} else {
	    // Mail yourself the result
	    // mail(
	    //     USER, 
	    //     'Contact posted to Solve360', 
	    //     'Contact "' . $contactName . '" https://secure.solve360.com/contact/' . $contactId . ' was posted to Solve360'
	    // );
	}

	//
	// OPTION Adding a activity 
	//

	    
	// Add a linked email activity view to the new contact.
	$linkedEmail = $solve360Service->addActivity($contactId, 'linkedemails');	 
	
	// Add a note activity to the new contact
	// Preparing data for the note
	$tomorrowTimestamp  = mktime(0, 0, 0, date("m")  , date("d")+1, date("Y"));
	$tomorrowString = date("Y-m-d", $tomorrowTimestamp);  
	$opportunityData = array(
	    'description' => "$firstName $lastName Website Contact Form submission",
	    'valuecurrency' => 'USD',
	    'valueinterval' => 'fixed price',
	    'stage' => 0,
	    'probability' => 99,
	    'closingdate' => $tomorrowString,
	    'responsible' => 16979872,
	    'status' => 'Discussion'
	);
	   // 16979872 - Nina
	   // 18389585 - Rich
	   // 16979874 - Tasty Clouds
	
	$opportunity = $solve360Service->addActivity($contactId, 'opportunity', $opportunityData);	 
	
	
	// // Add a note activity to the new contact
	// // Preparing data for the note
	// $noteData = array(
	//     'details' => nl2br($emailBody)
	// );
	// 
	// $note = $solve360Service->addActivity($contactId, 'note', $noteData);
	// 
	// // Mail yourself the result
	// mail(
	//     USER, 
	//     'Note was added to "' . $contactName . '" contact in Solve360',
	//     'Note with id ' . $note->id . ' was added to the contact with id ' . $contactId
	// );
	// // End of adding note activity
	// 

	//
	// OPTION Inserting a template of activities
	//

/*
	 * You can also insert a template directly into the contact you just posted
	 * You will find a list of IDs for your templates in Workspace > My Account > API Reference
	 * To enable this feature just uncomment the following request
	 *      
	 */

/*
	// Start of template request
	$templateId = {templateId};
	$template = $solve360Service->addActivity($contactId, 'template', array('templateid' => $templateId));
   
	// Mail yourself the result
	mail(
	    USER, 
	    'Template was added to "' . $contactName . '" contact in Solve360',
	    'Template with id ' . $templateId . ' was added to the contact with id ' . $contactId
	);
	// End of template request
*/
}




// require_once '../lib/swift_required.php';
// 
// 
// //Create the Transport
// $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
//   ->setUsername('nina@tastyclouds.com')
//   ->setPassword('sycamore')
//   ;
// 
// //Create the Mailer using your created Transport
// $mailer = Swift_Mailer::newInstance($transport);
// 
// 
// //Create the message
// $message = Swift_Message::newInstance()
// 
//   //Give the message a subject
//   ->setSubject("Manual Order Processed")
// 
//   //Set the From address with an associative array
//   ->setFrom( $senderEmail)
//   //Set the From address with an associative array
//   ->setSender($senderEmail )
// 
//   //Set the To addresses with an associative array
//   ->setTo(array('rich@tastyclouds.com'))
//   ->setReplyTo($senderEmail)
//   //Give it a body
//   ->setBody($emailBody)
// 
//   //And optionally an alternative body
//   //->addPart('<q>Here is the message itself</q>', 'text/html')
// 
//   //Optionally add any attachments
//   //->attach(Swift_Attachment::fromPath('my-document.pdf'))
//   ;




//Send the message
// $result = $mailer->send($message);
// 
// if ($result){
// 	 echo "result=success";
// }else{
// 	 fail('Error sending email');
// }


?>