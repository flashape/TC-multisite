<?php

if (!class_exists("ProductPricing_ExistsResponse", false)) 
{
class ProductPricing_ExistsResponse
{

  /**
   * 
   * @var boolean $ProductPricing_ExistsResult
   * @access public
   */
  public $ProductPricing_ExistsResult;

  /**
   * 
   * @param boolean $ProductPricing_ExistsResult
   * @access public
   */
  public function __construct($ProductPricing_ExistsResult)
  {
    $this->ProductPricing_ExistsResult = $ProductPricing_ExistsResult;
  }

}

}
