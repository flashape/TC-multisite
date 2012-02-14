<?php

if (!class_exists("ShippingRateAdjustments_Validate", false)) 
{
class ShippingRateAdjustments_Validate
{

  /**
   * 
   * @var ShippingRateAdjustmentsTrans $poShippingRateAdjustmentsTrans
   * @access public
   */
  public $poShippingRateAdjustmentsTrans;

  /**
   * 
   * @param ShippingRateAdjustmentsTrans $poShippingRateAdjustmentsTrans
   * @access public
   */
  public function __construct($poShippingRateAdjustmentsTrans)
  {
    $this->poShippingRateAdjustmentsTrans = $poShippingRateAdjustmentsTrans;
  }

}

}
