<?php

if (!class_exists("CustomerPaymentField_Validate", false)) 
{
class CustomerPaymentField_Validate
{

  /**
   * 
   * @var CustomerPaymentFieldTrans $poCustomerPaymentFieldTrans
   * @access public
   */
  public $poCustomerPaymentFieldTrans;

  /**
   * 
   * @param CustomerPaymentFieldTrans $poCustomerPaymentFieldTrans
   * @access public
   */
  public function __construct($poCustomerPaymentFieldTrans)
  {
    $this->poCustomerPaymentFieldTrans = $poCustomerPaymentFieldTrans;
  }

}

}
