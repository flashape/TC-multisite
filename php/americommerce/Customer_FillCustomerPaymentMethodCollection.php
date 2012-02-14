<?php

if (!class_exists("Customer_FillCustomerPaymentMethodCollection", false)) 
{
class Customer_FillCustomerPaymentMethodCollection
{

  /**
   * 
   * @var CustomerTrans $poCustomerTrans
   * @access public
   */
  public $poCustomerTrans;

  /**
   * 
   * @param CustomerTrans $poCustomerTrans
   * @access public
   */
  public function __construct($poCustomerTrans)
  {
    $this->poCustomerTrans = $poCustomerTrans;
  }

}

}
