<?php

if (!class_exists("ProductListItems_ExistsResponse", false)) 
{
class ProductListItems_ExistsResponse
{

  /**
   * 
   * @var boolean $ProductListItems_ExistsResult
   * @access public
   */
  public $ProductListItems_ExistsResult;

  /**
   * 
   * @param boolean $ProductListItems_ExistsResult
   * @access public
   */
  public function __construct($ProductListItems_ExistsResult)
  {
    $this->ProductListItems_ExistsResult = $ProductListItems_ExistsResult;
  }

}

}
