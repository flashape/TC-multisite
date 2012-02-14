<?php

if (!class_exists("Order_ApplyCustomFieldValues", false)) 
{
class Order_ApplyCustomFieldValues
{

  /**
   * 
   * @var array $poFields
   * @access public
   */
  public $poFields;

  /**
   * 
   * @var OrderTrans $poOrderTrans
   * @access public
   */
  public $poOrderTrans;

  /**
   * 
   * @param array $poFields
   * @param OrderTrans $poOrderTrans
   * @access public
   */
  public function __construct($poFields, $poOrderTrans)
  {
    $this->poFields = $poFields;
    $this->poOrderTrans = $poOrderTrans;
  }

}

}
