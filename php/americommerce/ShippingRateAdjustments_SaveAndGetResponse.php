<?php

if (!class_exists("ShippingRateAdjustments_SaveAndGetResponse", false)) 
{
class ShippingRateAdjustments_SaveAndGetResponse
{

  /**
   * 
   * @var ShippingRateAdjustmentsTrans $ShippingRateAdjustments_SaveAndGetResult
   * @access public
   */
  public $ShippingRateAdjustments_SaveAndGetResult;

  /**
   * 
   * @param ShippingRateAdjustmentsTrans $ShippingRateAdjustments_SaveAndGetResult
   * @access public
   */
  public function __construct($ShippingRateAdjustments_SaveAndGetResult)
  {
    $this->ShippingRateAdjustments_SaveAndGetResult = $ShippingRateAdjustments_SaveAndGetResult;
  }

}

}
