<?php

if (!class_exists("ProductVariant_GetByVariantNameResponse", false)) 
{
class ProductVariant_GetByVariantNameResponse
{

  /**
   * 
   * @var ProductVariantTrans $ProductVariant_GetByVariantNameResult
   * @access public
   */
  public $ProductVariant_GetByVariantNameResult;

  /**
   * 
   * @param ProductVariantTrans $ProductVariant_GetByVariantNameResult
   * @access public
   */
  public function __construct($ProductVariant_GetByVariantNameResult)
  {
    $this->ProductVariant_GetByVariantNameResult = $ProductVariant_GetByVariantNameResult;
  }

}

}
