<?php

if (!class_exists("ProductList_Clone", false)) 
{
class ProductList_Clone
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
