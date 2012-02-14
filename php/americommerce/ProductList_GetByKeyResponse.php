<?php

if (!class_exists("ProductList_GetByKeyResponse", false)) 
{
class ProductList_GetByKeyResponse
{

  /**
   * 
   * @var ProductListTrans $ProductList_GetByKeyResult
   * @access public
   */
  public $ProductList_GetByKeyResult;

  /**
   * 
   * @param ProductListTrans $ProductList_GetByKeyResult
   * @access public
   */
  public function __construct($ProductList_GetByKeyResult)
  {
    $this->ProductList_GetByKeyResult = $ProductList_GetByKeyResult;
  }

}

}
