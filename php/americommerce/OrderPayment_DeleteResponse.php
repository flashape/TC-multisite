<?php

if (!class_exists("OrderPayment_DeleteResponse", false)) 
{
class OrderPayment_DeleteResponse
{

  /**
   * 
   * @var boolean $OrderPayment_DeleteResult
   * @access public
   */
  public $OrderPayment_DeleteResult;

  /**
   * 
   * @param boolean $OrderPayment_DeleteResult
   * @access public
   */
  public function __construct($OrderPayment_DeleteResult)
  {
    $this->OrderPayment_DeleteResult = $OrderPayment_DeleteResult;
  }

}

}
