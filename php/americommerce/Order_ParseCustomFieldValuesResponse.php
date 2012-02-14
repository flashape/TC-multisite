<?php

if (!class_exists("Order_ParseCustomFieldValuesResponse", false)) 
{
class Order_ParseCustomFieldValuesResponse
{

  /**
   * 
   * @var array $Order_ParseCustomFieldValuesResult
   * @access public
   */
  public $Order_ParseCustomFieldValuesResult;

  /**
   * 
   * @param array $Order_ParseCustomFieldValuesResult
   * @access public
   */
  public function __construct($Order_ParseCustomFieldValuesResult)
  {
    $this->Order_ParseCustomFieldValuesResult = $Order_ParseCustomFieldValuesResult;
  }

}

}
