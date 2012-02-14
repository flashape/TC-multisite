<?php

if (!class_exists("Product_GetCurrentURLResponse", false)) 
{
class Product_GetCurrentURLResponse
{

  /**
   * 
   * @var string $Product_GetCurrentURLResult
   * @access public
   */
  public $Product_GetCurrentURLResult;

  /**
   * 
   * @param string $Product_GetCurrentURLResult
   * @access public
   */
  public function __construct($Product_GetCurrentURLResult)
  {
    $this->Product_GetCurrentURLResult = $Product_GetCurrentURLResult;
  }

}

}
