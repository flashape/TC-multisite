<?php

if (!class_exists("Order_GetByCustomerIDPreFilledResponse", false)) 
{
class Order_GetByCustomerIDPreFilledResponse
{

  /**
   * 
   * @var array $Order_GetByCustomerIDPreFilledResult
   * @access public
   */
  public $Order_GetByCustomerIDPreFilledResult;

  /**
   * 
   * @param array $Order_GetByCustomerIDPreFilledResult
   * @access public
   */
  public function __construct($Order_GetByCustomerIDPreFilledResult)
  {
    $this->Order_GetByCustomerIDPreFilledResult = $Order_GetByCustomerIDPreFilledResult;
  }

}

}
