<?php

if (!class_exists("GiftCertificate_SaveResponse", false)) 
{
class GiftCertificate_SaveResponse
{

  /**
   * 
   * @var boolean $GiftCertificate_SaveResult
   * @access public
   */
  public $GiftCertificate_SaveResult;

  /**
   * 
   * @param boolean $GiftCertificate_SaveResult
   * @access public
   */
  public function __construct($GiftCertificate_SaveResult)
  {
    $this->GiftCertificate_SaveResult = $GiftCertificate_SaveResult;
  }

}

}
