<?php

if (!class_exists("GiftCertificate_Exists", false)) 
{
class GiftCertificate_Exists
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
