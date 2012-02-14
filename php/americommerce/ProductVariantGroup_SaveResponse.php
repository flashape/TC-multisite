<?php

if (!class_exists("ProductVariantGroup_SaveResponse", false)) 
{
class ProductVariantGroup_SaveResponse
{

  /**
   * 
   * @var boolean $ProductVariantGroup_SaveResult
   * @access public
   */
  public $ProductVariantGroup_SaveResult;

  /**
   * 
   * @param boolean $ProductVariantGroup_SaveResult
   * @access public
   */
  public function __construct($ProductVariantGroup_SaveResult)
  {
    $this->ProductVariantGroup_SaveResult = $ProductVariantGroup_SaveResult;
  }

}

}
