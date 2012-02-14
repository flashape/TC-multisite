<?php

if (!class_exists("Order_Validate", false)) 
{
class Order_Validate
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
