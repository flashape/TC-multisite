<?php

if (!class_exists("ProductVariantGroup_Save", false)) 
{
class ProductVariantGroup_Save
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
