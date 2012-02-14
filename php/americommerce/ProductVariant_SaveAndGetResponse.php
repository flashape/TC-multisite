<?php

if (!class_exists("ProductVariant_SaveAndGetResponse", false)) 
{
class ProductVariant_SaveAndGetResponse
{

  /**
   * 
   * @var ProductVariantTrans $ProductVariant_SaveAndGetResult
   * @access public
   */
  public $ProductVariant_SaveAndGetResult;

  /**
   * 
   * @param ProductVariantTrans $ProductVariant_SaveAndGetResult
   * @access public
   */
  public function __construct($ProductVariant_SaveAndGetResult)
  {
    $this->ProductVariant_SaveAndGetResult = $ProductVariant_SaveAndGetResult;
  }

}

}
