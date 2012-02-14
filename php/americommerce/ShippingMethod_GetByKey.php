<?php

if (!class_exists("ShippingMethod_GetByKey", false)) 
{
class ShippingMethod_GetByKey
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
