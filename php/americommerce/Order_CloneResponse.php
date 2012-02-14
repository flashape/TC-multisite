<?php

if (!class_exists("Order_CloneResponse", false)) 
{
class Order_CloneResponse
{

  /**
   * 
   * @var OrderTrans $Order_CloneResult
   * @access public
   */
  public $Order_CloneResult;

  /**
   * 
   * @param OrderTrans $Order_CloneResult
   * @access public
   */
  public function __construct($Order_CloneResult)
  {
    $this->Order_CloneResult = $Order_CloneResult;
  }

}

}
