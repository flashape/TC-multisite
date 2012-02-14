<?php

if (!class_exists("OrderStatus_Clone", false)) 
{
class OrderStatus_Clone
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
