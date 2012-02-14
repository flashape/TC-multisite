<?php

if (!class_exists("ShippingMethod_Delete", false)) 
{
class ShippingMethod_Delete
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
