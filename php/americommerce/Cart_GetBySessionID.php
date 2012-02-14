<?php

if (!class_exists("Cart_GetBySessionID", false)) 
{
class Cart_GetBySessionID
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
