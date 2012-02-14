<?php

if (!class_exists("ProductList_DeleteResponse", false)) 
{
class ProductList_DeleteResponse
{

  /**
   * 
   * @var boolean $ProductList_DeleteResult
   * @access public
   */
  public $ProductList_DeleteResult;

  /**
   * 
   * @param boolean $ProductList_DeleteResult
   * @access public
   */
  public function __construct($ProductList_DeleteResult)
  {
    $this->ProductList_DeleteResult = $ProductList_DeleteResult;
  }

}

}
