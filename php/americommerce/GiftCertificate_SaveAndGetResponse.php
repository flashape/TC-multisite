<?php

if (!class_exists("GiftCertificate_SaveAndGetResponse", false)) 
{
class GiftCertificate_SaveAndGetResponse
{

  /**
   * 
   * @var GiftCertificateTrans $GiftCertificate_SaveAndGetResult
   * @access public
   */
  public $GiftCertificate_SaveAndGetResult;

  /**
   * 
   * @param GiftCertificateTrans $GiftCertificate_SaveAndGetResult
   * @access public
   */
  public function __construct($GiftCertificate_SaveAndGetResult)
  {
    $this->GiftCertificate_SaveAndGetResult = $GiftCertificate_SaveAndGetResult;
  }

}

}
