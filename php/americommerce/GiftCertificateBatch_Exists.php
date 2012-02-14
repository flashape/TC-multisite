<?php

if (!class_exists("GiftCertificateBatch_Exists", false)) 
{
class GiftCertificateBatch_Exists
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
