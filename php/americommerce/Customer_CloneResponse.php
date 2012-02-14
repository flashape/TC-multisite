<?php

if (!class_exists("Customer_CloneResponse", false)) 
{
class Customer_CloneResponse
{

  /**
   * 
   * @var CustomerTrans $Customer_CloneResult
   * @access public
   */
  public $Customer_CloneResult;

  /**
   * 
   * @param CustomerTrans $Customer_CloneResult
   * @access public
   */
  public function __construct($Customer_CloneResult)
  {
    $this->Customer_CloneResult = $Customer_CloneResult;
  }

}

}
