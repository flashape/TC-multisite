<?php

if (!class_exists("Product_ApplyCustomFieldValuesResponse", false)) 
{
class Product_ApplyCustomFieldValuesResponse
{

  /**
   * 
   * @var ProductTrans $Product_ApplyCustomFieldValuesResult
   * @access public
   */
  public $Product_ApplyCustomFieldValuesResult;

  /**
   * 
   * @param ProductTrans $Product_ApplyCustomFieldValuesResult
   * @access public
   */
  public function __construct($Product_ApplyCustomFieldValuesResult)
  {
    $this->Product_ApplyCustomFieldValuesResult = $Product_ApplyCustomFieldValuesResult;
  }

}

}
