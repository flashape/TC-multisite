<?php

if (!class_exists("ShippingMethod_Clone", false)) 
{
class ShippingMethod_Clone
{

  /**
   * 
   * @var int $pishippingMethodID
   * @access public
   */
  public $pishippingMethodID;

  /**
   * 
   * @param int $pishippingMethodID
   * @access public
   */
  public function __construct($pishippingMethodID)
  {
    $this->pishippingMethodID = $pishippingMethodID;
  }

}

}
