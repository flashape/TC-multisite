<?php

class UserAjax
{
	
	function __construct()
	{
	}
	
	public function validateNewUserEmail(){
		$origEmail = $_POST['email'];
		$sanitizedEmail = sanitize_email($origEmail);
		
		if ($sanitizedEmail == $origEmail){
			if( email_exists($sanitizedEmail) ){
				$result = AjaxUtils::createResult('Email already exists.', false);
			}else{
				$result = AjaxUtils::createResult('Email is valid and available.', true);
			}
		}else{
			$result = AjaxUtils::createResult('Invalid email.', false);
			AjaxUtils::returnJson($result);
		}

		
		AjaxUtils::returnJson($result);
		
		
	}

}	
?>