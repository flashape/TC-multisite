<?php

if (!class_exists("Category_GetByNameResponse", false)) 
{
class Category_GetByNameResponse
{

  /**
   * 
   * @var CategoryTrans $Category_GetByNameResult
   * @access public
   */
  public $Category_GetByNameResult;

  /**
   * 
   * @param CategoryTrans $Category_GetByNameResult
   * @access public
   */
  public function __construct($Category_GetByNameResult)
  {
    $this->Category_GetByNameResult = $Category_GetByNameResult;
  }

}

}
