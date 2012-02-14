<?php

if (!class_exists("GiftCertificate_Delete", false)) 
{
class GiftCertificate_Delete
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
