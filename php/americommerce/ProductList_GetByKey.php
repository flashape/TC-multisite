<?php

if (!class_exists("ProductList_GetByKey", false)) 
{
class ProductList_GetByKey
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
