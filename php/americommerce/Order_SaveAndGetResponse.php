<?php

if (!class_exists("Order_SaveAndGetResponse", false)) 
{
class Order_SaveAndGetResponse
{

  /**
   * 
   * @var OrderTrans $Order_SaveAndGetResult
   * @access public
   */
  public $Order_SaveAndGetResult;

  /**
   * 
   * @param OrderTrans $Order_SaveAndGetResult
   * @access public
   */
  public function __construct($Order_SaveAndGetResult)
  {
    $this->Order_SaveAndGetResult = $Order_SaveAndGetResult;
  }

}

}
