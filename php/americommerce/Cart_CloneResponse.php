<?php

if (!class_exists("Cart_CloneResponse", false)) 
{
class Cart_CloneResponse
{

  /**
   * 
   * @var CartTrans $Cart_CloneResult
   * @access public
   */
  public $Cart_CloneResult;

  /**
   * 
   * @param CartTrans $Cart_CloneResult
   * @access public
   */
  public function __construct($Cart_CloneResult)
  {
    $this->Cart_CloneResult = $Cart_CloneResult;
  }

}

}
