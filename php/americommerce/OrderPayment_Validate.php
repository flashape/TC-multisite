<?php

if (!class_exists("OrderPayment_Validate", false)) 
{
class OrderPayment_Validate
{

  /**
   * 
   * @var OrderPaymentTrans $poOrderPaymentTrans
   * @access public
   */
  public $poOrderPaymentTrans;

  /**
   * 
   * @param OrderPaymentTrans $poOrderPaymentTrans
   * @access public
   */
  public function __construct($poOrderPaymentTrans)
  {
    $this->poOrderPaymentTrans = $poOrderPaymentTrans;
  }

}

}
