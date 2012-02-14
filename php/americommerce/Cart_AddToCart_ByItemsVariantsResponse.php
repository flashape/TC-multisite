<?php

if (!class_exists("Cart_AddToCart_ByItemsVariantsResponse", false)) 
{
class Cart_AddToCart_ByItemsVariantsResponse
{

  /**
   * 
   * @var array $Cart_AddToCart_ByItemsVariantsResult
   * @access public
   */
  public $Cart_AddToCart_ByItemsVariantsResult;

  /**
   * 
   * @param array $Cart_AddToCart_ByItemsVariantsResult
   * @access public
   */
  public function __construct($Cart_AddToCart_ByItemsVariantsResult)
  {
    $this->Cart_AddToCart_ByItemsVariantsResult = $Cart_AddToCart_ByItemsVariantsResult;
  }

}

}
