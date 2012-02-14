<?php

if (!class_exists("ShippingRateAdjustments_Delete", false)) 
{
class ShippingRateAdjustments_Delete
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
