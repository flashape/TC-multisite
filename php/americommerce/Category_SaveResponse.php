<?php

if (!class_exists("Category_SaveResponse", false)) 
{
class Category_SaveResponse
{

  /**
   * 
   * @var boolean $Category_SaveResult
   * @access public
   */
  public $Category_SaveResult;

  /**
   * 
   * @param boolean $Category_SaveResult
   * @access public
   */
  public function __construct($Category_SaveResult)
  {
    $this->Category_SaveResult = $Category_SaveResult;
  }

}

}
