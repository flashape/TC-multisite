<?php

if (!class_exists("GiftCertificateType_ValidateResponse", false)) 
{
class GiftCertificateType_ValidateResponse
{

  /**
   * 
   * @var string $GiftCertificateType_ValidateResult
   * @access public
   */
  public $GiftCertificateType_ValidateResult;

  /**
   * 
   * @param string $GiftCertificateType_ValidateResult
   * @access public
   */
  public function __construct($GiftCertificateType_ValidateResult)
  {
    $this->GiftCertificateType_ValidateResult = $GiftCertificateType_ValidateResult;
  }

}

}
