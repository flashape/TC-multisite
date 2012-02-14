<?php

if (!class_exists("ShippingRateAdjustmentType_SaveAndGet", false)) 
{
class ShippingRateAdjustmentType_SaveAndGet
{

  /**
   * 
   * @var ShippingRateAdjustmentTypeTrans $poShippingRateAdjustmentTypeTrans
   * @access public
   */
  public $poShippingRateAdjustmentTypeTrans;

  /**
   * 
   * @param ShippingRateAdjustmentTypeTrans $poShippingRateAdjustmentTypeTrans
   * @access public
   */
  public function __construct($poShippingRateAdjustmentTypeTrans)
  {
    $this->poShippingRateAdjustmentTypeTrans = $poShippingRateAdjustmentTypeTrans;
  }

}

}
