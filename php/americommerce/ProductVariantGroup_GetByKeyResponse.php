<?php

if (!class_exists("ProductVariantGroup_GetByKeyResponse", false)) 
{
class ProductVariantGroup_GetByKeyResponse
{

  /**
   * 
   * @var ProductVariantGroupTrans $ProductVariantGroup_GetByKeyResult
   * @access public
   */
  public $ProductVariantGroup_GetByKeyResult;

  /**
   * 
   * @param ProductVariantGroupTrans $ProductVariantGroup_GetByKeyResult
   * @access public
   */
  public function __construct($ProductVariantGroup_GetByKeyResult)
  {
    $this->ProductVariantGroup_GetByKeyResult = $ProductVariantGroup_GetByKeyResult;
  }

}

}
