<?php

if (!class_exists("Customer_SetPasswordResponse", false)) 
{
class Customer_SetPasswordResponse
{

  /**
   * 
   * @var boolean $Customer_SetPasswordResult
   * @access public
   */
  public $Customer_SetPasswordResult;

  /**
   * 
   * @param boolean $Customer_SetPasswordResult
   * @access public
   */
  public function __construct($Customer_SetPasswordResult)
  {
    $this->Customer_SetPasswordResult = $Customer_SetPasswordResult;
  }

}

}
