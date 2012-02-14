<?php

if (!class_exists("Order_GetByEditDateRangeForCurrentStorePreFilled", false)) 
{
class Order_GetByEditDateRangeForCurrentStorePreFilled
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
   * @param dateTime $pdtStartDateTime
   * @param dateTime $pdtEndDateTime
   * @access public
   */
  public function __construct($pdtStartDateTime, $pdtEndDateTime)
  {
    $this->pdtStartDateTime = $pdtStartDateTime;
    $this->pdtEndDateTime = $pdtEndDateTime;
  }

}

}
