<?php

if (!class_exists("ProductListItems_Clone", false)) 
{
class ProductListItems_Clone
{

  /**
   * 
   * @var int $piProductListItemID
   * @access public
   */
  public $piProductListItemID;

  /**
   * 
   * @param int $piProductListItemID
   * @access public
   */
  public function __construct($piProductListItemID)
  {
    $this->piProductListItemID = $piProductListItemID;
  }

}

}
