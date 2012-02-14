<?php

if (!class_exists("Product_CloneResponse", false)) 
{
class Product_CloneResponse
{

  /**
   * 
   * @var ProductTrans $Product_CloneResult
   * @access public
   */
  public $Product_CloneResult;

  /**
   * 
   * @param ProductTrans $Product_CloneResult
   * @access public
   */
  public function __construct($Product_CloneResult)
  {
    $this->Product_CloneResult = $Product_CloneResult;
  }

}

}
