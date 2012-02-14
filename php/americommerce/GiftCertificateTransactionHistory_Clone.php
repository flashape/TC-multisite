<?php

if (!class_exists("GiftCertificateTransactionHistory_Clone", false)) 
{
class GiftCertificateTransactionHistory_Clone
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
