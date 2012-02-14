<?php

if (!class_exists("ProductList_GetByName", false)) 
{
class ProductList_GetByName
{

  /**
   * 
   * @var string $psListName
   * @access public
   */
  public $psListName;

  /**
   * 
   * @param string $psListName
   * @access public
   */
  public function __construct($psListName)
  {
    $this->psListName = $psListName;
  }

}

}
