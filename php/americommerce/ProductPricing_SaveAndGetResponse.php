<?php

if (!class_exists("ProductPricing_SaveAndGetResponse", false)) 
{
class ProductPricing_SaveAndGetResponse
{

  /**
   * 
   * @var ProductPricingTrans $ProductPricing_SaveAndGetResult
   * @access public
   */
  public $ProductPricing_SaveAndGetResult;

  /**
   * 
   * @param ProductPricingTrans $ProductPricing_SaveAndGetResult
   * @access public
   */
  public function __construct($ProductPricing_SaveAndGetResult)
  {
    $this->ProductPricing_SaveAndGetResult = $ProductPricing_SaveAndGetResult;
  }

}

}
