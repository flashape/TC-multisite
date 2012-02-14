<?php

if (!class_exists("ProductReview_Delete", false)) 
{
class ProductReview_Delete
{

  /**
   * 
   * @var int $piProductReviewID
   * @access public
   */
  public $piProductReviewID;

  /**
   * 
   * @param int $piProductReviewID
   * @access public
   */
  public function __construct($piProductReviewID)
  {
    $this->piProductReviewID = $piProductReviewID;
  }

}

}
