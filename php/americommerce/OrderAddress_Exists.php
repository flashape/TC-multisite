<?php

if (!class_exists("OrderAddress_Exists", false)) 
{
class OrderAddress_Exists
{

  /**
   * 
   * @var int $piorderAddressID
   * @access public
   */
  public $piorderAddressID;

  /**
   * 
   * @param int $piorderAddressID
   * @access public
   */
  public function __construct($piorderAddressID)
  {
    $this->piorderAddressID = $piorderAddressID;
  }

}

}
