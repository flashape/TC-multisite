<?php

if (!class_exists("Category_SaveAndGetResponse", false)) 
{
class Category_SaveAndGetResponse
{

  /**
   * 
   * @var CategoryTrans $Category_SaveAndGetResult
   * @access public
   */
  public $Category_SaveAndGetResult;

  /**
   * 
   * @param CategoryTrans $Category_SaveAndGetResult
   * @access public
   */
  public function __construct($Category_SaveAndGetResult)
  {
    $this->Category_SaveAndGetResult = $Category_SaveAndGetResult;
  }

}

}
