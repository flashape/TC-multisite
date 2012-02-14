<?php

if (!class_exists("GiftCertificate_Save", false)) 
{
class GiftCertificate_Save
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
