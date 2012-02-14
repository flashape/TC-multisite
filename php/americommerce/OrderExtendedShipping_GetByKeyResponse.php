<?php

if (!class_exists("OrderExtendedShipping_GetByKeyResponse", false)) 
{
class OrderExtendedShipping_GetByKeyResponse
{

  /**
   * 
   * @var OrderExtendedShippingTrans $OrderExtendedShipping_GetByKeyResult
   * @access public
   */
  public $OrderExtendedShipping_GetByKeyResult;

  /**
   * 
   * @param OrderExtendedShippingTrans $OrderExtendedShipping_GetByKeyResult
   * @access public
   */
  public function __construct($OrderExtendedShipping_GetByKeyResult)
  {
    $this->OrderExtendedShipping_GetByKeyResult = $OrderExtendedShipping_GetByKeyResult;
  }

}

}
