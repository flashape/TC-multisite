<?php

if (!class_exists("ShippingRateAdjustments_GetByKeyResponse", false)) 
{
class ShippingRateAdjustments_GetByKeyResponse
{

  /**
   * 
   * @var ShippingRateAdjustmentsTrans $ShippingRateAdjustments_GetByKeyResult
   * @access public
   */
  public $ShippingRateAdjustments_GetByKeyResult;

  /**
   * 
   * @param ShippingRateAdjustmentsTrans $ShippingRateAdjustments_GetByKeyResult
   * @access public
   */
  public function __construct($ShippingRateAdjustments_GetByKeyResult)
  {
    $this->ShippingRateAdjustments_GetByKeyResult = $ShippingRateAdjustments_GetByKeyResult;
  }

}

}
