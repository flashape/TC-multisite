<?php

if (!class_exists("RelatedProducts_ValidateResponse", false)) 
{
class RelatedProducts_ValidateResponse
{

  /**
   * 
   * @var string $RelatedProducts_ValidateResult
   * @access public
   */
  public $RelatedProducts_ValidateResult;

  /**
   * 
   * @param string $RelatedProducts_ValidateResult
   * @access public
   */
  public function __construct($RelatedProducts_ValidateResult)
  {
    $this->RelatedProducts_ValidateResult = $RelatedProducts_ValidateResult;
  }

}

}
