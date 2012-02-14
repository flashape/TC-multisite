<?php

if (!class_exists("Cart_RemoveCartItemResponse", false)) 
{
class Cart_RemoveCartItemResponse
{

  /**
   * 
   * @var string $Cart_RemoveCartItemResult
   * @access public
   */
  public $Cart_RemoveCartItemResult;

  /**
   * 
   * @param string $Cart_RemoveCartItemResult
   * @access public
   */
  public function __construct($Cart_RemoveCartItemResult)
  {
    $this->Cart_RemoveCartItemResult = $Cart_RemoveCartItemResult;
  }

}

}
