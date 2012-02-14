<?php

if (!class_exists("Order_SetShippingTrackingNumber", false)) 
{
class Order_SetShippingTrackingNumber
{

  /**
   * 
   * @var int $piOrderID
   * @access public
   */
  public $piOrderID;

  /**
   * 
   * @var int $piOrderItemIndex
   * @access public
   */
  public $piOrderItemIndex;

  /**
   * 
   * @var int $piOrderItemID
   * @access public
   */
  public $piOrderItemID;

  /**
   * 
   * @var int $piShippedQuantity
   * @access public
   */
  public $piShippedQuantity;

  /**
   * 
   * @var string $psTrackingNumber
   * @access public
   */
  public $psTrackingNumber;

  /**
   * 
   * @var dateTime $pdShippingDate
   * @access public
   */
  public $pdShippingDate;

  /**
   * 
   * @param int $piOrderID
   * @param int $piOrderItemIndex
   * @param int $piOrderItemID
   * @param int $piShippedQuantity
   * @param string $psTrackingNumber
   * @param dateTime $pdShippingDate
   * @access public
   */
  public function __construct($piOrderID, $piOrderItemIndex, $piOrderItemID, $piShippedQuantity, $psTrackingNumber, $pdShippingDate)
  {
    $this->piOrderID = $piOrderID;
    $this->piOrderItemIndex = $piOrderItemIndex;
    $this->piOrderItemID = $piOrderItemID;
    $this->piShippedQuantity = $piShippedQuantity;
    $this->psTrackingNumber = $psTrackingNumber;
    $this->pdShippingDate = $pdShippingDate;
  }

}

}
