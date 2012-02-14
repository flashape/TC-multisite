<?php

if (!class_exists("PaymentMethod_FillPaymentMethodFieldCollection", false)) 
{
class PaymentMethod_FillPaymentMethodFieldCollection
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
