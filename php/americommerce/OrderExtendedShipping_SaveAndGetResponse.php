<?php

if (!class_exists("OrderExtendedShipping_SaveAndGetResponse", false)) 
{
class OrderExtendedShipping_SaveAndGetResponse
{

  /**
   * 
   * @var OrderExtendedShippingTrans $OrderExtendedShipping_SaveAndGetResult
   * @access public
   */
  public $OrderExtendedShipping_SaveAndGetResult;

  /**
   * 
   * @param OrderExtendedShippingTrans $OrderExtendedShipping_SaveAndGetResult
   * @access public
   */
  public function __construct($OrderExtendedShipping_SaveAndGetResult)
  {
    $this->OrderExtendedShipping_SaveAndGetResult = $OrderExtendedShipping_SaveAndGetResult;
  }

}

}
