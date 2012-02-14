<?php

if (!class_exists("Category_GetByName", false)) 
{
class Category_GetByName
{

  /**
   * 
   * @var string $psCategoryName
   * @access public
   */
  public $psCategoryName;

  /**
   * 
   * @param string $psCategoryName
   * @access public
   */
  public function __construct($psCategoryName)
  {
    $this->psCategoryName = $psCategoryName;
  }

}

}
