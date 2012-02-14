<?php

if (!class_exists("CartVariant_ValidateResponse", false)) 
{
class CartVariant_ValidateResponse
{

  /**
   * 
   * @var string $CartVariant_ValidateResult
   * @access public
   */
  public $CartVariant_ValidateResult;

  /**
   * 
   * @param string $CartVariant_ValidateResult
   * @access public
   */
  public function __construct($CartVariant_ValidateResult)
  {
    $this->CartVariant_ValidateResult = $CartVariant_ValidateResult;
  }

}

}
