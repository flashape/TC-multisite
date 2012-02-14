<?php

if (!class_exists("Address_Clone", false)) 
{
class Address_Clone
{

  /**
   * 
   * @var int $pishippingAddressID
   * @access public
   */
  public $pishippingAddressID;

  /**
   * 
   * @param int $pishippingAddressID
   * @access public
   */
  public function __construct($pishippingAddressID)
  {
    $this->pishippingAddressID = $pishippingAddressID;
  }

}

}
