<?php

if (!class_exists("Cart_ClearCart", false)) 
{
class Cart_ClearCart
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
