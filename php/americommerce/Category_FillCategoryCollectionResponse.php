<?php

if (!class_exists("Category_FillCategoryCollectionResponse", false)) 
{
class Category_FillCategoryCollectionResponse
{

  /**
   * 
   * @var CategoryTrans $Category_FillCategoryCollectionResult
   * @access public
   */
  public $Category_FillCategoryCollectionResult;

  /**
   * 
   * @param CategoryTrans $Category_FillCategoryCollectionResult
   * @access public
   */
  public function __construct($Category_FillCategoryCollectionResult)
  {
    $this->Category_FillCategoryCollectionResult = $Category_FillCategoryCollectionResult;
  }

}

}
