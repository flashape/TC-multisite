<?php

if (!class_exists("OrderPayment_SaveResponse", false)) 
{
class OrderPayment_SaveResponse
{

  /**
   * 
   * @var boolean $OrderPayment_SaveResult
   * @access public
   */
  public $OrderPayment_SaveResult;

  /**
   * 
   * @param boolean $OrderPayment_SaveResult
   * @access public
   */
  public function __construct($OrderPayment_SaveResult)
  {
    $this->OrderPayment_SaveResult = $OrderPayment_SaveResult;
  }

}

}
