<?php

if (!class_exists("OrderPayment_GetCVVResponse", false)) 
{
class OrderPayment_GetCVVResponse
{

  /**
   * 
   * @var string $OrderPayment_GetCVVResult
   * @access public
   */
  public $OrderPayment_GetCVVResult;

  /**
   * 
   * @param string $OrderPayment_GetCVVResult
   * @access public
   */
  public function __construct($OrderPayment_GetCVVResult)
  {
    $this->OrderPayment_GetCVVResult = $OrderPayment_GetCVVResult;
  }

}

}
