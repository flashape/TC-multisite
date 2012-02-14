<?php

if (!class_exists("GiftCertificate_Clone", false)) 
{
class GiftCertificate_Clone
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
