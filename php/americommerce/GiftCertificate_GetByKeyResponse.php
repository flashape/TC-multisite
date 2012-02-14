<?php

if (!class_exists("GiftCertificate_GetByKeyResponse", false)) 
{
class GiftCertificate_GetByKeyResponse
{

  /**
   * 
   * @var GiftCertificateTrans $GiftCertificate_GetByKeyResult
   * @access public
   */
  public $GiftCertificate_GetByKeyResult;

  /**
   * 
   * @param GiftCertificateTrans $GiftCertificate_GetByKeyResult
   * @access public
   */
  public function __construct($GiftCertificate_GetByKeyResult)
  {
    $this->GiftCertificate_GetByKeyResult = $GiftCertificate_GetByKeyResult;
  }

}

}
