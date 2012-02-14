<?php

if (!class_exists("GiftCertificateBatch_Delete", false)) 
{
class GiftCertificateBatch_Delete
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
