<?php

if (!class_exists("Order_GetByOrderStatus", false)) 
{
class Order_GetByOrderStatus
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
