<?php

if (!class_exists("Product_ImportResponse", false)) 
{
class Product_ImportResponse
{

  /**
   * 
   * @var ImportResults $Product_ImportResult
   * @access public
   */
  public $Product_ImportResult;

  /**
   * 
   * @param ImportResults $Product_ImportResult
   * @access public
   */
  public function __construct($Product_ImportResult)
  {
    $this->Product_ImportResult = $Product_ImportResult;
  }

}

}
