<?php

if (!class_exists("GiftCertificateBatch_CloneResponse", false)) 
{
class GiftCertificateBatch_CloneResponse
{

  /**
   * 
   * @var GiftCertificateBatchTrans $GiftCertificateBatch_CloneResult
   * @access public
   */
  public $GiftCertificateBatch_CloneResult;

  /**
   * 
   * @param GiftCertificateBatchTrans $GiftCertificateBatch_CloneResult
   * @access public
   */
  public function __construct($GiftCertificateBatch_CloneResult)
  {
    $this->GiftCertificateBatch_CloneResult = $GiftCertificateBatch_CloneResult;
  }

}

}
