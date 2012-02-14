<?php

if (!class_exists("ProductList_CloneResponse", false)) 
{
class ProductList_CloneResponse
{

  /**
   * 
   * @var ProductListTrans $ProductList_CloneResult
   * @access public
   */
  public $ProductList_CloneResult;

  /**
   * 
   * @param ProductListTrans $ProductList_CloneResult
   * @access public
   */
  public function __construct($ProductList_CloneResult)
  {
    $this->ProductList_CloneResult = $ProductList_CloneResult;
  }

}

}
