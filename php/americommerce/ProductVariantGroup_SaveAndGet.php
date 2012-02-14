<?php

if (!class_exists("ProductVariantGroup_SaveAndGet", false)) 
{
class ProductVariantGroup_SaveAndGet
{

  /**
   * 
   * @var ProductVariantGroupTrans $poProductVariantGroupTrans
   * @access public
   */
  public $poProductVariantGroupTrans;

  /**
   * 
   * @param ProductVariantGroupTrans $poProductVariantGroupTrans
   * @access public
   */
  public function __construct($poProductVariantGroupTrans)
  {
    $this->poProductVariantGroupTrans = $poProductVariantGroupTrans;
  }

}

}
