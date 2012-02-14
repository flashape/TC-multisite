<?php

if (!class_exists("ShippingRateAdjustments_DeleteResponse", false)) 
{
class ShippingRateAdjustments_DeleteResponse
{

  /**
   * 
   * @var boolean $ShippingRateAdjustments_DeleteResult
   * @access public
   */
  public $ShippingRateAdjustments_DeleteResult;

  /**
   * 
   * @param boolean $ShippingRateAdjustments_DeleteResult
   * @access public
   */
  public function __construct($ShippingRateAdjustments_DeleteResult)
  {
    $this->ShippingRateAdjustments_DeleteResult = $ShippingRateAdjustments_DeleteResult;
  }

}

}
