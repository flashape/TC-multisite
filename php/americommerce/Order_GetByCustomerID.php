<?php

if (!class_exists("Order_GetByCustomerID", false)) 
{
class Order_GetByCustomerID
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
