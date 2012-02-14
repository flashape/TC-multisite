<?php

if (!class_exists("Cart_UpdateCartItem", false)) 
{
class Cart_UpdateCartItem
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
   * @var int $piNewQuantity
   * @access public
   */
  public $piNewQuantity;

  /**
   * 
   * @param int $piSessionID
   * @param int $piCartItemID
   * @param int $piNewQuantity
   * @access public
   */
  public function __construct($piSessionID, $piCartItemID, $piNewQuantity)
  {
    $this->piSessionID = $piSessionID;
    $this->piCartItemID = $piCartItemID;
    $this->piNewQuantity = $piNewQuantity;
  }

}

}
