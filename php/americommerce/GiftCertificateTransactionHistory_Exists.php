<?php

if (!class_exists("GiftCertificateTransactionHistory_Exists", false)) 
{
class GiftCertificateTransactionHistory_Exists
{

  /**
   * 
   * @var int $piTransactionID
   * @access public
   */
  public $piTransactionID;

  /**
   * 
   * @param int $piTransactionID
   * @access public
   */
  public function __construct($piTransactionID)
  {
    $this->piTransactionID = $piTransactionID;
  }

}

}
