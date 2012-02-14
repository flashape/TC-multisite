<?php

if (!class_exists("PaymentMethod_Validate", false)) 
{
class PaymentMethod_Validate
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
