<?php

if (!class_exists("OrderStatus_Delete", false)) 
{
class OrderStatus_Delete
{

  /**
   * 
   * @var int $piorderStatusID
   * @access public
   */
  public $piorderStatusID;

  /**
   * 
   * @param int $piorderStatusID
   * @access public
   */
  public function __construct($piorderStatusID)
  {
    $this->piorderStatusID = $piorderStatusID;
  }

}

}
