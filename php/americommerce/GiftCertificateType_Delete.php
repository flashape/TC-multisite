<?php

if (!class_exists("GiftCertificateType_Delete", false)) 
{
class GiftCertificateType_Delete
{

  /**
   * 
   * @var int $piGiftCertificateTypeID
   * @access public
   */
  public $piGiftCertificateTypeID;

  /**
   * 
   * @param int $piGiftCertificateTypeID
   * @access public
   */
  public function __construct($piGiftCertificateTypeID)
  {
    $this->piGiftCertificateTypeID = $piGiftCertificateTypeID;
  }

}

}
