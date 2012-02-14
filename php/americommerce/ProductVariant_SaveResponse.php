<?php

if (!class_exists("ProductVariant_SaveResponse", false)) 
{
class ProductVariant_SaveResponse
{

  /**
   * 
   * @var boolean $ProductVariant_SaveResult
   * @access public
   */
  public $ProductVariant_SaveResult;

  /**
   * 
   * @param boolean $ProductVariant_SaveResult
   * @access public
   */
  public function __construct($ProductVariant_SaveResult)
  {
    $this->ProductVariant_SaveResult = $ProductVariant_SaveResult;
  }

}

}
