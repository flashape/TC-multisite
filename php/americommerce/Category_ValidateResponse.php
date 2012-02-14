<?php

if (!class_exists("Category_ValidateResponse", false)) 
{
class Category_ValidateResponse
{

  /**
   * 
   * @var string $Category_ValidateResult
   * @access public
   */
  public $Category_ValidateResult;

  /**
   * 
   * @param string $Category_ValidateResult
   * @access public
   */
  public function __construct($Category_ValidateResult)
  {
    $this->Category_ValidateResult = $Category_ValidateResult;
  }

}

}
