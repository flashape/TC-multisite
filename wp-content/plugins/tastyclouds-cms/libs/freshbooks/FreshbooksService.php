<?php

class FreshbooksService
{
	public $api;
	
	public $domain = 'tastyclouds';
	public $token = 'fb42853c7885e871b83a64d7c27c499b';
	
	function __construct()
	{
		require_once('FreshBooksRequest.php');
		// Setup the login credentials
		FreshBooksRequest::init($this->domain, $this->token);
	}
	
	
	public function createNewClient($client){
		$fbCreateClientRequest = new FreshBooksRequest('client.create');
		$fbCreateClientRequest->post(array('client' => $client));
		$fbCreateClientRequest->request();
		
		if($fbCreateClientRequest->success())
		{
			$result = self::createResult('New Client created successfully',true, array('response'=>$fbCreateClientRequest->getResponse()));
		}
		else
		{
			$result = self::createResult('Error creating new client',false, array('response'=>$fbCreateClientRequest->getResponse(), 'error'=>$fbCreateClientRequest->getError()));			
		}
		
		return $result;
	}
		
	
	public function createInvoice($invoice){
		$request = new FreshBooksRequest('invoice.create');
		$request->post(array('invoice' => $invoice));
		$request->request();
		
		if($request->success())
		{
			$result = self::createResult('New invoice created successfully',true, array('response'=>$request->getResponse()));
		}
		else
		{
			$result = self::createResult('Error creating new invoice',false, array('response'=>$request->getResponse(), 'error'=>$request->getError()));			
		}
		
		return $result;
	}
	
			
	
	public function createEstimate($estimate){
		$request = new FreshBooksRequest('estimate.create');
		$request->post(array('estimate' => $estimate));
		$request->request();
		
		if($request->success())
		{
			$result = self::createResult('New estimate created successfully',true, array('response'=>$request->getResponse()));
		}
		else
		{
			$result = self::createResult('Error creating new estimate',false, array('response'=>$request->getResponse(), 'error'=>$request->getError()));			
		}
		
		return $result;
	}
	
	
	public function createPaymentForInvoice($payment){
		$request = new FreshBooksRequest('payment.create');
		$request->post(array('payment' => $payment));
		$request->request();
		
		if($request->success())
		{
			$result = self::createResult('New payment created successfully',true, array('response'=>$request->getResponse()));
		}
		else
		{
			$result = self::createResult('Error creating new payment',false, array('response'=>$request->getResponse(), 'error'=>$request->getError()));			
		}
		
		return $result;
	}
	
	
	public function sendInvoiceByEmail($emailInfo){
		$request = new FreshBooksRequest('invoice.sendByEmail');
		//$request->post(array('emailInfo' => $emailInfo));
		$request->post($emailInfo);
		$request->request();
		
		if($request->success())
		{
			$result = self::createResult('Invoice emailed successfully',true, array('response'=>$request->getResponse()));
		}
		else
		{
			$result = self::createResult('Error emailing invoice',false, array('response'=>$request->getResponse(), 'error'=>$request->getError()));			
		}
		
		return $result;
	}
		
	
	public function sendEstimateByEmail($emailInfo){
		$request = new FreshBooksRequest('estimate.sendByEmail');
		//$request->post(array('emailInfo' => $emailInfo));
		$request->post($emailInfo);
		$request->request();
		
		if($request->success())
		{
			$result = self::createResult('Estimate emailed successfully',true, array('response'=>$request->getResponse()));
		}
		else
		{
			$result = self::createResult('Error emailing estimate',false, array('response'=>$request->getResponse(), 'error'=>$request->getError()));			
		}
		
		return $result;
	}
	
	private static function createResult($message = '', $isSuccess = true, $arrayToMerge = null){
		$result = array('success'=>$isSuccess, 'message'=>$message);
		if (!empty($arrayToMerge)){
			$result = array_merge($result, $arrayToMerge);
		}
		
		return $result;
	}
}

?>