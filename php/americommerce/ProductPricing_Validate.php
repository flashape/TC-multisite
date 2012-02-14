<?php

if (!class_exists("ProductPricing_Validate", false)) 
{
class ProductPricing_Validate
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
