<?php

if (!class_exists("Cart_GetByKeyResponse", false)) 
{
class Cart_GetByKeyResponse
{

  /**
   * 
   * @var CartTrans $Cart_GetByKeyResult
   * @access public
   */
  public $Cart_GetByKeyResult;

  /**
   * 
   * @param CartTrans $Cart_GetByKeyResult
   * @access public
   */
  public function __construct($Cart_GetByKeyResult)
  {
    $this->Cart_GetByKeyResult = $Cart_GetByKeyResult;
  }

}

}
