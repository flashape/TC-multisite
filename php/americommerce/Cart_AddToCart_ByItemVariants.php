<?php

if (!class_exists("Cart_AddToCart_ByItemVariants", false)) 
{
class Cart_AddToCart_ByItemVariants
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
   * @var array $poSelectedVariantIDs
   * @access public
   */
  public $poSelectedVariantIDs;

  /**
   * 
   * @param int $piSessionID
   * @param int $piItemID
   * @param int $piQuantity
   * @param array $poSelectedVariantIDs
   * @access public
   */
  public function __construct($piSessionID, $piItemID, $piQuantity, $poSelectedVariantIDs)
  {
    $this->piSessionID = $piSessionID;
    $this->piItemID = $piItemID;
    $this->piQuantity = $piQuantity;
    $this->poSelectedVariantIDs = $poSelectedVariantIDs;
  }

}

}
