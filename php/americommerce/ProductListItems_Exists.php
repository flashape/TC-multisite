<?php

if (!class_exists("ProductListItems_Exists", false)) 
{
class ProductListItems_Exists
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
