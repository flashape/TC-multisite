<?php

if (!class_exists("Product_FillPersonalizeCollectionResponse", false)) 
{
class Product_FillPersonalizeCollectionResponse
{

  /**
   * 
   * @var ProductTrans $Product_FillPersonalizeCollectionResult
   * @access public
   */
  public $Product_FillPersonalizeCollectionResult;

  /**
   * 
   * @param ProductTrans $Product_FillPersonalizeCollectionResult
   * @access public
   */
  public function __construct($Product_FillPersonalizeCollectionResult)
  {
    $this->Product_FillPersonalizeCollectionResult = $Product_FillPersonalizeCollectionResult;
  }

}

}
