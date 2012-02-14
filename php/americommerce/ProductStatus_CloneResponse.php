<?php

if (!class_exists("ProductStatus_CloneResponse", false)) 
{
class ProductStatus_CloneResponse
{

  /**
   * 
   * @var ProductStatusTrans $ProductStatus_CloneResult
   * @access public
   */
  public $ProductStatus_CloneResult;

  /**
   * 
   * @param ProductStatusTrans $ProductStatus_CloneResult
   * @access public
   */
  public function __construct($ProductStatus_CloneResult)
  {
    $this->ProductStatus_CloneResult = $ProductStatus_CloneResult;
  }

}

}
