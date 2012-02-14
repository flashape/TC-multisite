<?php

if (!class_exists("Order_GetByDateRangeAndStoreIDResponse", false)) 
{
class Order_GetByDateRangeAndStoreIDResponse
{

  /**
   * 
   * @var array $Order_GetByDateRangeAndStoreIDResult
   * @access public
   */
  public $Order_GetByDateRangeAndStoreIDResult;

  /**
   * 
   * @param array $Order_GetByDateRangeAndStoreIDResult
   * @access public
   */
  public function __construct($Order_GetByDateRangeAndStoreIDResult)
  {
    $this->Order_GetByDateRangeAndStoreIDResult = $Order_GetByDateRangeAndStoreIDResult;
  }

}

}
