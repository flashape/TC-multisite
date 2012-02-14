<?php

if (!class_exists("ProductVariantGroup_FillProductVariantCollection", false)) 
{
class ProductVariantGroup_FillProductVariantCollection
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
