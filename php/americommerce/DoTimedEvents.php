<?php

if (!class_exists("DoTimedEvents", false)) 
{
class DoTimedEvents
{

  /**
   * 
   * @var int $piStoreID
   * @access public
   */
  public $piStoreID;

  /**
   * 
   * @param int $piStoreID
   * @access public
   */
  public function __construct($piStoreID)
  {
    $this->piStoreID = $piStoreID;
  }

}

}
