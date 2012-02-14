<?php

if (!class_exists("GiftCertificateBatch_FillGiftCertificateCollection", false)) 
{
class GiftCertificateBatch_FillGiftCertificateCollection
{

  /**
   * 
   * @var GiftCertificateBatchTrans $poGiftCertificateBatchTrans
   * @access public
   */
  public $poGiftCertificateBatchTrans;

  /**
   * 
   * @param GiftCertificateBatchTrans $poGiftCertificateBatchTrans
   * @access public
   */
  public function __construct($poGiftCertificateBatchTrans)
  {
    $this->poGiftCertificateBatchTrans = $poGiftCertificateBatchTrans;
  }

}

}
