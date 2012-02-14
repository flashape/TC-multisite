<?php

if (!class_exists("GiftCertificateTransactionHistory_Delete", false)) 
{
class GiftCertificateTransactionHistory_Delete
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
