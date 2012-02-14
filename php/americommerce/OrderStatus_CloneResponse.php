<?php

if (!class_exists("OrderStatus_CloneResponse", false)) 
{
class OrderStatus_CloneResponse
{

  /**
   * 
   * @var OrderStatusTrans $OrderStatus_CloneResult
   * @access public
   */
  public $OrderStatus_CloneResult;

  /**
   * 
   * @param OrderStatusTrans $OrderStatus_CloneResult
   * @access public
   */
  public function __construct($OrderStatus_CloneResult)
  {
    $this->OrderStatus_CloneResult = $OrderStatus_CloneResult;
  }

}

}
