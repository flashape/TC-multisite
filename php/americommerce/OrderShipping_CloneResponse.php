<?php

if (!class_exists("OrderShipping_CloneResponse", false)) 
{
class OrderShipping_CloneResponse
{

  /**
   * 
   * @var OrderShippingTrans $OrderShipping_CloneResult
   * @access public
   */
  public $OrderShipping_CloneResult;

  /**
   * 
   * @param OrderShippingTrans $OrderShipping_CloneResult
   * @access public
   */
  public function __construct($OrderShipping_CloneResult)
  {
    $this->OrderShipping_CloneResult = $OrderShipping_CloneResult;
  }

}

}
