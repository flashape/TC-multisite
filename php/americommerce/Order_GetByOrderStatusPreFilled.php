<?php

if (!class_exists("Order_GetByOrderStatusPreFilled", false)) 
{
class Order_GetByOrderStatusPreFilled
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
