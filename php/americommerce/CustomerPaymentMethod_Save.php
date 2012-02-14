<?php

if (!class_exists("CustomerPaymentMethod_Save", false)) 
{
class CustomerPaymentMethod_Save
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
