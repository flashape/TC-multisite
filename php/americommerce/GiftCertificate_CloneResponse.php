<?php

if (!class_exists("GiftCertificate_CloneResponse", false)) 
{
class GiftCertificate_CloneResponse
{

  /**
   * 
   * @var GiftCertificateTrans $GiftCertificate_CloneResult
   * @access public
   */
  public $GiftCertificate_CloneResult;

  /**
   * 
   * @param GiftCertificateTrans $GiftCertificate_CloneResult
   * @access public
   */
  public function __construct($GiftCertificate_CloneResult)
  {
    $this->GiftCertificate_CloneResult = $GiftCertificate_CloneResult;
  }

}

}
