<?php

if (!class_exists("Order_GetByOrderStatusResponse", false)) 
{
class Order_GetByOrderStatusResponse
{

  /**
   * 
   * @var array $Order_GetByOrderStatusResult
   * @access public
   */
  public $Order_GetByOrderStatusResult;

  /**
   * 
   * @param array $Order_GetByOrderStatusResult
   * @access public
   */
  public function __construct($Order_GetByOrderStatusResult)
  {
    $this->Order_GetByOrderStatusResult = $Order_GetByOrderStatusResult;
  }

}

}
