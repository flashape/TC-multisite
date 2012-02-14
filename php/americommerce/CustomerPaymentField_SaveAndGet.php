<?php

if (!class_exists("CustomerPaymentField_SaveAndGet", false)) 
{
class CustomerPaymentField_SaveAndGet
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
