<?php

if (!class_exists("Product_DeleteResponse", false)) 
{
class Product_DeleteResponse
{

  /**
   * 
   * @var boolean $Product_DeleteResult
   * @access public
   */
  public $Product_DeleteResult;

  /**
   * 
   * @param boolean $Product_DeleteResult
   * @access public
   */
  public function __construct($Product_DeleteResult)
  {
    $this->Product_DeleteResult = $Product_DeleteResult;
  }

}

}
