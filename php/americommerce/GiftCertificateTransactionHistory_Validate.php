<?php

if (!class_exists("GiftCertificateTransactionHistory_Validate", false)) 
{
class GiftCertificateTransactionHistory_Validate
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
