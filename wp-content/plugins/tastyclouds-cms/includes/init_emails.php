<?php

add_action( 'tc_followup_reminder_cron_hook', 'tc_send_followup_reminder_email', 10, 3);



function tc_send_followup_assigned_email($data){
	$user = new WP_user($data['userID']);
	$postID = $data['postID'];
	// error_log(var_export($data,1));
	// error_log(var_export($user,1));
	//wp_mail($user->user_email, 'An Follow-Up has been assigned to you', 'A new follow-up has been assigned to you, click here to view: ');
	
	$link = "http://tastyclouds.com/wp-admin/post.php?post={$postID}&action=edit";
	
	wp_mail('rich@tastyclouds.com', "A Follow-Up has been assigned to you", "A new follow-up has been assigned to you  : \n\n".$data['activityModel']->description ."\n\nClick here to view: $link");
	
}


function tc_send_followup_reminder_email($userID, $model, $postID){
	error_log('tc_send_followup_reminder_email ');
	$user = new WP_user($userID);
	//$postID = $data['postID'];
	
	//error_log(var_export($userID,1));
	
	$link = "http://tastyclouds.com/wp-admin/post.php?post={$postID}&action=edit";
	
	wp_mail('rich@tastyclouds.com', "Reminder: A Follow-Up has been assigned to you", "You have an upcoming follow-up : \n\n".$model->description ."\n\nClick here to view: $link");
	
}


function tc_send_task_assigned_email($data){
	$user = new WP_user($data['userID']);
	$postID = $data['postID'];
	
	//$user = new WP_user($userID);
	//error_log(var_export($user,1));
	//wp_mail($user->user_email, 'An Follow-Up has been assigned to you', 'A new follow-up has been assigned to you, click here to view: ');
	$model = $data['activityModel'];
	$link = "http://tastyclouds.com/wp-admin/post.php?post={$postID}&action=edit";
	
	$title = $model->title;
	$description = $model->description;
	
	//wp_mail('rich@tastyclouds.com', "Task Assigned : $title", "A task has been assigned to you  : \n\nTitle: $title\n\nDescription:\n$description\n\nClick here to view: $link");
	
	
	require_once SWIFTMAIL_REQUIRED_FILE;


	//Create the Transport
	$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
	  ->setUsername('smpttest@f1fd.com')
	  ->setPassword('m1ll10n$')
	  ;
	$toEmail = 'rich@tastyclouds.com';
	$senderEmail = "notifcations@tastyclouds.com";

	$emailBody = <<<ENDOFBODY
A task has been assigned to you  : \n\nTitle: $title\n\nDescription:\n$description\n\nClick here to view: $link



ENDOFBODY;





	//$transport = Swift_SendmailTransport::newInstance();


	//Create the Mailer using your created Transport
	$mailer = Swift_Mailer::newInstance($transport);


	//Create the message
	$message = Swift_Message::newInstance()

	  //Give the message a subject
	  ->setSubject("Task Assigned : $title")

	  //Set the From address with an associative array
	  ->setFrom( $senderEmail)
	  //Set the From address with an associative array
	  ->setSender($senderEmail )

	  //Set the To addresses with an associative array
	  ->setTo(array($toEmail))
	  //->setReplyTo($senderEmail)

	  //->addCc('chelcie@tastyclouds.com')
	  // ->addBcc('rich@tastyclouds.com')
	  // ->addBcc('TastyClouds@TastyClouds.solve360.com')
	  //Give it a body
	  ->setBody($emailBody)

	  //And optionally an alternative body
	  //->addPart('<q>Here is the message itself</q>', 'text/html')

	  //Optionally add any attachments
	  //->attach(Swift_Attachment::fromPath('my-document.pdf'))
	  ;




	//Send the message
	$result = $mailer->send($message);

	if ($result){
		 error_log("swiftmail result=success");
	}else{
		 error_log('Error sending task assigned email');
	}
	
	
}



?>