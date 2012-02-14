<?php

if (!class_exists("Order_GetCountByOrderStatusResponse", false)) 
{
class Order_GetCountByOrderStatusResponse
{

  /**
   * 
   * @var int $Order_GetCountByOrderStatusResult
   * @access public
   */
  public $Order_GetCountByOrderStatusResult;

  /**
   * 
   * @param int $Order_GetCountByOrderStatusResult
   * @access public
   */
  public function __construct($Order_GetCountByOrderStatusResult)
  {
    $this->Order_GetCountByOrderStatusResult = $Order_GetCountByOrderStatusResult;
  }

}

}
