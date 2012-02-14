<?php

if (!class_exists("ProductVariant_DeleteResponse", false)) 
{
class ProductVariant_DeleteResponse
{

  /**
   * 
   * @var boolean $ProductVariant_DeleteResult
   * @access public
   */
  public $ProductVariant_DeleteResult;

  /**
   * 
   * @param boolean $ProductVariant_DeleteResult
   * @access public
   */
  public function __construct($ProductVariant_DeleteResult)
  {
    $this->ProductVariant_DeleteResult = $ProductVariant_DeleteResult;
  }

}

}
