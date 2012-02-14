<?php

if (!class_exists("ProductPricing_SaveResponse", false)) 
{
class ProductPricing_SaveResponse
{

  /**
   * 
   * @var boolean $ProductPricing_SaveResult
   * @access public
   */
  public $ProductPricing_SaveResult;

  /**
   * 
   * @param boolean $ProductPricing_SaveResult
   * @access public
   */
  public function __construct($ProductPricing_SaveResult)
  {
    $this->ProductPricing_SaveResult = $ProductPricing_SaveResult;
  }

}

}
