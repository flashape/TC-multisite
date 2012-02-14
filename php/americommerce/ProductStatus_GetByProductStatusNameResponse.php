<?php

if (!class_exists("ProductStatus_GetByProductStatusNameResponse", false)) 
{
class ProductStatus_GetByProductStatusNameResponse
{

  /**
   * 
   * @var ProductStatusTrans $ProductStatus_GetByProductStatusNameResult
   * @access public
   */
  public $ProductStatus_GetByProductStatusNameResult;

  /**
   * 
   * @param ProductStatusTrans $ProductStatus_GetByProductStatusNameResult
   * @access public
   */
  public function __construct($ProductStatus_GetByProductStatusNameResult)
  {
    $this->ProductStatus_GetByProductStatusNameResult = $ProductStatus_GetByProductStatusNameResult;
  }

}

}
