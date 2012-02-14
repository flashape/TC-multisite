<?php

if (!class_exists("ProductStatus_ExistsResponse", false)) 
{
class ProductStatus_ExistsResponse
{

  /**
   * 
   * @var boolean $ProductStatus_ExistsResult
   * @access public
   */
  public $ProductStatus_ExistsResult;

  /**
   * 
   * @param boolean $ProductStatus_ExistsResult
   * @access public
   */
  public function __construct($ProductStatus_ExistsResult)
  {
    $this->ProductStatus_ExistsResult = $ProductStatus_ExistsResult;
  }

}

}
