<?php

if (!class_exists("ShippingRateAdjustmentType_Exists", false)) 
{
class ShippingRateAdjustmentType_Exists
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
