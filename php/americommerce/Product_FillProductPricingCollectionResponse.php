<?php

if (!class_exists("Product_FillProductPricingCollectionResponse", false)) 
{
class Product_FillProductPricingCollectionResponse
{

  /**
   * 
   * @var ProductTrans $Product_FillProductPricingCollectionResult
   * @access public
   */
  public $Product_FillProductPricingCollectionResult;

  /**
   * 
   * @param ProductTrans $Product_FillProductPricingCollectionResult
   * @access public
   */
  public function __construct($Product_FillProductPricingCollectionResult)
  {
    $this->Product_FillProductPricingCollectionResult = $Product_FillProductPricingCollectionResult;
  }

}

}
