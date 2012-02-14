<?php

if (!class_exists("Category_FillCategoryCollection", false)) 
{
class Category_FillCategoryCollection
{

  /**
   * 
   * @var CategoryTrans $poCategoryTrans
   * @access public
   */
  public $poCategoryTrans;

  /**
   * 
   * @param CategoryTrans $poCategoryTrans
   * @access public
   */
  public function __construct($poCategoryTrans)
  {
    $this->poCategoryTrans = $poCategoryTrans;
  }

}

}
