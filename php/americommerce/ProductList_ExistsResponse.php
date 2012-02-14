<?php

if (!class_exists("ProductList_ExistsResponse", false)) 
{
class ProductList_ExistsResponse
{

  /**
   * 
   * @var boolean $ProductList_ExistsResult
   * @access public
   */
  public $ProductList_ExistsResult;

  /**
   * 
   * @param boolean $ProductList_ExistsResult
   * @access public
   */
  public function __construct($ProductList_ExistsResult)
  {
    $this->ProductList_ExistsResult = $ProductList_ExistsResult;
  }

}

}
