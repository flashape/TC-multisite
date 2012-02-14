<?php

if (!class_exists("ProductPricing_CloneResponse", false)) 
{
class ProductPricing_CloneResponse
{

  /**
   * 
   * @var ProductPricingTrans $ProductPricing_CloneResult
   * @access public
   */
  public $ProductPricing_CloneResult;

  /**
   * 
   * @param ProductPricingTrans $ProductPricing_CloneResult
   * @access public
   */
  public function __construct($ProductPricing_CloneResult)
  {
    $this->ProductPricing_CloneResult = $ProductPricing_CloneResult;
  }

}

}
