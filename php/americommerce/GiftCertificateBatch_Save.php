<?php

if (!class_exists("GiftCertificateBatch_Save", false)) 
{
class GiftCertificateBatch_Save
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
