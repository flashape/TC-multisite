<?php

if (!class_exists("Customer_Validate", false)) 
{
class Customer_Validate
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
