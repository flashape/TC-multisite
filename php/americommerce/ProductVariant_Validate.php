<?php

if (!class_exists("ProductVariant_Validate", false)) 
{
class ProductVariant_Validate
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
