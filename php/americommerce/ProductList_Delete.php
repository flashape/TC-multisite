<?php

if (!class_exists("ProductList_Delete", false)) 
{
class ProductList_Delete
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
