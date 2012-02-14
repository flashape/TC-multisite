<?php

if (!class_exists("ProductList_SaveAndGetResponse", false)) 
{
class ProductList_SaveAndGetResponse
{

  /**
   * 
   * @var ProductListTrans $ProductList_SaveAndGetResult
   * @access public
   */
  public $ProductList_SaveAndGetResult;

  /**
   * 
   * @param ProductListTrans $ProductList_SaveAndGetResult
   * @access public
   */
  public function __construct($ProductList_SaveAndGetResult)
  {
    $this->ProductList_SaveAndGetResult = $ProductList_SaveAndGetResult;
  }

}

}
