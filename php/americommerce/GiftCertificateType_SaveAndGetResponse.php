<?php

if (!class_exists("GiftCertificateType_SaveAndGetResponse", false)) 
{
class GiftCertificateType_SaveAndGetResponse
{

  /**
   * 
   * @var GiftCertificateTypeTrans $GiftCertificateType_SaveAndGetResult
   * @access public
   */
  public $GiftCertificateType_SaveAndGetResult;

  /**
   * 
   * @param GiftCertificateTypeTrans $GiftCertificateType_SaveAndGetResult
   * @access public
   */
  public function __construct($GiftCertificateType_SaveAndGetResult)
  {
    $this->GiftCertificateType_SaveAndGetResult = $GiftCertificateType_SaveAndGetResult;
  }

}

}
