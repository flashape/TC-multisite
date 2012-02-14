<?php

if (!class_exists("GiftCertificate_SaveAndGet", false)) 
{
class GiftCertificate_SaveAndGet
{

  /**
   * 
   * @var GiftCertificateTrans $poGiftCertificateTrans
   * @access public
   */
  public $poGiftCertificateTrans;

  /**
   * 
   * @param GiftCertificateTrans $poGiftCertificateTrans
   * @access public
   */
  public function __construct($poGiftCertificateTrans)
  {
    $this->poGiftCertificateTrans = $poGiftCertificateTrans;
  }

}

}
