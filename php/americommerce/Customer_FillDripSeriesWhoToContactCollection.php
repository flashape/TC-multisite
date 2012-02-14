<?php

if (!class_exists("Customer_FillDripSeriesWhoToContactCollection", false)) 
{
class Customer_FillDripSeriesWhoToContactCollection
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
