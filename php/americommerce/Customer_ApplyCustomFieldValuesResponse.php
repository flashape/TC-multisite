<?php

if (!class_exists("Customer_ApplyCustomFieldValuesResponse", false)) 
{
class Customer_ApplyCustomFieldValuesResponse
{

  /**
   * 
   * @var CustomerTrans $Customer_ApplyCustomFieldValuesResult
   * @access public
   */
  public $Customer_ApplyCustomFieldValuesResult;

  /**
   * 
   * @param CustomerTrans $Customer_ApplyCustomFieldValuesResult
   * @access public
   */
  public function __construct($Customer_ApplyCustomFieldValuesResult)
  {
    $this->Customer_ApplyCustomFieldValuesResult = $Customer_ApplyCustomFieldValuesResult;
  }

}

}
