<?php

if (!class_exists("Order_GetByCustomerIDPreFilled", false)) 
{
class Order_GetByCustomerIDPreFilled
{

  /**
   * 
   * @var int $piCustomerID
   * @access public
   */
  public $piCustomerID;

  /**
   * 
   * @param int $piCustomerID
   * @access public
   */
  public function __construct($piCustomerID)
  {
    $this->piCustomerID = $piCustomerID;
  }

}

}
