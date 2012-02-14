<?php

if (!class_exists("GiftCertificateType_Save", false)) 
{
class GiftCertificateType_Save
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
