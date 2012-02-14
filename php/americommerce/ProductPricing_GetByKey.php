<?php

if (!class_exists("ProductPricing_GetByKey", false)) 
{
class ProductPricing_GetByKey
{

  /**
   * 
   * @var int $piProductPricingID
   * @access public
   */
  public $piProductPricingID;

  /**
   * 
   * @param int $piProductPricingID
   * @access public
   */
  public function __construct($piProductPricingID)
  {
    $this->piProductPricingID = $piProductPricingID;
  }

}

}
