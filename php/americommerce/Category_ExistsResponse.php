<?php

if (!class_exists("Category_ExistsResponse", false)) 
{
class Category_ExistsResponse
{

  /**
   * 
   * @var boolean $Category_ExistsResult
   * @access public
   */
  public $Category_ExistsResult;

  /**
   * 
   * @param boolean $Category_ExistsResult
   * @access public
   */
  public function __construct($Category_ExistsResult)
  {
    $this->Category_ExistsResult = $Category_ExistsResult;
  }

}

}
