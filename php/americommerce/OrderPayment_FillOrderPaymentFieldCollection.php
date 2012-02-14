<?php

if (!class_exists("OrderPayment_FillOrderPaymentFieldCollection", false)) 
{
class OrderPayment_FillOrderPaymentFieldCollection
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
