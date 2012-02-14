<?php

if (!class_exists("ProductVariant_CloneResponse", false)) 
{
class ProductVariant_CloneResponse
{

  /**
   * 
   * @var ProductVariantTrans $ProductVariant_CloneResult
   * @access public
   */
  public $ProductVariant_CloneResult;

  /**
   * 
   * @param ProductVariantTrans $ProductVariant_CloneResult
   * @access public
   */
  public function __construct($ProductVariant_CloneResult)
  {
    $this->ProductVariant_CloneResult = $ProductVariant_CloneResult;
  }

}

}
