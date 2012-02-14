<?php

if (!class_exists("Order_GetByOrderStatusPreFilledResponse", false)) 
{
class Order_GetByOrderStatusPreFilledResponse
{

  /**
   * 
   * @var array $Order_GetByOrderStatusPreFilledResult
   * @access public
   */
  public $Order_GetByOrderStatusPreFilledResult;

  /**
   * 
   * @param array $Order_GetByOrderStatusPreFilledResult
   * @access public
   */
  public function __construct($Order_GetByOrderStatusPreFilledResult)
  {
    $this->Order_GetByOrderStatusPreFilledResult = $Order_GetByOrderStatusPreFilledResult;
  }

}

}
