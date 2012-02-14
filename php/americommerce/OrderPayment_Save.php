<?php

if (!class_exists("OrderPayment_Save", false)) 
{
class OrderPayment_Save
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
