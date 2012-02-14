<?php

if (!class_exists("OrderShipping_SaveAndGetResponse", false)) 
{
class OrderShipping_SaveAndGetResponse
{

  /**
   * 
   * @var OrderShippingTrans $OrderShipping_SaveAndGetResult
   * @access public
   */
  public $OrderShipping_SaveAndGetResult;

  /**
   * 
   * @param OrderShippingTrans $OrderShipping_SaveAndGetResult
   * @access public
   */
  public function __construct($OrderShipping_SaveAndGetResult)
  {
    $this->OrderShipping_SaveAndGetResult = $OrderShipping_SaveAndGetResult;
  }

}

}
