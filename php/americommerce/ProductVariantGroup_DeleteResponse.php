<?php

if (!class_exists("ProductVariantGroup_DeleteResponse", false)) 
{
class ProductVariantGroup_DeleteResponse
{

  /**
   * 
   * @var boolean $ProductVariantGroup_DeleteResult
   * @access public
   */
  public $ProductVariantGroup_DeleteResult;

  /**
   * 
   * @param boolean $ProductVariantGroup_DeleteResult
   * @access public
   */
  public function __construct($ProductVariantGroup_DeleteResult)
  {
    $this->ProductVariantGroup_DeleteResult = $ProductVariantGroup_DeleteResult;
  }

}

}
