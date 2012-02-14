<?php

if (!class_exists("ShippingMethod_Exists", false)) 
{
class ShippingMethod_Exists
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
