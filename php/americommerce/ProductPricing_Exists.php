<?php

if (!class_exists("ProductPricing_Exists", false)) 
{
class ProductPricing_Exists
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
