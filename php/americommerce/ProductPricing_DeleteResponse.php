<?php

if (!class_exists("ProductPricing_DeleteResponse", false)) 
{
class ProductPricing_DeleteResponse
{

  /**
   * 
   * @var boolean $ProductPricing_DeleteResult
   * @access public
   */
  public $ProductPricing_DeleteResult;

  /**
   * 
   * @param boolean $ProductPricing_DeleteResult
   * @access public
   */
  public function __construct($ProductPricing_DeleteResult)
  {
    $this->ProductPricing_DeleteResult = $ProductPricing_DeleteResult;
  }

}

}
