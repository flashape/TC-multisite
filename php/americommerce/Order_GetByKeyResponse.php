<?php

if (!class_exists("Order_GetByKeyResponse", false)) 
{
class Order_GetByKeyResponse
{

  /**
   * 
   * @var OrderTrans $Order_GetByKeyResult
   * @access public
   */
  public $Order_GetByKeyResult;

  /**
   * 
   * @param OrderTrans $Order_GetByKeyResult
   * @access public
   */
  public function __construct($Order_GetByKeyResult)
  {
    $this->Order_GetByKeyResult = $Order_GetByKeyResult;
  }

}

}
