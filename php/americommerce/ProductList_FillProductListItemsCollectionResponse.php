<?php

if (!class_exists("ProductList_FillProductListItemsCollectionResponse", false)) 
{
class ProductList_FillProductListItemsCollectionResponse
{

  /**
   * 
   * @var ProductListTrans $ProductList_FillProductListItemsCollectionResult
   * @access public
   */
  public $ProductList_FillProductListItemsCollectionResult;

  /**
   * 
   * @param ProductListTrans $ProductList_FillProductListItemsCollectionResult
   * @access public
   */
  public function __construct($ProductList_FillProductListItemsCollectionResult)
  {
    $this->ProductList_FillProductListItemsCollectionResult = $ProductList_FillProductListItemsCollectionResult;
  }

}

}
