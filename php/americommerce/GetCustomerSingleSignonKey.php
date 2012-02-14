<?php

if (!class_exists("GetCustomerSingleSignonKey", false)) 
{
class GetCustomerSingleSignonKey
{

  /**
   * 
   * @var string $psEmailOrUsername
   * @access public
   */
  public $psEmailOrUsername;

  /**
   * 
   * @var string $psPassword
   * @access public
   */
  public $psPassword;

  /**
   * 
   * @var int $piStoreID
   * @access public
   */
  public $piStoreID;

  /**
   * 
   * @param string $psEmailOrUsername
   * @param string $psPassword
   * @param int $piStoreID
   * @access public
   */
  public function __construct($psEmailOrUsername, $psPassword, $piStoreID)
  {
    $this->psEmailOrUsername = $psEmailOrUsername;
    $this->psPassword = $psPassword;
    $this->piStoreID = $piStoreID;
  }

}

}
