<?php

if (!class_exists("OrderShippingOrderItems_Clone", false)) 
{
class OrderShippingOrderItems_Clone
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
