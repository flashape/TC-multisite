<?php

if (!class_exists("Product_GetPriceByCustomerTypeResponse", false)) 
{
class Product_GetPriceByCustomerTypeResponse
{

  /**
   * 
   * @var float $Product_GetPriceByCustomerTypeResult
   * @access public
   */
  public $Product_GetPriceByCustomerTypeResult;

  /**
   * 
   * @param float $Product_GetPriceByCustomerTypeResult
   * @access public
   */
  public function __construct($Product_GetPriceByCustomerTypeResult)
  {
    $this->Product_GetPriceByCustomerTypeResult = $Product_GetPriceByCustomerTypeResult;
  }

}

}
