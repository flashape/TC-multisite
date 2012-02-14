<?php

if (!class_exists("Category_GetByNameIncludingParentResponse", false)) 
{
class Category_GetByNameIncludingParentResponse
{

  /**
   * 
   * @var CategoryTrans $Category_GetByNameIncludingParentResult
   * @access public
   */
  public $Category_GetByNameIncludingParentResult;

  /**
   * 
   * @param CategoryTrans $Category_GetByNameIncludingParentResult
   * @access public
   */
  public function __construct($Category_GetByNameIncludingParentResult)
  {
    $this->Category_GetByNameIncludingParentResult = $Category_GetByNameIncludingParentResult;
  }

}

}
