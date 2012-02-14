<?php

if (!class_exists("Product_GetCountResponse", false)) 
{
class Product_GetCountResponse
{

  /**
   * 
   * @var int $Product_GetCountResult
   * @access public
   */
  public $Product_GetCountResult;

  /**
   * 
   * @param int $Product_GetCountResult
   * @access public
   */
  public function __construct($Product_GetCountResult)
  {
    $this->Product_GetCountResult = $Product_GetCountResult;
  }

}

}
