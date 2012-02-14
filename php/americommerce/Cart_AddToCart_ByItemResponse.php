<?php

if (!class_exists("Cart_AddToCart_ByItemResponse", false)) 
{
class Cart_AddToCart_ByItemResponse
{

  /**
   * 
   * @var string $Cart_AddToCart_ByItemResult
   * @access public
   */
  public $Cart_AddToCart_ByItemResult;

  /**
   * 
   * @param string $Cart_AddToCart_ByItemResult
   * @access public
   */
  public function __construct($Cart_AddToCart_ByItemResult)
  {
    $this->Cart_AddToCart_ByItemResult = $Cart_AddToCart_ByItemResult;
  }

}

}
