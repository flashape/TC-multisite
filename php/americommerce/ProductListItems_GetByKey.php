<?php

if (!class_exists("ProductListItems_GetByKey", false)) 
{
class ProductListItems_GetByKey
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
