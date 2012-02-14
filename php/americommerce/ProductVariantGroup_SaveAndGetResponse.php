<?php

if (!class_exists("ProductVariantGroup_SaveAndGetResponse", false)) 
{
class ProductVariantGroup_SaveAndGetResponse
{

  /**
   * 
   * @var ProductVariantGroupTrans $ProductVariantGroup_SaveAndGetResult
   * @access public
   */
  public $ProductVariantGroup_SaveAndGetResult;

  /**
   * 
   * @param ProductVariantGroupTrans $ProductVariantGroup_SaveAndGetResult
   * @access public
   */
  public function __construct($ProductVariantGroup_SaveAndGetResult)
  {
    $this->ProductVariantGroup_SaveAndGetResult = $ProductVariantGroup_SaveAndGetResult;
  }

}

}
