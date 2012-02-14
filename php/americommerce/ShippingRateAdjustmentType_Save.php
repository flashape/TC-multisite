<?php

if (!class_exists("ShippingRateAdjustmentType_Save", false)) 
{
class ShippingRateAdjustmentType_Save
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
