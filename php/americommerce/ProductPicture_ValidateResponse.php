<?php

if (!class_exists("ProductPicture_ValidateResponse", false)) 
{
class ProductPicture_ValidateResponse
{

  /**
   * 
   * @var string $ProductPicture_ValidateResult
   * @access public
   */
  public $ProductPicture_ValidateResult;

  /**
   * 
   * @param string $ProductPicture_ValidateResult
   * @access public
   */
  public function __construct($ProductPicture_ValidateResult)
  {
    $this->ProductPicture_ValidateResult = $ProductPicture_ValidateResult;
  }

}

}
