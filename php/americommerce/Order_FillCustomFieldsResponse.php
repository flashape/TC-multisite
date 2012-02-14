<?php

if (!class_exists("Order_FillCustomFieldsResponse", false)) 
{
class Order_FillCustomFieldsResponse
{

  /**
   * 
   * @var OrderTrans $Order_FillCustomFieldsResult
   * @access public
   */
  public $Order_FillCustomFieldsResult;

  /**
   * 
   * @param OrderTrans $Order_FillCustomFieldsResult
   * @access public
   */
  public function __construct($Order_FillCustomFieldsResult)
  {
    $this->Order_FillCustomFieldsResult = $Order_FillCustomFieldsResult;
  }

}

}
