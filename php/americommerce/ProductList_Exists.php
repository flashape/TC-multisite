<?php

if (!class_exists("ProductList_Exists", false)) 
{
class ProductList_Exists
{

  /**
   * 
   * @var int $piProductListID
   * @access public
   */
  public $piProductListID;

  /**
   * 
   * @param int $piProductListID
   * @access public
   */
  public function __construct($piProductListID)
  {
    $this->piProductListID = $piProductListID;
  }

}

}
