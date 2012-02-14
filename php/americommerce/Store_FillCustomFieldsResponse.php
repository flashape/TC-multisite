<?php

if (!class_exists("Store_FillCustomFieldsResponse", false)) 
{
class Store_FillCustomFieldsResponse
{

  /**
   * 
   * @var StoreTrans $Store_FillCustomFieldsResult
   * @access public
   */
  public $Store_FillCustomFieldsResult;

  /**
   * 
   * @param StoreTrans $Store_FillCustomFieldsResult
   * @access public
   */
  public function __construct($Store_FillCustomFieldsResult)
  {
    $this->Store_FillCustomFieldsResult = $Store_FillCustomFieldsResult;
  }

}

}
