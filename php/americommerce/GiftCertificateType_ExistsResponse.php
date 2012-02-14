<?php

if (!class_exists("GiftCertificateType_ExistsResponse", false)) 
{
class GiftCertificateType_ExistsResponse
{

  /**
   * 
   * @var boolean $GiftCertificateType_ExistsResult
   * @access public
   */
  public $GiftCertificateType_ExistsResult;

  /**
   * 
   * @param boolean $GiftCertificateType_ExistsResult
   * @access public
   */
  public function __construct($GiftCertificateType_ExistsResult)
  {
    $this->GiftCertificateType_ExistsResult = $GiftCertificateType_ExistsResult;
  }

}

}
