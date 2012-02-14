<?php

if (!class_exists("Cart_GetShippingResponse", false)) 
{
class Cart_GetShippingResponse
{

  /**
   * 
   * @var array $Cart_GetShippingResult
   * @access public
   */
  public $Cart_GetShippingResult;

  /**
   * 
   * @param array $Cart_GetShippingResult
   * @access public
   */
  public function __construct($Cart_GetShippingResult)
  {
    $this->Cart_GetShippingResult = $Cart_GetShippingResult;
  }

}

}
