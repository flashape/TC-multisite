<?php

if (!class_exists("Address_Delete", false)) 
{
class Address_Delete
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
