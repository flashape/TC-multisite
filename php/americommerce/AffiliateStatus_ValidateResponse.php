<?php

if (!class_exists("AffiliateStatus_ValidateResponse", false)) 
{
class AffiliateStatus_ValidateResponse
{

  /**
   * 
   * @var string $AffiliateStatus_ValidateResult
   * @access public
   */
  public $AffiliateStatus_ValidateResult;

  /**
   * 
   * @param string $AffiliateStatus_ValidateResult
   * @access public
   */
  public function __construct($AffiliateStatus_ValidateResult)
  {
    $this->AffiliateStatus_ValidateResult = $AffiliateStatus_ValidateResult;
  }

}

}
