<?php

if (!class_exists("OrderStatus_GetByKey", false)) 
{
class OrderStatus_GetByKey
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
