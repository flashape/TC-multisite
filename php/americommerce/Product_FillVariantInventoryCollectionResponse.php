<?php

if (!class_exists("Product_FillVariantInventoryCollectionResponse", false)) 
{
class Product_FillVariantInventoryCollectionResponse
{

  /**
   * 
   * @var ProductTrans $Product_FillVariantInventoryCollectionResult
   * @access public
   */
  public $Product_FillVariantInventoryCollectionResult;

  /**
   * 
   * @param ProductTrans $Product_FillVariantInventoryCollectionResult
   * @access public
   */
  public function __construct($Product_FillVariantInventoryCollectionResult)
  {
    $this->Product_FillVariantInventoryCollectionResult = $Product_FillVariantInventoryCollectionResult;
  }

}

}
