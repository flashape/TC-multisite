<?php

if (!class_exists("Product_FillCustomFieldsResponse", false)) 
{
class Product_FillCustomFieldsResponse
{

  /**
   * 
   * @var ProductTrans $Product_FillCustomFieldsResult
   * @access public
   */
  public $Product_FillCustomFieldsResult;

  /**
   * 
   * @param ProductTrans $Product_FillCustomFieldsResult
   * @access public
   */
  public function __construct($Product_FillCustomFieldsResult)
  {
    $this->Product_FillCustomFieldsResult = $Product_FillCustomFieldsResult;
  }

}

}
