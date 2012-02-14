<?php

if (!class_exists("Product_FillProductVariantCollection", false)) 
{
class Product_FillProductVariantCollection
{

  /**
   * 
   * @var ProductTrans $poProductTrans
   * @access public
   */
  public $poProductTrans;

  /**
   * 
   * @param ProductTrans $poProductTrans
   * @access public
   */
  public function __construct($poProductTrans)
  {
    $this->poProductTrans = $poProductTrans;
  }

}

}
