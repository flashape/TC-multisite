<?php

if (!class_exists("Order_GetByCustomerIDResponse", false)) 
{
class Order_GetByCustomerIDResponse
{

  /**
   * 
   * @var array $Order_GetByCustomerIDResult
   * @access public
   */
  public $Order_GetByCustomerIDResult;

  /**
   * 
   * @param array $Order_GetByCustomerIDResult
   * @access public
   */
  public function __construct($Order_GetByCustomerIDResult)
  {
    $this->Order_GetByCustomerIDResult = $Order_GetByCustomerIDResult;
  }

}

}
