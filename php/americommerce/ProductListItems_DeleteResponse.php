<?php

if (!class_exists("ProductListItems_DeleteResponse", false)) 
{
class ProductListItems_DeleteResponse
{

  /**
   * 
   * @var boolean $ProductListItems_DeleteResult
   * @access public
   */
  public $ProductListItems_DeleteResult;

  /**
   * 
   * @param boolean $ProductListItems_DeleteResult
   * @access public
   */
  public function __construct($ProductListItems_DeleteResult)
  {
    $this->ProductListItems_DeleteResult = $ProductListItems_DeleteResult;
  }

}

}
