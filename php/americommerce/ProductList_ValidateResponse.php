<?php

if (!class_exists("ProductList_ValidateResponse", false)) 
{
class ProductList_ValidateResponse
{

  /**
   * 
   * @var string $ProductList_ValidateResult
   * @access public
   */
  public $ProductList_ValidateResult;

  /**
   * 
   * @param string $ProductList_ValidateResult
   * @access public
   */
  public function __construct($ProductList_ValidateResult)
  {
    $this->ProductList_ValidateResult = $ProductList_ValidateResult;
  }

}

}
