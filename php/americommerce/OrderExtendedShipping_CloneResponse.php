<?php

if (!class_exists("OrderExtendedShipping_CloneResponse", false)) 
{
class OrderExtendedShipping_CloneResponse
{

  /**
   * 
   * @var OrderExtendedShippingTrans $OrderExtendedShipping_CloneResult
   * @access public
   */
  public $OrderExtendedShipping_CloneResult;

  /**
   * 
   * @param OrderExtendedShippingTrans $OrderExtendedShipping_CloneResult
   * @access public
   */
  public function __construct($OrderExtendedShipping_CloneResult)
  {
    $this->OrderExtendedShipping_CloneResult = $OrderExtendedShipping_CloneResult;
  }

}

}
