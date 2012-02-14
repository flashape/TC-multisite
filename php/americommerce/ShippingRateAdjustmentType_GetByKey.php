<?php

if (!class_exists("ShippingRateAdjustmentType_GetByKey", false)) 
{
class ShippingRateAdjustmentType_GetByKey
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
