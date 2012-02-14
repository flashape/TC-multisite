<?php

if (!class_exists("GiftCertificateBatch_SaveResponse", false)) 
{
class GiftCertificateBatch_SaveResponse
{

  /**
   * 
   * @var boolean $GiftCertificateBatch_SaveResult
   * @access public
   */
  public $GiftCertificateBatch_SaveResult;

  /**
   * 
   * @param boolean $GiftCertificateBatch_SaveResult
   * @access public
   */
  public function __construct($GiftCertificateBatch_SaveResult)
  {
    $this->GiftCertificateBatch_SaveResult = $GiftCertificateBatch_SaveResult;
  }

}

}
