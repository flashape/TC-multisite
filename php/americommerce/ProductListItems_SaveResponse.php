<?php

if (!class_exists("ProductListItems_SaveResponse", false)) 
{
class ProductListItems_SaveResponse
{

  /**
   * 
   * @var boolean $ProductListItems_SaveResult
   * @access public
   */
  public $ProductListItems_SaveResult;

  /**
   * 
   * @param boolean $ProductListItems_SaveResult
   * @access public
   */
  public function __construct($ProductListItems_SaveResult)
  {
    $this->ProductListItems_SaveResult = $ProductListItems_SaveResult;
  }

}

}
