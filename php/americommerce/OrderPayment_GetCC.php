<?php

if (!class_exists("OrderPayment_GetCC", false)) 
{
class OrderPayment_GetCC
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
