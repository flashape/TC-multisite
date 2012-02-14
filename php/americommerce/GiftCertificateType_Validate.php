<?php

if (!class_exists("GiftCertificateType_Validate", false)) 
{
class GiftCertificateType_Validate
{

  /**
   * 
   * @var GiftCertificateTypeTrans $poGiftCertificateTypeTrans
   * @access public
   */
  public $poGiftCertificateTypeTrans;

  /**
   * 
   * @param GiftCertificateTypeTrans $poGiftCertificateTypeTrans
   * @access public
   */
  public function __construct($poGiftCertificateTypeTrans)
  {
    $this->poGiftCertificateTypeTrans = $poGiftCertificateTypeTrans;
  }

}

}
