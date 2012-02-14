<?php

if (!class_exists("Order_GetRecentlyChangedOrdersResponse", false)) 
{
class Order_GetRecentlyChangedOrdersResponse
{

  /**
   * 
   * @var Order_GetRecentlyChangedOrdersResult $Order_GetRecentlyChangedOrdersResult
   * @access public
   */
  public $Order_GetRecentlyChangedOrdersResult;

  /**
   * 
   * @param Order_GetRecentlyChangedOrdersResult $Order_GetRecentlyChangedOrdersResult
   * @access public
   */
  public function __construct($Order_GetRecentlyChangedOrdersResult)
  {
    $this->Order_GetRecentlyChangedOrdersResult = $Order_GetRecentlyChangedOrdersResult;
  }

}

}
