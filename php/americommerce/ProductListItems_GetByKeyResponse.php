<?php

if (!class_exists("ProductListItems_GetByKeyResponse", false)) 
{
class ProductListItems_GetByKeyResponse
{

  /**
   * 
   * @var ProductListItemsTrans $ProductListItems_GetByKeyResult
   * @access public
   */
  public $ProductListItems_GetByKeyResult;

  /**
   * 
   * @param ProductListItemsTrans $ProductListItems_GetByKeyResult
   * @access public
   */
  public function __construct($ProductListItems_GetByKeyResult)
  {
    $this->ProductListItems_GetByKeyResult = $ProductListItems_GetByKeyResult;
  }

}

}
