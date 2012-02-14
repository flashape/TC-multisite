<?php

if (!class_exists("GiftCertificateBatch_Validate", false)) 
{
class GiftCertificateBatch_Validate
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
