<?php

if (!class_exists("Store_ApplyCustomFieldValuesResponse", false)) 
{
class Store_ApplyCustomFieldValuesResponse
{

  /**
   * 
   * @var StoreTrans $Store_ApplyCustomFieldValuesResult
   * @access public
   */
  public $Store_ApplyCustomFieldValuesResult;

  /**
   * 
   * @param StoreTrans $Store_ApplyCustomFieldValuesResult
   * @access public
   */
  public function __construct($Store_ApplyCustomFieldValuesResult)
  {
    $this->Store_ApplyCustomFieldValuesResult = $Store_ApplyCustomFieldValuesResult;
  }

}

}
