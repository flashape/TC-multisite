<?php

if (!class_exists("CustomerType_SaveAndGet", false)) 
{
class CustomerType_SaveAndGet
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
