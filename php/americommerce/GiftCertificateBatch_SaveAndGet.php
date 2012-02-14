<?php

if (!class_exists("GiftCertificateBatch_SaveAndGet", false)) 
{
class GiftCertificateBatch_SaveAndGet
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
