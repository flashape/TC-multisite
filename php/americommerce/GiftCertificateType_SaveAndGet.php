<?php

if (!class_exists("GiftCertificateType_SaveAndGet", false)) 
{
class GiftCertificateType_SaveAndGet
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
