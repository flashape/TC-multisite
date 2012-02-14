<?php

if (!class_exists("Customer_GetByEmailAndStoreResponse", false)) 
{
class Customer_GetByEmailAndStoreResponse
{

  /**
   * 
   * @var CustomerTrans $Customer_GetByEmailAndStoreResult
   * @access public
   */
  public $Customer_GetByEmailAndStoreResult;

  /**
   * 
   * @param CustomerTrans $Customer_GetByEmailAndStoreResult
   * @access public
   */
  public function __construct($Customer_GetByEmailAndStoreResult)
  {
    $this->Customer_GetByEmailAndStoreResult = $Customer_GetByEmailAndStoreResult;
  }

}

}
