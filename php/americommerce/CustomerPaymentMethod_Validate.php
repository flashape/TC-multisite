<?php

if (!class_exists("CustomerPaymentMethod_Validate", false)) 
{
class CustomerPaymentMethod_Validate
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
