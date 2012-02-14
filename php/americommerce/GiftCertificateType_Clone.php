<?php

if (!class_exists("GiftCertificateType_Clone", false)) 
{
class GiftCertificateType_Clone
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
