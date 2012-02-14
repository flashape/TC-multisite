<?php

if (!class_exists("GiftCertificate_ValidateResponse", false)) 
{
class GiftCertificate_ValidateResponse
{

  /**
   * 
   * @var string $GiftCertificate_ValidateResult
   * @access public
   */
  public $GiftCertificate_ValidateResult;

  /**
   * 
   * @param string $GiftCertificate_ValidateResult
   * @access public
   */
  public function __construct($GiftCertificate_ValidateResult)
  {
    $this->GiftCertificate_ValidateResult = $GiftCertificate_ValidateResult;
  }

}

}
