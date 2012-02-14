<?php

if (!class_exists("GiftCertificate_GetByCodeResponse", false)) 
{
class GiftCertificate_GetByCodeResponse
{

  /**
   * 
   * @var GiftCertificateTrans $GiftCertificate_GetByCodeResult
   * @access public
   */
  public $GiftCertificate_GetByCodeResult;

  /**
   * 
   * @param GiftCertificateTrans $GiftCertificate_GetByCodeResult
   * @access public
   */
  public function __construct($GiftCertificate_GetByCodeResult)
  {
    $this->GiftCertificate_GetByCodeResult = $GiftCertificate_GetByCodeResult;
  }

}

}
