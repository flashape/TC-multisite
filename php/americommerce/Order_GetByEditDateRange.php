<?php

if (!class_exists("Order_GetByEditDateRange", false)) 
{
class Order_GetByEditDateRange
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
