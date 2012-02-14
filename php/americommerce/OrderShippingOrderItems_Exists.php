<?php

if (!class_exists("OrderShippingOrderItems_Exists", false)) 
{
class OrderShippingOrderItems_Exists
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
