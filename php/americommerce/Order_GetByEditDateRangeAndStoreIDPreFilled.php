<?php

if (!class_exists("Order_GetByEditDateRangeAndStoreIDPreFilled", false)) 
{
class Order_GetByEditDateRangeAndStoreIDPreFilled
{

  /**
   * 
   * @var dateTime $pdtStartDateTime
   * @access public
   */
  public $pdtStartDateTime;

  /**
   * 
   * @var dateTime $pdtEndDateTime
   * @access public
   */
  public $pdtEndDateTime;

  /**
   * 
   * @var int $piStoreID
   * @access public
   */
  public $piStoreID;

  /**
   * 
   * @param dateTime $pdtStartDateTime
   * @param dateTime $pdtEndDateTime
   * @param int $piStoreID
   * @access public
   */
  public function __construct($pdtStartDateTime, $pdtEndDateTime, $piStoreID)
  {
    $this->pdtStartDateTime = $pdtStartDateTime;
    $this->pdtEndDateTime = $pdtEndDateTime;
    $this->piStoreID = $piStoreID;
  }

}

}
