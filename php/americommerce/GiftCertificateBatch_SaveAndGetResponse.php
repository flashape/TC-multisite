<?php

if (!class_exists("GiftCertificateBatch_SaveAndGetResponse", false)) 
{
class GiftCertificateBatch_SaveAndGetResponse
{

  /**
   * 
   * @var GiftCertificateBatchTrans $GiftCertificateBatch_SaveAndGetResult
   * @access public
   */
  public $GiftCertificateBatch_SaveAndGetResult;

  /**
   * 
   * @param GiftCertificateBatchTrans $GiftCertificateBatch_SaveAndGetResult
   * @access public
   */
  public function __construct($GiftCertificateBatch_SaveAndGetResult)
  {
    $this->GiftCertificateBatch_SaveAndGetResult = $GiftCertificateBatch_SaveAndGetResult;
  }

}

}
