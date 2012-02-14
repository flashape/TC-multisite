<?php

if (!class_exists("Order_ParseCustomFieldValues", false)) 
{
class Order_ParseCustomFieldValues
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
