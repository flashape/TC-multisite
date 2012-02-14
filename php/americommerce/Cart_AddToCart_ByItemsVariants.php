<?php

if (!class_exists("Cart_AddToCart_ByItemsVariants", false)) 
{
class Cart_AddToCart_ByItemsVariants
{

  /**
   * 
   * @var int $piSessionID
   * @access public
   */
  public $piSessionID;

  /**
   * 
   * @var array $piItemIDs
   * @access public
   */
  public $piItemIDs;

  /**
   * 
   * @var array $piQuantities
   * @access public
   */
  public $piQuantities;

  /**
   * 
   * @var array $piSelectedVariantIDs
   * @access public
   */
  public $piSelectedVariantIDs;

  /**
   * 
   * @param int $piSessionID
   * @param array $piItemIDs
   * @param array $piQuantities
   * @param array $piSelectedVariantIDs
   * @access public
   */
  public function __construct($piSessionID, $piItemIDs, $piQuantities, $piSelectedVariantIDs)
  {
    $this->piSessionID = $piSessionID;
    $this->piItemIDs = $piItemIDs;
    $this->piQuantities = $piQuantities;
    $this->piSelectedVariantIDs = $piSelectedVariantIDs;
  }

}

}
