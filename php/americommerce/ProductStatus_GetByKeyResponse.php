<?php

if (!class_exists("ProductStatus_GetByKeyResponse", false)) 
{
class ProductStatus_GetByKeyResponse
{

  /**
   * 
   * @var ProductStatusTrans $ProductStatus_GetByKeyResult
   * @access public
   */
  public $ProductStatus_GetByKeyResult;

  /**
   * 
   * @param ProductStatusTrans $ProductStatus_GetByKeyResult
   * @access public
   */
  public function __construct($ProductStatus_GetByKeyResult)
  {
    $this->ProductStatus_GetByKeyResult = $ProductStatus_GetByKeyResult;
  }

}

}
