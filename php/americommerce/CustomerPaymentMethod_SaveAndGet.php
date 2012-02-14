<?php

if (!class_exists("CustomerPaymentMethod_SaveAndGet", false)) 
{
class CustomerPaymentMethod_SaveAndGet
{

  /**
   * 
   * @var CustomerPaymentMethodTrans $poCustomerPaymentMethodTrans
   * @access public
   */
  public $poCustomerPaymentMethodTrans;

  /**
   * 
   * @param CustomerPaymentMethodTrans $poCustomerPaymentMethodTrans
   * @access public
   */
  public function __construct($poCustomerPaymentMethodTrans)
  {
    $this->poCustomerPaymentMethodTrans = $poCustomerPaymentMethodTrans;
  }

}

}
