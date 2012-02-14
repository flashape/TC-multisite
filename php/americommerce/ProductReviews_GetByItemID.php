<?php

if (!class_exists("ProductReviews_GetByItemID", false)) 
{
class ProductReviews_GetByItemID
{

  /**
   * 
   * @var int $piItemID
   * @access public
   */
  public $piItemID;

  /**
   * 
   * @param int $piItemID
   * @access public
   */
  public function __construct($piItemID)
  {
    $this->piItemID = $piItemID;
  }

}

}
