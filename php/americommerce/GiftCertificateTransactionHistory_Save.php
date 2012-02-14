<?php

if (!class_exists("GiftCertificateTransactionHistory_Save", false)) 
{
class GiftCertificateTransactionHistory_Save
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
