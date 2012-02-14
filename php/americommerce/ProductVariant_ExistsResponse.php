<?php

if (!class_exists("ProductVariant_ExistsResponse", false)) 
{
class ProductVariant_ExistsResponse
{

  /**
   * 
   * @var boolean $ProductVariant_ExistsResult
   * @access public
   */
  public $ProductVariant_ExistsResult;

  /**
   * 
   * @param boolean $ProductVariant_ExistsResult
   * @access public
   */
  public function __construct($ProductVariant_ExistsResult)
  {
    $this->ProductVariant_ExistsResult = $ProductVariant_ExistsResult;
  }

}

}
