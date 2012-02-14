<?php

if (!class_exists("Cart_RemoveCartItem", false)) 
{
class Cart_RemoveCartItem
{

  /**
   * 
   * @var int $piSessionID
   * @access public
   */
  public $piSessionID;

  /**
   * 
   * @var int $piCartItemID
   * @access public
   */
  public $piCartItemID;

  /**
   * 
   * @param int $piSessionID
   * @param int $piCartItemID
   * @access public
   */
  public function __construct($piSessionID, $piCartItemID)
  {
    $this->piSessionID = $piSessionID;
    $this->piCartItemID = $piCartItemID;
  }

}

}
