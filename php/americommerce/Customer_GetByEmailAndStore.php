<?php

if (!class_exists("Customer_GetByEmailAndStore", false)) 
{
class Customer_GetByEmailAndStore
{

  /**
   * 
   * @var string $psEmailAddress
   * @access public
   */
  public $psEmailAddress;

  /**
   * 
   * @var int $piStoreID
   * @access public
   */
  public $piStoreID;

  /**
   * 
   * @param string $psEmailAddress
   * @param int $piStoreID
   * @access public
   */
  public function __construct($psEmailAddress, $piStoreID)
  {
    $this->psEmailAddress = $psEmailAddress;
    $this->piStoreID = $piStoreID;
  }

}

}
