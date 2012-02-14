<?php

if (!class_exists("Cart_GetBySessionIDResponse", false)) 
{
class Cart_GetBySessionIDResponse
{

  /**
   * 
   * @var CartInfoTrans $Cart_GetBySessionIDResult
   * @access public
   */
  public $Cart_GetBySessionIDResult;

  /**
   * 
   * @param CartInfoTrans $Cart_GetBySessionIDResult
   * @access public
   */
  public function __construct($Cart_GetBySessionIDResult)
  {
    $this->Cart_GetBySessionIDResult = $Cart_GetBySessionIDResult;
  }

}

}
