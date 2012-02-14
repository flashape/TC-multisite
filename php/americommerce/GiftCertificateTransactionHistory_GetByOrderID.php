<?php

if (!class_exists("GiftCertificateTransactionHistory_GetByOrderID", false)) 
{
class GiftCertificateTransactionHistory_GetByOrderID
{

  /**
   * 
   * @var int $piOrderID
   * @access public
   */
  public $piOrderID;

  /**
   * 
   * @param int $piOrderID
   * @access public
   */
  public function __construct($piOrderID)
  {
    $this->piOrderID = $piOrderID;
  }

}

}
