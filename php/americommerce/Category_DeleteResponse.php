<?php

if (!class_exists("Category_DeleteResponse", false)) 
{
class Category_DeleteResponse
{

  /**
   * 
   * @var boolean $Category_DeleteResult
   * @access public
   */
  public $Category_DeleteResult;

  /**
   * 
   * @param boolean $Category_DeleteResult
   * @access public
   */
  public function __construct($Category_DeleteResult)
  {
    $this->Category_DeleteResult = $Category_DeleteResult;
  }

}

}
