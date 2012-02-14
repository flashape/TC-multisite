<?php

if (!class_exists("Customer_FillCustomFields", false)) 
{
class Customer_FillCustomFields
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
