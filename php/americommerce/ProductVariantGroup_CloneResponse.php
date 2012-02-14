<?php

if (!class_exists("ProductVariantGroup_CloneResponse", false)) 
{
class ProductVariantGroup_CloneResponse
{

  /**
   * 
   * @var ProductVariantGroupTrans $ProductVariantGroup_CloneResult
   * @access public
   */
  public $ProductVariantGroup_CloneResult;

  /**
   * 
   * @param ProductVariantGroupTrans $ProductVariantGroup_CloneResult
   * @access public
   */
  public function __construct($ProductVariantGroup_CloneResult)
  {
    $this->ProductVariantGroup_CloneResult = $ProductVariantGroup_CloneResult;
  }

}

}
