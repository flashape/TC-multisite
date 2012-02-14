<?php

if (!class_exists("ProductVariantGroup_ExistsResponse", false)) 
{
class ProductVariantGroup_ExistsResponse
{

  /**
   * 
   * @var boolean $ProductVariantGroup_ExistsResult
   * @access public
   */
  public $ProductVariantGroup_ExistsResult;

  /**
   * 
   * @param boolean $ProductVariantGroup_ExistsResult
   * @access public
   */
  public function __construct($ProductVariantGroup_ExistsResult)
  {
    $this->ProductVariantGroup_ExistsResult = $ProductVariantGroup_ExistsResult;
  }

}

}
