<?php

if (!class_exists("ProductStatus_DeleteResponse", false)) 
{
class ProductStatus_DeleteResponse
{

  /**
   * 
   * @var boolean $ProductStatus_DeleteResult
   * @access public
   */
  public $ProductStatus_DeleteResult;

  /**
   * 
   * @param boolean $ProductStatus_DeleteResult
   * @access public
   */
  public function __construct($ProductStatus_DeleteResult)
  {
    $this->ProductStatus_DeleteResult = $ProductStatus_DeleteResult;
  }

}

}
