<?php

if (!class_exists("ShippingRateAdjustments_Exists", false)) 
{
class ShippingRateAdjustments_Exists
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
