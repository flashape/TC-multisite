<?php

if (!class_exists("Order_FillGiftCertificateTransactionHistoryCollection", false)) 
{
class Order_FillGiftCertificateTransactionHistoryCollection
{

  /**
   * 
   * @var OrderTrans $poOrderTrans
   * @access public
   */
  public $poOrderTrans;

  /**
   * 
   * @param OrderTrans $poOrderTrans
   * @access public
   */
  public function __construct($poOrderTrans)
  {
    $this->poOrderTrans = $poOrderTrans;
  }

}

}
