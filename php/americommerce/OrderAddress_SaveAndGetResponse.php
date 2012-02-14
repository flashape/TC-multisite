<?php

if (!class_exists("OrderAddress_SaveAndGetResponse", false)) 
{
class OrderAddress_SaveAndGetResponse
{

  /**
   * 
   * @var OrderAddressTrans $OrderAddress_SaveAndGetResult
   * @access public
   */
  public $OrderAddress_SaveAndGetResult;

  /**
   * 
   * @param OrderAddressTrans $OrderAddress_SaveAndGetResult
   * @access public
   */
  public function __construct($OrderAddress_SaveAndGetResult)
  {
    $this->OrderAddress_SaveAndGetResult = $OrderAddress_SaveAndGetResult;
  }

}

}
