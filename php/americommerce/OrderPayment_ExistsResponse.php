<?php

if (!class_exists("OrderPayment_ExistsResponse", false)) 
{
class OrderPayment_ExistsResponse
{

  /**
   * 
   * @var boolean $OrderPayment_ExistsResult
   * @access public
   */
  public $OrderPayment_ExistsResult;

  /**
   * 
   * @param boolean $OrderPayment_ExistsResult
   * @access public
   */
  public function __construct($OrderPayment_ExistsResult)
  {
    $this->OrderPayment_ExistsResult = $OrderPayment_ExistsResult;
  }

}

}
