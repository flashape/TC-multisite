<?php

if (!class_exists("Cart_PlaceOrderResponse", false)) 
{
class Cart_PlaceOrderResponse
{

  /**
   * 
   * @var PlaceOrderResponseTrans $Cart_PlaceOrderResult
   * @access public
   */
  public $Cart_PlaceOrderResult;

  /**
   * 
   * @param PlaceOrderResponseTrans $Cart_PlaceOrderResult
   * @access public
   */
  public function __construct($Cart_PlaceOrderResult)
  {
    $this->Cart_PlaceOrderResult = $Cart_PlaceOrderResult;
  }

}

}
