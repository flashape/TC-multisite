<?php

if (!class_exists("Customer_GetBySessionIDResponse", false)) 
{
class Customer_GetBySessionIDResponse
{

  /**
   * 
   * @var CustomerTrans $Customer_GetBySessionIDResult
   * @access public
   */
  public $Customer_GetBySessionIDResult;

  /**
   * 
   * @param CustomerTrans $Customer_GetBySessionIDResult
   * @access public
   */
  public function __construct($Customer_GetBySessionIDResult)
  {
    $this->Customer_GetBySessionIDResult = $Customer_GetBySessionIDResult;
  }

}

}
