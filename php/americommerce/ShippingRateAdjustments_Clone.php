<?php

if (!class_exists("ShippingRateAdjustments_Clone", false)) 
{
class ShippingRateAdjustments_Clone
{

  /**
   * 
   * @var int $piID
   * @access public
   */
  public $piID;

  /**
   * 
   * @param int $piID
   * @access public
   */
  public function __construct($piID)
  {
    $this->piID = $piID;
  }

}

}
