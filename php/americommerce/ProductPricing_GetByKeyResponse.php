<?php

if (!class_exists("ProductPricing_GetByKeyResponse", false)) 
{
class ProductPricing_GetByKeyResponse
{

  /**
   * 
   * @var ProductPricingTrans $ProductPricing_GetByKeyResult
   * @access public
   */
  public $ProductPricing_GetByKeyResult;

  /**
   * 
   * @param ProductPricingTrans $ProductPricing_GetByKeyResult
   * @access public
   */
  public function __construct($ProductPricing_GetByKeyResult)
  {
    $this->ProductPricing_GetByKeyResult = $ProductPricing_GetByKeyResult;
  }

}

}
