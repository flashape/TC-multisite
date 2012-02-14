<?php

if (!class_exists("ProductPricing_Save", false)) 
{
class ProductPricing_Save
{

  /**
   * 
   * @var ProductPricingTrans $poProductPricingTrans
   * @access public
   */
  public $poProductPricingTrans;

  /**
   * 
   * @param ProductPricingTrans $poProductPricingTrans
   * @access public
   */
  public function __construct($poProductPricingTrans)
  {
    $this->poProductPricingTrans = $poProductPricingTrans;
  }

}

}
