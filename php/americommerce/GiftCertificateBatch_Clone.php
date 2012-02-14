<?php

if (!class_exists("GiftCertificateBatch_Clone", false)) 
{
class GiftCertificateBatch_Clone
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
