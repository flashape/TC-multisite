<?php

if (!class_exists("ProductReview_SaveAndGet", false)) 
{
class ProductReview_SaveAndGet
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
