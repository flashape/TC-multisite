<?php

if (!class_exists("GiftCertificate_ExistsResponse", false)) 
{
class GiftCertificate_ExistsResponse
{

  /**
   * 
   * @var boolean $GiftCertificate_ExistsResult
   * @access public
   */
  public $GiftCertificate_ExistsResult;

  /**
   * 
   * @param boolean $GiftCertificate_ExistsResult
   * @access public
   */
  public function __construct($GiftCertificate_ExistsResult)
  {
    $this->GiftCertificate_ExistsResult = $GiftCertificate_ExistsResult;
  }

}

}
