<?php

if (!class_exists("Product_ParseCustomFieldValuesResponse", false)) 
{
class Product_ParseCustomFieldValuesResponse
{

  /**
   * 
   * @var array $Product_ParseCustomFieldValuesResult
   * @access public
   */
  public $Product_ParseCustomFieldValuesResult;

  /**
   * 
   * @param array $Product_ParseCustomFieldValuesResult
   * @access public
   */
  public function __construct($Product_ParseCustomFieldValuesResult)
  {
    $this->Product_ParseCustomFieldValuesResult = $Product_ParseCustomFieldValuesResult;
  }

}

}
