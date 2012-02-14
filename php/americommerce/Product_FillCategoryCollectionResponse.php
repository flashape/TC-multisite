<?php

if (!class_exists("Product_FillCategoryCollectionResponse", false)) 
{
class Product_FillCategoryCollectionResponse
{

  /**
   * 
   * @var ProductTrans $Product_FillCategoryCollectionResult
   * @access public
   */
  public $Product_FillCategoryCollectionResult;

  /**
   * 
   * @param ProductTrans $Product_FillCategoryCollectionResult
   * @access public
   */
  public function __construct($Product_FillCategoryCollectionResult)
  {
    $this->Product_FillCategoryCollectionResult = $Product_FillCategoryCollectionResult;
  }

}

}
