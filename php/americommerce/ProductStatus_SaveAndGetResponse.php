<?php

if (!class_exists("ProductStatus_SaveAndGetResponse", false)) 
{
class ProductStatus_SaveAndGetResponse
{

  /**
   * 
   * @var ProductStatusTrans $ProductStatus_SaveAndGetResult
   * @access public
   */
  public $ProductStatus_SaveAndGetResult;

  /**
   * 
   * @param ProductStatusTrans $ProductStatus_SaveAndGetResult
   * @access public
   */
  public function __construct($ProductStatus_SaveAndGetResult)
  {
    $this->ProductStatus_SaveAndGetResult = $ProductStatus_SaveAndGetResult;
  }

}

}
