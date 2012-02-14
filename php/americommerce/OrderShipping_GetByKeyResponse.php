<?php

if (!class_exists("OrderShipping_GetByKeyResponse", false)) 
{
class OrderShipping_GetByKeyResponse
{

  /**
   * 
   * @var OrderShippingTrans $OrderShipping_GetByKeyResult
   * @access public
   */
  public $OrderShipping_GetByKeyResult;

  /**
   * 
   * @param OrderShippingTrans $OrderShipping_GetByKeyResult
   * @access public
   */
  public function __construct($OrderShipping_GetByKeyResult)
  {
    $this->OrderShipping_GetByKeyResult = $OrderShipping_GetByKeyResult;
  }

}

}
