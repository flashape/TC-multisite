<?php

if (!class_exists("Address_Exists", false)) 
{
class Address_Exists
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
