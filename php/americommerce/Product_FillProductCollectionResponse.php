<?php

if (!class_exists("Product_FillProductCollectionResponse", false)) 
{
class Product_FillProductCollectionResponse
{

  /**
   * 
   * @var ProductTrans $Product_FillProductCollectionResult
   * @access public
   */
  public $Product_FillProductCollectionResult;

  /**
   * 
   * @param ProductTrans $Product_FillProductCollectionResult
   * @access public
   */
  public function __construct($Product_FillProductCollectionResult)
  {
    $this->Product_FillProductCollectionResult = $Product_FillProductCollectionResult;
  }

}

}
