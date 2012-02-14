<?php

if (!class_exists("Product_FillProductVariantCollectionResponse", false)) 
{
class Product_FillProductVariantCollectionResponse
{

  /**
   * 
   * @var ProductTrans $Product_FillProductVariantCollectionResult
   * @access public
   */
  public $Product_FillProductVariantCollectionResult;

  /**
   * 
   * @param ProductTrans $Product_FillProductVariantCollectionResult
   * @access public
   */
  public function __construct($Product_FillProductVariantCollectionResult)
  {
    $this->Product_FillProductVariantCollectionResult = $Product_FillProductVariantCollectionResult;
  }

}

}
