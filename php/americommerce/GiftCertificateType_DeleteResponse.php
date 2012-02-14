<?php

if (!class_exists("GiftCertificateType_DeleteResponse", false)) 
{
class GiftCertificateType_DeleteResponse
{

  /**
   * 
   * @var boolean $GiftCertificateType_DeleteResult
   * @access public
   */
  public $GiftCertificateType_DeleteResult;

  /**
   * 
   * @param boolean $GiftCertificateType_DeleteResult
   * @access public
   */
  public function __construct($GiftCertificateType_DeleteResult)
  {
    $this->GiftCertificateType_DeleteResult = $GiftCertificateType_DeleteResult;
  }

}

}
