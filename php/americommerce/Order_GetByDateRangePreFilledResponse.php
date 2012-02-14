<?php

if (!class_exists("Order_GetByDateRangePreFilledResponse", false)) 
{
class Order_GetByDateRangePreFilledResponse
{

  /**
   * 
   * @var array $Order_GetByDateRangePreFilledResult
   * @access public
   */
  public $Order_GetByDateRangePreFilledResult;

  /**
   * 
   * @param array $Order_GetByDateRangePreFilledResult
   * @access public
   */
  public function __construct($Order_GetByDateRangePreFilledResult)
  {
    $this->Order_GetByDateRangePreFilledResult = $Order_GetByDateRangePreFilledResult;
  }

}

}
