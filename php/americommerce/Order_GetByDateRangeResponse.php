<?php

if (!class_exists("Order_GetByDateRangeResponse", false)) 
{
class Order_GetByDateRangeResponse
{

  /**
   * 
   * @var array $Order_GetByDateRangeResult
   * @access public
   */
  public $Order_GetByDateRangeResult;

  /**
   * 
   * @param array $Order_GetByDateRangeResult
   * @access public
   */
  public function __construct($Order_GetByDateRangeResult)
  {
    $this->Order_GetByDateRangeResult = $Order_GetByDateRangeResult;
  }

}

}
