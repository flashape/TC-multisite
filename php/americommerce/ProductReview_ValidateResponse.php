<?php

if (!class_exists("ProductReview_ValidateResponse", false)) 
{
class ProductReview_ValidateResponse
{

  /**
   * 
   * @var string $ProductReview_ValidateResult
   * @access public
   */
  public $ProductReview_ValidateResult;

  /**
   * 
   * @param string $ProductReview_ValidateResult
   * @access public
   */
  public function __construct($ProductReview_ValidateResult)
  {
    $this->ProductReview_ValidateResult = $ProductReview_ValidateResult;
  }

}

}
