<?php

if (!class_exists("ProductPricing_Delete", false)) 
{
class ProductPricing_Delete
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
