<?php

if (!class_exists("GiftCertificateTransactionHistory_SaveResponse", false)) 
{
class GiftCertificateTransactionHistory_SaveResponse
{

  /**
   * 
   * @var boolean $GiftCertificateTransactionHistory_SaveResult
   * @access public
   */
  public $GiftCertificateTransactionHistory_SaveResult;

  /**
   * 
   * @param boolean $GiftCertificateTransactionHistory_SaveResult
   * @access public
   */
  public function __construct($GiftCertificateTransactionHistory_SaveResult)
  {
    $this->GiftCertificateTransactionHistory_SaveResult = $GiftCertificateTransactionHistory_SaveResult;
  }

}

}
