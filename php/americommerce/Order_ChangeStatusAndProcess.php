<?php

if (!class_exists("Order_ChangeStatusAndProcess", false)) 
{
class Order_ChangeStatusAndProcess
{

  /**
   * 
   * @var int $piOrderID
   * @access public
   */
  public $piOrderID;

  /**
   * 
   * @var int $piOrderStatusID
   * @access public
   */
  public $piOrderStatusID;

  /**
   * 
   * @param int $piOrderID
   * @param int $piOrderStatusID
   * @access public
   */
  public function __construct($piOrderID, $piOrderStatusID)
  {
    $this->piOrderID = $piOrderID;
    $this->piOrderStatusID = $piOrderStatusID;
  }

}

}
