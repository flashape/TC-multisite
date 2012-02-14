<?php

if (!class_exists("OrderItem_CloneResponse", false)) 
{
class OrderItem_CloneResponse
{

  /**
   * 
   * @var OrderItemTrans $OrderItem_CloneResult
   * @access public
   */
  public $OrderItem_CloneResult;

  /**
   * 
   * @param OrderItemTrans $OrderItem_CloneResult
   * @access public
   */
  public function __construct($OrderItem_CloneResult)
  {
    $this->OrderItem_CloneResult = $OrderItem_CloneResult;
  }

}

}
