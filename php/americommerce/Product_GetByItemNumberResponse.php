<?php

if (!class_exists("Product_GetByItemNumberResponse", false)) 
{
class Product_GetByItemNumberResponse
{

  /**
   * 
   * @var ProductTrans $Product_GetByItemNumberResult
   * @access public
   */
  public $Product_GetByItemNumberResult;

  /**
   * 
   * @param ProductTrans $Product_GetByItemNumberResult
   * @access public
   */
  public function __construct($Product_GetByItemNumberResult)
  {
    $this->Product_GetByItemNumberResult = $Product_GetByItemNumberResult;
  }

}

}
