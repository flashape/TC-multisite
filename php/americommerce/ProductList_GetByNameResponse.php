<?php

if (!class_exists("ProductList_GetByNameResponse", false)) 
{
class ProductList_GetByNameResponse
{

  /**
   * 
   * @var ProductListTrans $ProductList_GetByNameResult
   * @access public
   */
  public $ProductList_GetByNameResult;

  /**
   * 
   * @param ProductListTrans $ProductList_GetByNameResult
   * @access public
   */
  public function __construct($ProductList_GetByNameResult)
  {
    $this->ProductList_GetByNameResult = $ProductList_GetByNameResult;
  }

}

}
