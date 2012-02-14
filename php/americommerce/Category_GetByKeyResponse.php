<?php

if (!class_exists("Category_GetByKeyResponse", false)) 
{
class Category_GetByKeyResponse
{

  /**
   * 
   * @var CategoryTrans $Category_GetByKeyResult
   * @access public
   */
  public $Category_GetByKeyResult;

  /**
   * 
   * @param CategoryTrans $Category_GetByKeyResult
   * @access public
   */
  public function __construct($Category_GetByKeyResult)
  {
    $this->Category_GetByKeyResult = $Category_GetByKeyResult;
  }

}

}
