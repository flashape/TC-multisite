<?php

if (!class_exists("Order_GetRecentlyChangedOrders", false)) 
{
class Order_GetRecentlyChangedOrders
{

  /**
   * 
   * @var dateTime $dtEditedSince
   * @access public
   */
  public $dtEditedSince;

  /**
   * 
   * @param dateTime $dtEditedSince
   * @access public
   */
  public function __construct($dtEditedSince)
  {
    $this->dtEditedSince = $dtEditedSince;
  }

}

}
