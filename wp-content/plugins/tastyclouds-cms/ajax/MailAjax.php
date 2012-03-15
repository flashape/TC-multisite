<?php

class MailAjax
{
	
	function __construct()
	{
	}
	
	public function getMailForContact(){
		
		$contactID = $_POST['contactID'];
		
		// this is the code from panalo_mail.php, 
		// copied here to get it into git
		
		
		// $mailboxesToSearch = array('INBOX', '[Gmail]/Sent Mail');
		// $hostname = '{imap.gmail.com:993/imap/ssl}INBOX';
		// //$hostname = '{imap.gmail.com:993/imap/ssl}[Gmail]/All Mail';
		// 
		// $users = array(
		// 		array('user'=> 'rich@tastyclouds.com', 'pass'=>'m1ll10n$', 'name'=>'Rich'),
		// 		array('user'=> 'nina@tastyclouds.com', 'pass'=>'sycamore', 'name'=>'Nina'),
		// 		array('user'=> 'gia@tastyclouds.com', 'pass'=>'tcjan022012', 'name'=>'Gia'),
		// 		array('user'=> 'carmen@tastyclouds.com', 'pass'=>'tccarmen829', 'name'=>'Carmen'),
		// 		array('user'=> 'jessica@tastyclouds.com', 'pass'=>'tcjessica900', 'name'=>'Jessica'),
		// 	);
		// 
		// 
		// 
		// 
		// /* connect to gmail */
		// // $hostname = '{imap.gmail.com:993/imap/ssl}INBOX';
		// // $username = 'rich@tastyclouds.com';
		// // $pass = 'm1ll10n$';
		// 
		// //$contactID = $_GET['contactID'];
		// 
		// 
		// function getEmails($emails, $mailbox, $name){
		// 	global $conn;
		// 	/* for every email... */
		// 	$items = array();
		// 
		// 	foreach($emails as $email_number) {
		// 		$item = array();
		// 
		// 
		// 		/* get information specific to this email */
		// 		//$overview = imap_fetch_overview($imap,$email_number,0);
		// 		$overview = imap_fetch_overview($conn,$email_number,FT_UID);
		// 		$item['overview'] = $overview[0];
		// 
		// 		//$body = imap_body($imap, $email_number, FT_UID|FT_PEEK);
		// 
		// 
		// 		// ()Root Message Part (multipart/related)
		// 		// (1) The text parts of the message (multipart/alternative)
		// 		// (1.1) Plain text version (text/plain)
		// 		// (1.2) HTML version (text/html)
		// 		// (2) The background stationary (image/gif)
		// 
		// 		$body = imap_fetchbody($conn, $email_number, "1.1", FT_UID|FT_PEEK);
		// 		if ($body == "") {
		// 		    $body = imap_fetchbody($conn, $email_number, "1", FT_UID|FT_PEEK);
		// 		}
		// 
		// 		//$body = trim(substr(quoted_printable_decode($body), 0, 100));
		// 		$body = trim(quoted_printable_decode($body));
		// 		$item['body'] = $body;
		// 		$item['udate'] = $item['overview']->udate;
		// 		$item['mailbox'] = $mailbox;
		// 		$item['name'] = $name;
		// 		$items[] = $item;
		// 
		// 
		// 	}
		// 
		// 	return $items;
		// 
		// }
		// 
		// 
		// 
		// function udate_mail_sort($a,$b) {
		//      return $a['udate'] > $b['udate'];
		// }
		// 
		// 
		// $result;
		// 
		// //$userResults = array();
		// 
		// $allEmails = array();
		// $errors = array();
		// 
		// foreach($users as $user){
		// 	$username = $user['user'];
		// 	$pass = $user['pass'];
		// 
		// 	$conn = imap_open($hostname,$username,$pass, OP_READONLY);
		// 
		// 	if (!$conn){
		// 		$errors[$username][] = json_encode('Cannot connect to mailbox: ' . imap_last_error());
		// 	}else{
		// 
		// 		$inboxSearchResult = imap_search($conn,'ALL FROM nina@tastyclouds.com SINCE "25 January 2012"', SE_UID);
		// 
		// 		if($inboxSearchResult) { 
		// 			$allEmails = array_merge($allEmails, getEmails($inboxSearchResult, 'inbox', $user['name']));
		// 		}else{
		// 			$errors[$username][] = imap_last_error();
		// 		}
		// 
		// 
		// 		imap_gc($conn, IMAP_GC_ELT|IMAP_GC_ENV|IMAP_GC_TEXTS);
		// 
		// 		if (imap_reopen($conn, "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail", OP_READONLY) ){
		// 			$sentSearchResult = imap_search($conn,'TO nina@tastyclouds.com SINCE "25 January 2012"', SE_UID);
		// 
		// 			if($sentSearchResult) { 
		// 				$allEmails = array_merge($allEmails, getEmails($sentSearchResult, 'sent', $user['name']));
		// 			}else{
		// 				$errors[$username][] = 'No Sent emails found';
		// 			}
		// 		}else{
		// 			$errors[$username][] =  imap_errors();
		// 		}
		// 
		// 
		// 		imap_gc($conn, IMAP_GC_ELT|IMAP_GC_ENV|IMAP_GC_TEXTS);
		// 
		// 
		// 		imap_close($conn);
		// 
		// 	}
		// 
		// 
		// 
		// 
		// }
		// 
		// usort($allEmails, "udate_mail_sort");
		// 
		// $result = json_encode(array('emails'=>$allEmails, 'errors'=>$errors));
		// 
		// echo $result;

		
		
		
		// This is for dev only.
		//On the live site, use the code above.
		
		
		$mailResult = wp_remote_get('http://www.tastyclouds.com/php/panalo_mail.php', array('timeout'=>240));
		error_log("mailResult:");
		error_log(var_export($mailResult, 1));
		$emails = json_decode(wp_remote_retrieve_body($mailResult));
		// error_log("emails:");
		// error_log(var_export($emails, 1));
		
		$result = AjaxUtils::createResult('Get Mail result : ', true, array('mailResult'=>$mailResult, 'emails'=>$emails) );
		AjaxUtils::returnJson($result);
		
		
	}

}	
?>