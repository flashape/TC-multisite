<?php

if (!class_exists("ProductReview_Clone", false)) 
{
class ProductReview_Clone
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
