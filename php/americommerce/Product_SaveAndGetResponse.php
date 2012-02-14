<?php

if (!class_exists("Product_SaveAndGetResponse", false)) 
{
class Product_SaveAndGetResponse
{

  /**
   * 
   * @var ProductTrans $Product_SaveAndGetResult
   * @access public
   */
  public $Product_SaveAndGetResult;

  /**
   * 
   * @param ProductTrans $Product_SaveAndGetResult
   * @access public
   */
  public function __construct($Product_SaveAndGetResult)
  {
    $this->Product_SaveAndGetResult = $Product_SaveAndGetResult;
  }

}

}
