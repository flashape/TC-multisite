<?php

if (!class_exists("CustomerPaymentField_Save", false)) 
{
class CustomerPaymentField_Save
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
