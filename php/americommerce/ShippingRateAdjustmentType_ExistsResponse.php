<?php

if (!class_exists("ShippingRateAdjustmentType_ExistsResponse", false)) 
{
class ShippingRateAdjustmentType_ExistsResponse
{

  /**
   * 
   * @var boolean $ShippingRateAdjustmentType_ExistsResult
   * @access public
   */
  public $ShippingRateAdjustmentType_ExistsResult;

  /**
   * 
   * @param boolean $ShippingRateAdjustmentType_ExistsResult
   * @access public
   */
  public function __construct($ShippingRateAdjustmentType_ExistsResult)
  {
    $this->ShippingRateAdjustmentType_ExistsResult = $ShippingRateAdjustmentType_ExistsResult;
  }

}

}
