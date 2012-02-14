<?php

if (!class_exists("GiftCertificateBatch_GetByKey", false)) 
{
class GiftCertificateBatch_GetByKey
{

  /**
   * 
   * @var int $piGiftCertificateBatchID
   * @access public
   */
  public $piGiftCertificateBatchID;

  /**
   * 
   * @param int $piGiftCertificateBatchID
   * @access public
   */
  public function __construct($piGiftCertificateBatchID)
  {
    $this->piGiftCertificateBatchID = $piGiftCertificateBatchID;
  }

}

}
