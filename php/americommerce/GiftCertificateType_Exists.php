<?php

if (!class_exists("GiftCertificateType_Exists", false)) 
{
class GiftCertificateType_Exists
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
