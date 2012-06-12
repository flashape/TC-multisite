<?php

/**
* 
*/
class PaymentProxy
{
	
	function __construct()
	{
		
	}
	
	
	public static function insertNew($data){
		$paymentID = null;
		
		if( $data['use_post'] ){
			$paymentType = $_POST['payment_type'];
			$paymentAmount = $_POST['payment_amount'];
			$paymentNote = $_POST['payment_note'];
		}else{
			// if not getting values from post, $data is expected to have a 'paymentModel' property
			
			$paymentType = $data['paymentModel']['paymentType'];
			$paymentAmount = $data['paymentModel']['paymentAmount'];
			$paymentNote = $data['paymentModel']['paymentNote'];
		}

		$orderID = $data['orderID'];


		if (!empty($paymentType) && !empty($paymentAmount)){
			$model = array(
				'paymentType' => $paymentType,
				'paymentAmount' => $paymentAmount,
				'paymentNote' => $paymentNote,
			);
		   $payment = array(
				'post_title' => 'Payment For Order ID '.$orderID .'(via '.$paymentType.') : '.$paymentAmount,
				'post_content' => "$paymentType payment for orderID  $orderID",
				'post_status' => 'publish',
				'post_type' => "tc_payment"
		             );

			$paymentID = wp_insert_post($payment);

			if ($paymentID > 0){
				update_post_meta($paymentID, 'paymentModel', $model);
			}
		}

		return $paymentID;
	}
}

?>