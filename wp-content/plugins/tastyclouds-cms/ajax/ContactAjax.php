<?php

class ContactAjax
{
	
	function __construct()
	{
	}
	
	public function getContactById(){
		
		$contactID = $_POST['selectedContactID'];

		
		$contactModel = ContactProxy::getContactByID($contactID);
		
		$result = AjaxUtils::createResult('Get contact result : ', true, array('contactModel'=>$contactModel) );
		AjaxUtils::returnJson($result);
		
		
	}

}	
?>