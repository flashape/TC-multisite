<?php

if (!class_exists("Category_CloneResponse", false)) 
{
class Category_CloneResponse
{

  /**
   * 
   * @var CategoryTrans $Category_CloneResult
   * @access public
   */
  public $Category_CloneResult;

  /**
   * 
   * @param CategoryTrans $Category_CloneResult
   * @access public
   */
  public function __construct($Category_CloneResult)
  {
    $this->Category_CloneResult = $Category_CloneResult;
  }

}

}
