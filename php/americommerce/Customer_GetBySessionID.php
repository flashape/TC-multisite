<?php

if (!class_exists("Customer_GetBySessionID", false)) 
{
class Customer_GetBySessionID
{

  /**
   * 
   * @var int $piSessionID
   * @access public
   */
  public $piSessionID;

  /**
   * 
   * @param int $piSessionID
   * @access public
   */
  public function __construct($piSessionID)
  {
    $this->piSessionID = $piSessionID;
  }

}

}
