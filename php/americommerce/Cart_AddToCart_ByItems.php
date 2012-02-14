<?php

if (!class_exists("Cart_AddToCart_ByItems", false)) 
{
class Cart_AddToCart_ByItems
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
   * @param int $piSessionID
   * @param array $piItemIDs
   * @param array $piQuantities
   * @access public
   */
  public function __construct($piSessionID, $piItemIDs, $piQuantities)
  {
    $this->piSessionID = $piSessionID;
    $this->piItemIDs = $piItemIDs;
    $this->piQuantities = $piQuantities;
  }

}

}
