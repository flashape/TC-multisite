<?php

if (!class_exists("CustomerType_Save", false)) 
{
class CustomerType_Save
{

  /**
   * 
   * @var CustomerTypeTrans $poCustomerTypeTrans
   * @access public
   */
  public $poCustomerTypeTrans;

  /**
   * 
   * @param CustomerTypeTrans $poCustomerTypeTrans
   * @access public
   */
  public function __construct($poCustomerTypeTrans)
  {
    $this->poCustomerTypeTrans = $poCustomerTypeTrans;
  }

}

}
