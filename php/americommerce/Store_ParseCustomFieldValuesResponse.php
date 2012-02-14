<?php

if (!class_exists("Store_ParseCustomFieldValuesResponse", false)) 
{
class Store_ParseCustomFieldValuesResponse
{

  /**
   * 
   * @var array $Store_ParseCustomFieldValuesResult
   * @access public
   */
  public $Store_ParseCustomFieldValuesResult;

  /**
   * 
   * @param array $Store_ParseCustomFieldValuesResult
   * @access public
   */
  public function __construct($Store_ParseCustomFieldValuesResult)
  {
    $this->Store_ParseCustomFieldValuesResult = $Store_ParseCustomFieldValuesResult;
  }

}

}
