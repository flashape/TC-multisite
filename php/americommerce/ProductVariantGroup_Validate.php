<?php

if (!class_exists("ProductVariantGroup_Validate", false)) 
{
class ProductVariantGroup_Validate
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
