<?php

if (!class_exists("Address_GetByKey", false)) 
{
class Address_GetByKey
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
