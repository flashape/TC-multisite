<?php

if (!class_exists("ProductStatus_GetAllResponse", false)) 
{
class ProductStatus_GetAllResponse
{

  /**
   * 
   * @var array $ProductStatus_GetAllResult
   * @access public
   */
  public $ProductStatus_GetAllResult;

  /**
   * 
   * @param array $ProductStatus_GetAllResult
   * @access public
   */
  public function __construct($ProductStatus_GetAllResult)
  {
    $this->ProductStatus_GetAllResult = $ProductStatus_GetAllResult;
  }

}

}
