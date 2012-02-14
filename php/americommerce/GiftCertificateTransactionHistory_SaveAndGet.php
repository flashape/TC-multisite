<?php

if (!class_exists("GiftCertificateTransactionHistory_SaveAndGet", false)) 
{
class GiftCertificateTransactionHistory_SaveAndGet
{

  /**
   * 
   * @var GiftCertificateTransactionHistoryTrans $poGiftCertificateTransactionHistoryTrans
   * @access public
   */
  public $poGiftCertificateTransactionHistoryTrans;

  /**
   * 
   * @param GiftCertificateTransactionHistoryTrans $poGiftCertificateTransactionHistoryTrans
   * @access public
   */
  public function __construct($poGiftCertificateTransactionHistoryTrans)
  {
    $this->poGiftCertificateTransactionHistoryTrans = $poGiftCertificateTransactionHistoryTrans;
  }

}

}
