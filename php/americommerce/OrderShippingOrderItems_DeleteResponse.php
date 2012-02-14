<?php

if (!class_exists("OrderShippingOrderItems_DeleteResponse", false)) 
{
class OrderShippingOrderItems_DeleteResponse
{

  /**
   * 
   * @var boolean $OrderShippingOrderItems_DeleteResult
   * @access public
   */
  public $OrderShippingOrderItems_DeleteResult;

  /**
   * 
   * @param boolean $OrderShippingOrderItems_DeleteResult
   * @access public
   */
  public function __construct($OrderShippingOrderItems_DeleteResult)
  {
    $this->OrderShippingOrderItems_DeleteResult = $OrderShippingOrderItems_DeleteResult;
  }

}

}
