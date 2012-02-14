<?php

if (!class_exists("ProductVariant_SaveAndGet", false)) 
{
class ProductVariant_SaveAndGet
{

  /**
   * 
   * @var ProductVariantTrans $poProductVariantTrans
   * @access public
   */
  public $poProductVariantTrans;

  /**
   * 
   * @param ProductVariantTrans $poProductVariantTrans
   * @access public
   */
  public function __construct($poProductVariantTrans)
  {
    $this->poProductVariantTrans = $poProductVariantTrans;
  }

}

}
