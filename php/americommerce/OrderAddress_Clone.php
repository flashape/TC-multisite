<?php

if (!class_exists("OrderAddress_Clone", false)) 
{
class OrderAddress_Clone
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
