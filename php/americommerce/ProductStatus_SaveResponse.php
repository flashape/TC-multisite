<?php

if (!class_exists("ProductStatus_SaveResponse", false)) 
{
class ProductStatus_SaveResponse
{

  /**
   * 
   * @var boolean $ProductStatus_SaveResult
   * @access public
   */
  public $ProductStatus_SaveResult;

  /**
   * 
   * @param boolean $ProductStatus_SaveResult
   * @access public
   */
  public function __construct($ProductStatus_SaveResult)
  {
    $this->ProductStatus_SaveResult = $ProductStatus_SaveResult;
  }

}

}
