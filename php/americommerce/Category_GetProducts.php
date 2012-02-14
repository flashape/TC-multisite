<?php

if (!class_exists("Category_GetProducts", false)) 
{
class Category_GetProducts
{

  /**
   * 
   * @var int $piCategoryID
   * @access public
   */
  public $piCategoryID;

  /**
   * 
   * @param int $piCategoryID
   * @access public
   */
  public function __construct($piCategoryID)
  {
    $this->piCategoryID = $piCategoryID;
  }

}

}
