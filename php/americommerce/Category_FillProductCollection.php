<?php

if (!class_exists("Category_FillProductCollection", false)) 
{
class Category_FillProductCollection
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
