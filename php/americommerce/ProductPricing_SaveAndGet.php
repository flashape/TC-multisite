<?php

if (!class_exists("ProductPricing_SaveAndGet", false)) 
{
class ProductPricing_SaveAndGet
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
