<?php

if (!class_exists("ShippingRateAdjustments_Save", false)) 
{
class ShippingRateAdjustments_Save
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
