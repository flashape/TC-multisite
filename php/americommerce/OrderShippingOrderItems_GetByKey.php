<?php

if (!class_exists("OrderShippingOrderItems_GetByKey", false)) 
{
class OrderShippingOrderItems_GetByKey
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
