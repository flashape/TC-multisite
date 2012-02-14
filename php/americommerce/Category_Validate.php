<?php

if (!class_exists("Category_Validate", false)) 
{
class Category_Validate
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
