<?php

if (!class_exists("Order_ApplyCustomFieldValuesResponse", false)) 
{
class Order_ApplyCustomFieldValuesResponse
{

  /**
   * 
   * @var OrderTrans $Order_ApplyCustomFieldValuesResult
   * @access public
   */
  public $Order_ApplyCustomFieldValuesResult;

  /**
   * 
   * @param OrderTrans $Order_ApplyCustomFieldValuesResult
   * @access public
   */
  public function __construct($Order_ApplyCustomFieldValuesResult)
  {
    $this->Order_ApplyCustomFieldValuesResult = $Order_ApplyCustomFieldValuesResult;
  }

}

}
