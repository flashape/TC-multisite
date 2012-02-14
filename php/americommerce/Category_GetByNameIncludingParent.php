<?php

if (!class_exists("Category_GetByNameIncludingParent", false)) 
{
class Category_GetByNameIncludingParent
{

  /**
   * 
   * @var int $piParentCategoryID
   * @access public
   */
  public $piParentCategoryID;

  /**
   * 
   * @var string $psCategoryName
   * @access public
   */
  public $psCategoryName;

  /**
   * 
   * @param int $piParentCategoryID
   * @param string $psCategoryName
   * @access public
   */
  public function __construct($piParentCategoryID, $psCategoryName)
  {
    $this->piParentCategoryID = $piParentCategoryID;
    $this->psCategoryName = $psCategoryName;
  }

}

}
