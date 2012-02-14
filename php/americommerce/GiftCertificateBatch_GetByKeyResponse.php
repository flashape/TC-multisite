<?php

if (!class_exists("GiftCertificateBatch_GetByKeyResponse", false)) 
{
class GiftCertificateBatch_GetByKeyResponse
{

  /**
   * 
   * @var GiftCertificateBatchTrans $GiftCertificateBatch_GetByKeyResult
   * @access public
   */
  public $GiftCertificateBatch_GetByKeyResult;

  /**
   * 
   * @param GiftCertificateBatchTrans $GiftCertificateBatch_GetByKeyResult
   * @access public
   */
  public function __construct($GiftCertificateBatch_GetByKeyResult)
  {
    $this->GiftCertificateBatch_GetByKeyResult = $GiftCertificateBatch_GetByKeyResult;
  }

}

}
