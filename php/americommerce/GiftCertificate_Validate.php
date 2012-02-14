<?php

if (!class_exists("GiftCertificate_Validate", false)) 
{
class GiftCertificate_Validate
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
