<?php

if (!class_exists("ProductListItems_ValidateResponse", false)) 
{
class ProductListItems_ValidateResponse
{

  /**
   * 
   * @var string $ProductListItems_ValidateResult
   * @access public
   */
  public $ProductListItems_ValidateResult;

  /**
   * 
   * @param string $ProductListItems_ValidateResult
   * @access public
   */
  public function __construct($ProductListItems_ValidateResult)
  {
    $this->ProductListItems_ValidateResult = $ProductListItems_ValidateResult;
  }

}

}
