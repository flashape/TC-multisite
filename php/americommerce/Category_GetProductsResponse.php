<?php

if (!class_exists("Category_GetProductsResponse", false)) 
{
class Category_GetProductsResponse
{

  /**
   * 
   * @var array $Category_GetProductsResult
   * @access public
   */
  public $Category_GetProductsResult;

  /**
   * 
   * @param array $Category_GetProductsResult
   * @access public
   */
  public function __construct($Category_GetProductsResult)
  {
    $this->Category_GetProductsResult = $Category_GetProductsResult;
  }

}

}
