<?php

if (!class_exists("ProductList_SaveResponse", false)) 
{
class ProductList_SaveResponse
{

  /**
   * 
   * @var boolean $ProductList_SaveResult
   * @access public
   */
  public $ProductList_SaveResult;

  /**
   * 
   * @param boolean $ProductList_SaveResult
   * @access public
   */
  public function __construct($ProductList_SaveResult)
  {
    $this->ProductList_SaveResult = $ProductList_SaveResult;
  }

}

}
