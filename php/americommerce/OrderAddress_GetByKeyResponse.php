<?php

if (!class_exists("OrderAddress_GetByKeyResponse", false)) 
{
class OrderAddress_GetByKeyResponse
{

  /**
   * 
   * @var OrderAddressTrans $OrderAddress_GetByKeyResult
   * @access public
   */
  public $OrderAddress_GetByKeyResult;

  /**
   * 
   * @param OrderAddressTrans $OrderAddress_GetByKeyResult
   * @access public
   */
  public function __construct($OrderAddress_GetByKeyResult)
  {
    $this->OrderAddress_GetByKeyResult = $OrderAddress_GetByKeyResult;
  }

}

}
