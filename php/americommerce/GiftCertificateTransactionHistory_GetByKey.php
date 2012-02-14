<?php

if (!class_exists("GiftCertificateTransactionHistory_GetByKey", false)) 
{
class GiftCertificateTransactionHistory_GetByKey
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
