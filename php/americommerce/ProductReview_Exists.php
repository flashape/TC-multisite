<?php

if (!class_exists("ProductReview_Exists", false)) 
{
class ProductReview_Exists
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
