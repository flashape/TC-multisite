<?php

if (!class_exists("Product_ExistsResponse", false)) 
{
class Product_ExistsResponse
{

  /**
   * 
   * @var boolean $Product_ExistsResult
   * @access public
   */
  public $Product_ExistsResult;

  /**
   * 
   * @param boolean $Product_ExistsResult
   * @access public
   */
  public function __construct($Product_ExistsResult)
  {
    $this->Product_ExistsResult = $Product_ExistsResult;
  }

}

}
