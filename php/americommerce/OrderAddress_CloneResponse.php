<?php

if (!class_exists("OrderAddress_CloneResponse", false)) 
{
class OrderAddress_CloneResponse
{

  /**
   * 
   * @var OrderAddressTrans $OrderAddress_CloneResult
   * @access public
   */
  public $OrderAddress_CloneResult;

  /**
   * 
   * @param OrderAddressTrans $OrderAddress_CloneResult
   * @access public
   */
  public function __construct($OrderAddress_CloneResult)
  {
    $this->OrderAddress_CloneResult = $OrderAddress_CloneResult;
  }

}

}
