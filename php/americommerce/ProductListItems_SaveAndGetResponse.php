<?php

if (!class_exists("ProductListItems_SaveAndGetResponse", false)) 
{
class ProductListItems_SaveAndGetResponse
{

  /**
   * 
   * @var ProductListItemsTrans $ProductListItems_SaveAndGetResult
   * @access public
   */
  public $ProductListItems_SaveAndGetResult;

  /**
   * 
   * @param ProductListItemsTrans $ProductListItems_SaveAndGetResult
   * @access public
   */
  public function __construct($ProductListItems_SaveAndGetResult)
  {
    $this->ProductListItems_SaveAndGetResult = $ProductListItems_SaveAndGetResult;
  }

}

}
