<?php

if (!class_exists("Order_GetLastOrderIDResponse", false)) 
{
class Order_GetLastOrderIDResponse
{

  /**
   * 
   * @var int $Order_GetLastOrderIDResult
   * @access public
   */
  public $Order_GetLastOrderIDResult;

  /**
   * 
   * @param int $Order_GetLastOrderIDResult
   * @access public
   */
  public function __construct($Order_GetLastOrderIDResult)
  {
    $this->Order_GetLastOrderIDResult = $Order_GetLastOrderIDResult;
  }

}

}
