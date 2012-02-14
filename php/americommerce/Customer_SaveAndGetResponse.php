<?php

if (!class_exists("Customer_SaveAndGetResponse", false)) 
{
class Customer_SaveAndGetResponse
{

  /**
   * 
   * @var CustomerTrans $Customer_SaveAndGetResult
   * @access public
   */
  public $Customer_SaveAndGetResult;

  /**
   * 
   * @param CustomerTrans $Customer_SaveAndGetResult
   * @access public
   */
  public function __construct($Customer_SaveAndGetResult)
  {
    $this->Customer_SaveAndGetResult = $Customer_SaveAndGetResult;
  }

}

}
