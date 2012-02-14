<?php

if (!class_exists("ShippingRateAdjustments_SaveAndGet", false)) 
{
class ShippingRateAdjustments_SaveAndGet
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
