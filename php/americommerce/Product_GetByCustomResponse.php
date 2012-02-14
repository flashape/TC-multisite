<?php

if (!class_exists("Product_GetByCustomResponse", false)) 
{
class Product_GetByCustomResponse
{

  /**
   * 
   * @var array $Product_GetByCustomResult
   * @access public
   */
  public $Product_GetByCustomResult;

  /**
   * 
   * @param array $Product_GetByCustomResult
   * @access public
   */
  public function __construct($Product_GetByCustomResult)
  {
    $this->Product_GetByCustomResult = $Product_GetByCustomResult;
  }

}

}
