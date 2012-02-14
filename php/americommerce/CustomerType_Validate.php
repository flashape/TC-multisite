<?php

if (!class_exists("CustomerType_Validate", false)) 
{
class CustomerType_Validate
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
