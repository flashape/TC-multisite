<?php

if (!class_exists("CustomerPaymentMethod_FillCustomerPaymentFieldCollection", false)) 
{
class CustomerPaymentMethod_FillCustomerPaymentFieldCollection
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
