<?php

if (!class_exists("Product_GetByKeyResponse", false)) 
{
class Product_GetByKeyResponse
{

  /**
   * 
   * @var ProductTrans $Product_GetByKeyResult
   * @access public
   */
  public $Product_GetByKeyResult;

  /**
   * 
   * @param ProductTrans $Product_GetByKeyResult
   * @access public
   */
  public function __construct($Product_GetByKeyResult)
  {
    $this->Product_GetByKeyResult = $Product_GetByKeyResult;
  }

}

}
