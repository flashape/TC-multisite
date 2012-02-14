<?php

if (!class_exists("ProductVariant_GetByKeyResponse", false)) 
{
class ProductVariant_GetByKeyResponse
{

  /**
   * 
   * @var ProductVariantTrans $ProductVariant_GetByKeyResult
   * @access public
   */
  public $ProductVariant_GetByKeyResult;

  /**
   * 
   * @param ProductVariantTrans $ProductVariant_GetByKeyResult
   * @access public
   */
  public function __construct($ProductVariant_GetByKeyResult)
  {
    $this->ProductVariant_GetByKeyResult = $ProductVariant_GetByKeyResult;
  }

}

}
