<?php

if (!class_exists("Customer_FillAddressCollection", false)) 
{
class Customer_FillAddressCollection
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
