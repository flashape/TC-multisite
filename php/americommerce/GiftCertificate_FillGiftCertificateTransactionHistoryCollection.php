<?php

if (!class_exists("GiftCertificate_FillGiftCertificateTransactionHistoryCollection", false)) 
{
class GiftCertificate_FillGiftCertificateTransactionHistoryCollection
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
