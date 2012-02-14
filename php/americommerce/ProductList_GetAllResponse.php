<?php

if (!class_exists("ProductList_GetAllResponse", false)) 
{
class ProductList_GetAllResponse
{

  /**
   * 
   * @var array $ProductList_GetAllResult
   * @access public
   */
  public $ProductList_GetAllResult;

  /**
   * 
   * @param array $ProductList_GetAllResult
   * @access public
   */
  public function __construct($ProductList_GetAllResult)
  {
    $this->ProductList_GetAllResult = $ProductList_GetAllResult;
  }

}

}
