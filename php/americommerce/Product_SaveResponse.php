<?php

if (!class_exists("Product_SaveResponse", false)) 
{
class Product_SaveResponse
{

  /**
   * 
   * @var boolean $Product_SaveResult
   * @access public
   */
  public $Product_SaveResult;

  /**
   * 
   * @param boolean $Product_SaveResult
   * @access public
   */
  public function __construct($Product_SaveResult)
  {
    $this->Product_SaveResult = $Product_SaveResult;
  }

}

}
