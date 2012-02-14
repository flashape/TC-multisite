<?php

if (!class_exists("Cart_AddToCart_ByItemVariantsResponse", false)) 
{
class Cart_AddToCart_ByItemVariantsResponse
{

  /**
   * 
   * @var string $Cart_AddToCart_ByItemVariantsResult
   * @access public
   */
  public $Cart_AddToCart_ByItemVariantsResult;

  /**
   * 
   * @param string $Cart_AddToCart_ByItemVariantsResult
   * @access public
   */
  public function __construct($Cart_AddToCart_ByItemVariantsResult)
  {
    $this->Cart_AddToCart_ByItemVariantsResult = $Cart_AddToCart_ByItemVariantsResult;
  }

}

}
