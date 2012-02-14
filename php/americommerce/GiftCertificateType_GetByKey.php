<?php

if (!class_exists("GiftCertificateType_GetByKey", false)) 
{
class GiftCertificateType_GetByKey
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
