<?php

if (!class_exists("Customer_FillCustomFieldsResponse", false)) 
{
class Customer_FillCustomFieldsResponse
{

  /**
   * 
   * @var CustomerTrans $Customer_FillCustomFieldsResult
   * @access public
   */
  public $Customer_FillCustomFieldsResult;

  /**
   * 
   * @param CustomerTrans $Customer_FillCustomFieldsResult
   * @access public
   */
  public function __construct($Customer_FillCustomFieldsResult)
  {
    $this->Customer_FillCustomFieldsResult = $Customer_FillCustomFieldsResult;
  }

}

}
