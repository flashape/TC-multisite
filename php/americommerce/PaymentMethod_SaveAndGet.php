<?php

if (!class_exists("PaymentMethod_SaveAndGet", false)) 
{
class PaymentMethod_SaveAndGet
{

  /**
   * 
   * @var PaymentMethodTrans $poPaymentMethodTrans
   * @access public
   */
  public $poPaymentMethodTrans;

  /**
   * 
   * @param PaymentMethodTrans $poPaymentMethodTrans
   * @access public
   */
  public function __construct($poPaymentMethodTrans)
  {
    $this->poPaymentMethodTrans = $poPaymentMethodTrans;
  }

}

}
