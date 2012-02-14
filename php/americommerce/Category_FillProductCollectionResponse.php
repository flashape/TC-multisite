<?php

if (!class_exists("Category_FillProductCollectionResponse", false)) 
{
class Category_FillProductCollectionResponse
{

  /**
   * 
   * @var CategoryTrans $Category_FillProductCollectionResult
   * @access public
   */
  public $Category_FillProductCollectionResult;

  /**
   * 
   * @param CategoryTrans $Category_FillProductCollectionResult
   * @access public
   */
  public function __construct($Category_FillProductCollectionResult)
  {
    $this->Category_FillProductCollectionResult = $Category_FillProductCollectionResult;
  }

}

}
