<?php

if (!class_exists("ShippingRateAdjustmentType_Validate", false)) 
{
class ShippingRateAdjustmentType_Validate
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
