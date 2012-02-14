<?php

if (!class_exists("ShippingRateAdjustments_SaveResponse", false)) 
{
class ShippingRateAdjustments_SaveResponse
{

  /**
   * 
   * @var boolean $ShippingRateAdjustments_SaveResult
   * @access public
   */
  public $ShippingRateAdjustments_SaveResult;

  /**
   * 
   * @param boolean $ShippingRateAdjustments_SaveResult
   * @access public
   */
  public function __construct($ShippingRateAdjustments_SaveResult)
  {
    $this->ShippingRateAdjustments_SaveResult = $ShippingRateAdjustments_SaveResult;
  }

}

}
