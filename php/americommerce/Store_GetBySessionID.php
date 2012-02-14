<?php

if (!class_exists("Store_GetBySessionID", false)) 
{
class Store_GetBySessionID
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
