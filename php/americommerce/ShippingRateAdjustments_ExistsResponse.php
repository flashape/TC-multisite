<?php

if (!class_exists("ShippingRateAdjustments_ExistsResponse", false)) 
{
class ShippingRateAdjustments_ExistsResponse
{

  /**
   * 
   * @var boolean $ShippingRateAdjustments_ExistsResult
   * @access public
   */
  public $ShippingRateAdjustments_ExistsResult;

  /**
   * 
   * @param boolean $ShippingRateAdjustments_ExistsResult
   * @access public
   */
  public function __construct($ShippingRateAdjustments_ExistsResult)
  {
    $this->ShippingRateAdjustments_ExistsResult = $ShippingRateAdjustments_ExistsResult;
  }

}

}
