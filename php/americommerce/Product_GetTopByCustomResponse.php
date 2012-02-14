<?php

if (!class_exists("Product_GetTopByCustomResponse", false)) 
{
class Product_GetTopByCustomResponse
{

  /**
   * 
   * @var array $Product_GetTopByCustomResult
   * @access public
   */
  public $Product_GetTopByCustomResult;

  /**
   * 
   * @param array $Product_GetTopByCustomResult
   * @access public
   */
  public function __construct($Product_GetTopByCustomResult)
  {
    $this->Product_GetTopByCustomResult = $Product_GetTopByCustomResult;
  }

}

}
