<?php

if (!class_exists("Product_FillAttributeCollectionResponse", false)) 
{
class Product_FillAttributeCollectionResponse
{

  /**
   * 
   * @var ProductTrans $Product_FillAttributeCollectionResult
   * @access public
   */
  public $Product_FillAttributeCollectionResult;

  /**
   * 
   * @param ProductTrans $Product_FillAttributeCollectionResult
   * @access public
   */
  public function __construct($Product_FillAttributeCollectionResult)
  {
    $this->Product_FillAttributeCollectionResult = $Product_FillAttributeCollectionResult;
  }

}

}
