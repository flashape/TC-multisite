<?php

if (!class_exists("GiftCertificateBatch_ExistsResponse", false)) 
{
class GiftCertificateBatch_ExistsResponse
{

  /**
   * 
   * @var boolean $GiftCertificateBatch_ExistsResult
   * @access public
   */
  public $GiftCertificateBatch_ExistsResult;

  /**
   * 
   * @param boolean $GiftCertificateBatch_ExistsResult
   * @access public
   */
  public function __construct($GiftCertificateBatch_ExistsResult)
  {
    $this->GiftCertificateBatch_ExistsResult = $GiftCertificateBatch_ExistsResult;
  }

}

}
