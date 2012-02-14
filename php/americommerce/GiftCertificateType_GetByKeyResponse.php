<?php

if (!class_exists("GiftCertificateType_GetByKeyResponse", false)) 
{
class GiftCertificateType_GetByKeyResponse
{

  /**
   * 
   * @var GiftCertificateTypeTrans $GiftCertificateType_GetByKeyResult
   * @access public
   */
  public $GiftCertificateType_GetByKeyResult;

  /**
   * 
   * @param GiftCertificateTypeTrans $GiftCertificateType_GetByKeyResult
   * @access public
   */
  public function __construct($GiftCertificateType_GetByKeyResult)
  {
    $this->GiftCertificateType_GetByKeyResult = $GiftCertificateType_GetByKeyResult;
  }

}

}
