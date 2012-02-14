<?php

if (!class_exists("ProductVariant_Save", false)) 
{
class ProductVariant_Save
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
