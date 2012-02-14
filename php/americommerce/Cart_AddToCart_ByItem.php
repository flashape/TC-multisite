<?php

if (!class_exists("Cart_AddToCart_ByItem", false)) 
{
class Cart_AddToCart_ByItem
{

  /**
   * 
   * @var int $piSessionID
   * @access public
   */
  public $piSessionID;

  /**
   * 
   * @var int $piItemID
   * @access public
   */
  public $piItemID;

  /**
   * 
   * @var int $piQuantity
   * @access public
   */
  public $piQuantity;

  /**
   * 
   * @param int $piSessionID
   * @param int $piItemID
   * @param int $piQuantity
   * @access public
   */
  public function __construct($piSessionID, $piItemID, $piQuantity)
  {
    $this->piSessionID = $piSessionID;
    $this->piItemID = $piItemID;
    $this->piQuantity = $piQuantity;
  }

}

}
