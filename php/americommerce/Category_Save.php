<?php

if (!class_exists("Category_Save", false)) 
{
class Category_Save
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
