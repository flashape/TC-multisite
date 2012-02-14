<?php

if (!class_exists("Product_FillListedCollectionsResponse", false)) 
{
class Product_FillListedCollectionsResponse
{

  /**
   * 
   * @var ProductTrans $Product_FillListedCollectionsResult
   * @access public
   */
  public $Product_FillListedCollectionsResult;

  /**
   * 
   * @param ProductTrans $Product_FillListedCollectionsResult
   * @access public
   */
  public function __construct($Product_FillListedCollectionsResult)
  {
    $this->Product_FillListedCollectionsResult = $Product_FillListedCollectionsResult;
  }

}

}
