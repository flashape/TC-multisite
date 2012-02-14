<?php

if (!class_exists("ProductReview_FillProductRatingCollection", false)) 
{
class ProductReview_FillProductRatingCollection
{

  /**
   * 
   * @var ProductReviewTrans $poProductReviewTrans
   * @access public
   */
  public $poProductReviewTrans;

  /**
   * 
   * @param ProductReviewTrans $poProductReviewTrans
   * @access public
   */
  public function __construct($poProductReviewTrans)
  {
    $this->poProductReviewTrans = $poProductReviewTrans;
  }

}

}
