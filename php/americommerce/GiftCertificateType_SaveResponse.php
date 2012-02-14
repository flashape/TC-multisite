<?php

if (!class_exists("GiftCertificateType_SaveResponse", false)) 
{
class GiftCertificateType_SaveResponse
{

  /**
   * 
   * @var boolean $GiftCertificateType_SaveResult
   * @access public
   */
  public $GiftCertificateType_SaveResult;

  /**
   * 
   * @param boolean $GiftCertificateType_SaveResult
   * @access public
   */
  public function __construct($GiftCertificateType_SaveResult)
  {
    $this->GiftCertificateType_SaveResult = $GiftCertificateType_SaveResult;
  }

}

}
