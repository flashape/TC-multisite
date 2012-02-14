<?php

if (!class_exists("ProductPricing_Clone", false)) 
{
class ProductPricing_Clone
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
