<?php

if (!class_exists("Order_GetByEditDateRangeResponse", false)) 
{
class Order_GetByEditDateRangeResponse
{

  /**
   * 
   * @var array $Order_GetByEditDateRangeResult
   * @access public
   */
  public $Order_GetByEditDateRangeResult;

  /**
   * 
   * @param array $Order_GetByEditDateRangeResult
   * @access public
   */
  public function __construct($Order_GetByEditDateRangeResult)
  {
    $this->Order_GetByEditDateRangeResult = $Order_GetByEditDateRangeResult;
  }

}

}
