<?php

if (!class_exists("Cart_AddToCart_ByItemsResponse", false)) 
{
class Cart_AddToCart_ByItemsResponse
{

  /**
   * 
   * @var array $Cart_AddToCart_ByItemsResult
   * @access public
   */
  public $Cart_AddToCart_ByItemsResult;

  /**
   * 
   * @param array $Cart_AddToCart_ByItemsResult
   * @access public
   */
  public function __construct($Cart_AddToCart_ByItemsResult)
  {
    $this->Cart_AddToCart_ByItemsResult = $Cart_AddToCart_ByItemsResult;
  }

}

}
