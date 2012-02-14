<?php

if (!class_exists("OrderPayment_SaveAndGet", false)) 
{
class OrderPayment_SaveAndGet
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
