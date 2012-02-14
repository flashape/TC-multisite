<?php

if (!class_exists("OrderAddress_GetByKey", false)) 
{
class OrderAddress_GetByKey
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
