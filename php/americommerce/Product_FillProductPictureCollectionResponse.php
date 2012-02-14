<?php

if (!class_exists("Product_FillProductPictureCollectionResponse", false)) 
{
class Product_FillProductPictureCollectionResponse
{

  /**
   * 
   * @var ProductTrans $Product_FillProductPictureCollectionResult
   * @access public
   */
  public $Product_FillProductPictureCollectionResult;

  /**
   * 
   * @param ProductTrans $Product_FillProductPictureCollectionResult
   * @access public
   */
  public function __construct($Product_FillProductPictureCollectionResult)
  {
    $this->Product_FillProductPictureCollectionResult = $Product_FillProductPictureCollectionResult;
  }

}

}
