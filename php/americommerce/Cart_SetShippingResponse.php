<?php

if (!class_exists("Cart_SetShippingResponse", false)) 
{
class Cart_SetShippingResponse
{

  /**
   * 
   * @var string $Cart_SetShippingResult
   * @access public
   */
  public $Cart_SetShippingResult;

  /**
   * 
   * @param string $Cart_SetShippingResult
   * @access public
   */
  public function __construct($Cart_SetShippingResult)
  {
    $this->Cart_SetShippingResult = $Cart_SetShippingResult;
  }

}

}
