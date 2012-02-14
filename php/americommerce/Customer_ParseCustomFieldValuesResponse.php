<?php

if (!class_exists("Customer_ParseCustomFieldValuesResponse", false)) 
{
class Customer_ParseCustomFieldValuesResponse
{

  /**
   * 
   * @var array $Customer_ParseCustomFieldValuesResult
   * @access public
   */
  public $Customer_ParseCustomFieldValuesResult;

  /**
   * 
   * @param array $Customer_ParseCustomFieldValuesResult
   * @access public
   */
  public function __construct($Customer_ParseCustomFieldValuesResult)
  {
    $this->Customer_ParseCustomFieldValuesResult = $Customer_ParseCustomFieldValuesResult;
  }

}

}
