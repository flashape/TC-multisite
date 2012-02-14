<?php

if (!class_exists("ShippingRateAdjustmentType_SaveResponse", false)) 
{
class ShippingRateAdjustmentType_SaveResponse
{

  /**
   * 
   * @var boolean $ShippingRateAdjustmentType_SaveResult
   * @access public
   */
  public $ShippingRateAdjustmentType_SaveResult;

  /**
   * 
   * @param boolean $ShippingRateAdjustmentType_SaveResult
   * @access public
   */
  public function __construct($ShippingRateAdjustmentType_SaveResult)
  {
    $this->ShippingRateAdjustmentType_SaveResult = $ShippingRateAdjustmentType_SaveResult;
  }

}

}
