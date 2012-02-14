<?php

if (!class_exists("ProductReview_GetByKey", false)) 
{
class ProductReview_GetByKey
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
