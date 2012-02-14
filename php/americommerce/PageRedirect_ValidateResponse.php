<?php

if (!class_exists("PageRedirect_ValidateResponse", false)) 
{
class PageRedirect_ValidateResponse
{

  /**
   * 
   * @var string $PageRedirect_ValidateResult
   * @access public
   */
  public $PageRedirect_ValidateResult;

  /**
   * 
   * @param string $PageRedirect_ValidateResult
   * @access public
   */
  public function __construct($PageRedirect_ValidateResult)
  {
    $this->PageRedirect_ValidateResult = $PageRedirect_ValidateResult;
  }

}

}
