<?php

if (!class_exists("OrderStatus_Exists", false)) 
{
class OrderStatus_Exists
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
