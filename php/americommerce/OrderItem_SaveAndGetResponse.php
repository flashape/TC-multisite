<?php

if (!class_exists("OrderItem_SaveAndGetResponse", false)) 
{
class OrderItem_SaveAndGetResponse
{

  /**
   * 
   * @var OrderItemTrans $OrderItem_SaveAndGetResult
   * @access public
   */
  public $OrderItem_SaveAndGetResult;

  /**
   * 
   * @param OrderItemTrans $OrderItem_SaveAndGetResult
   * @access public
   */
  public function __construct($OrderItem_SaveAndGetResult)
  {
    $this->OrderItem_SaveAndGetResult = $OrderItem_SaveAndGetResult;
  }

}

}
