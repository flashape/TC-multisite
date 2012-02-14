<?php

if (!class_exists("Category_SaveAndGet", false)) 
{
class Category_SaveAndGet
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
