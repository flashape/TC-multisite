<?php

if (!class_exists("OrderPayment_SetCC", false)) 
{
class OrderPayment_SetCC
{

  /**
   * 
   * @var OrderPaymentTrans $poOrderPaymentTrans
   * @access public
   */
  public $poOrderPaymentTrans;

  /**
   * 
   * @var string $psCreditCardNumber
   * @access public
   */
  public $psCreditCardNumber;

  /**
   * 
   * @param OrderPaymentTrans $poOrderPaymentTrans
   * @param string $psCreditCardNumber
   * @access public
   */
  public function __construct($poOrderPaymentTrans, $psCreditCardNumber)
  {
    $this->poOrderPaymentTrans = $poOrderPaymentTrans;
    $this->psCreditCardNumber = $psCreditCardNumber;
  }

}

}
