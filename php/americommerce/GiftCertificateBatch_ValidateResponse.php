<?php

if (!class_exists("GiftCertificateBatch_ValidateResponse", false)) 
{
class GiftCertificateBatch_ValidateResponse
{

  /**
   * 
   * @var string $GiftCertificateBatch_ValidateResult
   * @access public
   */
  public $GiftCertificateBatch_ValidateResult;

  /**
   * 
   * @param string $GiftCertificateBatch_ValidateResult
   * @access public
   */
  public function __construct($GiftCertificateBatch_ValidateResult)
  {
    $this->GiftCertificateBatch_ValidateResult = $GiftCertificateBatch_ValidateResult;
  }

}

}
