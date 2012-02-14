<?php

    // version 2.1

    // All placeholders that are used such as {yourEmail@yourDomain.com}, {yourSolve360Token}, {ownership},
    // {categoryId}, {templateId} should be replaced with real values without the {} brackets.

    // REQUIRED Edit with the email address you login to Solve360 with
    define('USER', 'rich@tastyclouds.com');
    // REQUIRED Edit with token, Workspace > My Account > API Reference > API Token                             
    define('TOKEN', 'CdxfE8Z0n1g7a7e4tfB2r3mbd4KaBbW1qfe5ba25');  
    
    // Get request data
    $requestData = array();
    parse_str($_SERVER['QUERY_STRING'], $requestData);
    
    // Configure service gateway object
    require 'Solve360Service.php';
    $solve360Service = new Solve360Service(USER, TOKEN);
    
    //
    // Preparing the contact data
    //
    
    $contactData = array(
        'firstname'     => $requestData['firstname'],
        'lastname'      => $requestData['lastname'],
        'jobtitle'      => $requestData['jobtitle'],
        'businessemail' => $requestData['businessemail'],
        
        // OPTION Apply category tag(s) and set the owner for the contact to a group
        // You will find a list of IDs for your tags, groups and users in Workspace > My Account > API Reference
        // To enable this option, uncomment the following:

        /*        
        // Specify a different ownership i.e. share the item
        'ownership'     => {ownership},

        // Add categories
        'categories'    => array(
            'add' => array('category' => array({categoryId},{categoryId}))
        ),
        */        
        
    );
    
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
            USER, 
            'Error while adding contact to Solve360', 
            'Error: ' . $contact->errors->asXml()
        );
        die ('System error');
    } else {
        // Mail yourself the result
        mail(
            USER, 
            'Contact posted to Solve360', 
            'Contact "' . $contactName . '" https://secure.solve360.com/contact/' . $contactId . ' was posted to Solve360'
        );
    }
    
    //
    // OPTION Adding a activity 
    //
    
    /*
     * You can attach an activity to the contact you just posted
     * This example creates a Note, to enable this feature just uncomment the following request
     *      
     */    
    
    /*    
    // Preparing data for the note
    $noteData = array(
        'details' => nl2br($requestData['note'])
    );

    $note = $solve360Service->addActivity($contactId, 'note', $noteData);
    
    // Mail yourself the result
    mail(
        USER, 
        'Note was added to "' . $contactName . '" contact in Solve360',
        'Note with id ' . $note->id . ' was added to the contact with id ' . $contactId
    );
    // End of adding note activity
    */
 
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

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<h2>Result</h2>
<p>Thank you, <b><?php echo $contactName ?></b></p>
<p>Your information was saved.</p>
</body>
</html> 