<?php

if (!class_exists("ProductListItems_CloneResponse", false)) 
{
class ProductListItems_CloneResponse
{

  /**
   * 
   * @var ProductListItemsTrans $ProductListItems_CloneResult
   * @access public
   */
  public $ProductListItems_CloneResult;

  /**
   * 
   * @param ProductListItemsTrans $ProductListItems_CloneResult
   * @access public
   */
  public function __construct($ProductListItems_CloneResult)
  {
    $this->ProductListItems_CloneResult = $ProductListItems_CloneResult;
  }

}

}
