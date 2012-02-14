<?php

if (!class_exists("Order_GetCountByOrderStatus", false)) 
{
class Order_GetCountByOrderStatus
{

  /**
   * 
   * @var int $piOrderStatusID
   * @access public
   */
  public $piOrderStatusID;

  /**
   * 
   * @param int $piOrderStatusID
   * @access public
   */
  public function __construct($piOrderStatusID)
  {
    $this->piOrderStatusID = $piOrderStatusID;
  }

}

}
