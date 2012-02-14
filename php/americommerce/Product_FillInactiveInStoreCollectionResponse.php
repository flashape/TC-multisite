<?php

if (!class_exists("Product_FillInactiveInStoreCollectionResponse", false)) 
{
class Product_FillInactiveInStoreCollectionResponse
{

  /**
   * 
   * @var ProductTrans $Product_FillInactiveInStoreCollectionResult
   * @access public
   */
  public $Product_FillInactiveInStoreCollectionResult;

  /**
   * 
   * @param ProductTrans $Product_FillInactiveInStoreCollectionResult
   * @access public
   */
  public function __construct($Product_FillInactiveInStoreCollectionResult)
  {
    $this->Product_FillInactiveInStoreCollectionResult = $Product_FillInactiveInStoreCollectionResult;
  }

}

}
