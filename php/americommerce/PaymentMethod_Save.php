<?php

if (!class_exists("PaymentMethod_Save", false)) 
{
class PaymentMethod_Save
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
