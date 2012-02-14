<?php

if (!class_exists("Cart_Exists", false)) 
{
class Cart_Exists
{

  /**
   * 
   * @var int $piID
   * @access public
   */
  public $piID;

  /**
   * 
   * @param int $piID
   * @access public
   */
  public function __construct($piID)
  {
    $this->piID = $piID;
  }

}

}
