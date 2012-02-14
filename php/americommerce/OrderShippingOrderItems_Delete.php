<?php

if (!class_exists("OrderShippingOrderItems_Delete", false)) 
{
class OrderShippingOrderItems_Delete
{

  /**
   * 
   * @var int $piOrderShippingOrderItemsID
   * @access public
   */
  public $piOrderShippingOrderItemsID;

  /**
   * 
   * @param int $piOrderShippingOrderItemsID
   * @access public
   */
  public function __construct($piOrderShippingOrderItemsID)
  {
    $this->piOrderShippingOrderItemsID = $piOrderShippingOrderItemsID;
  }

}

}
