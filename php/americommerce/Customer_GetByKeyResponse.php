<?php

if (!class_exists("Customer_GetByKeyResponse", false)) 
{
class Customer_GetByKeyResponse
{

  /**
   * 
   * @var CustomerTrans $Customer_GetByKeyResult
   * @access public
   */
  public $Customer_GetByKeyResult;

  /**
   * 
   * @param CustomerTrans $Customer_GetByKeyResult
   * @access public
   */
  public function __construct($Customer_GetByKeyResult)
  {
    $this->Customer_GetByKeyResult = $Customer_GetByKeyResult;
  }

}

}
