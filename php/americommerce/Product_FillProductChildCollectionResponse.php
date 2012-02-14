<?php

if (!class_exists("Product_FillProductChildCollectionResponse", false)) 
{
class Product_FillProductChildCollectionResponse
{

  /**
   * 
   * @var ProductTrans $Product_FillProductChildCollectionResult
   * @access public
   */
  public $Product_FillProductChildCollectionResult;

  /**
   * 
   * @param ProductTrans $Product_FillProductChildCollectionResult
   * @access public
   */
  public function __construct($Product_FillProductChildCollectionResult)
  {
    $this->Product_FillProductChildCollectionResult = $Product_FillProductChildCollectionResult;
  }

}

}
