<?php

if (!class_exists("Product_GetPriceResponse", false)) 
{
class Product_GetPriceResponse
{

  /**
   * 
   * @var float $Product_GetPriceResult
   * @access public
   */
  public $Product_GetPriceResult;

  /**
   * 
   * @param float $Product_GetPriceResult
   * @access public
   */
  public function __construct($Product_GetPriceResult)
  {
    $this->Product_GetPriceResult = $Product_GetPriceResult;
  }

}

}
