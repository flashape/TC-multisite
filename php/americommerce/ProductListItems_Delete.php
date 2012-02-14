<?php

if (!class_exists("ProductListItems_Delete", false)) 
{
class ProductListItems_Delete
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
