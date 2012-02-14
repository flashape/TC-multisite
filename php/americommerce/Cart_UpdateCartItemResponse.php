<?php

if (!class_exists("Cart_UpdateCartItemResponse", false)) 
{
class Cart_UpdateCartItemResponse
{

  /**
   * 
   * @var string $Cart_UpdateCartItemResult
   * @access public
   */
  public $Cart_UpdateCartItemResult;

  /**
   * 
   * @param string $Cart_UpdateCartItemResult
   * @access public
   */
  public function __construct($Cart_UpdateCartItemResult)
  {
    $this->Cart_UpdateCartItemResult = $Cart_UpdateCartItemResult;
  }

}

}
