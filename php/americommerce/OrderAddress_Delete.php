<?php

if (!class_exists("OrderAddress_Delete", false)) 
{
class OrderAddress_Delete
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
