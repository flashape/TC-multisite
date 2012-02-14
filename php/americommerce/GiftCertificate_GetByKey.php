<?php

if (!class_exists("GiftCertificate_GetByKey", false)) 
{
class GiftCertificate_GetByKey
{

  /**
   * 
   * @var int $piGiftCertificateID
   * @access public
   */
  public $piGiftCertificateID;

  /**
   * 
   * @param int $piGiftCertificateID
   * @access public
   */
  public function __construct($piGiftCertificateID)
  {
    $this->piGiftCertificateID = $piGiftCertificateID;
  }

}

}
