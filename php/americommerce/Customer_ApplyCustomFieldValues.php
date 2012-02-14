<?php

if (!class_exists("Customer_ApplyCustomFieldValues", false)) 
{
class Customer_ApplyCustomFieldValues
{

  /**
   * 
   * @var array $poFields
   * @access public
   */
  public $poFields;

  /**
   * 
   * @var CustomerTrans $poCustomerTrans
   * @access public
   */
  public $poCustomerTrans;

  /**
   * 
   * @param array $poFields
   * @param CustomerTrans $poCustomerTrans
   * @access public
   */
  public function __construct($poFields, $poCustomerTrans)
  {
    $this->poFields = $poFields;
    $this->poCustomerTrans = $poCustomerTrans;
  }

}

}
