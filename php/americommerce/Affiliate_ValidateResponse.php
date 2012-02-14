<?php

if (!class_exists("Affiliate_ValidateResponse", false)) 
{
class Affiliate_ValidateResponse
{

  /**
   * 
   * @var string $Affiliate_ValidateResult
   * @access public
   */
  public $Affiliate_ValidateResult;

  /**
   * 
   * @param string $Affiliate_ValidateResult
   * @access public
   */
  public function __construct($Affiliate_ValidateResult)
  {
    $this->Affiliate_ValidateResult = $Affiliate_ValidateResult;
  }

}

}
