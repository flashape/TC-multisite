<?php

if (!class_exists("ProductReview_Validate", false)) 
{
class ProductReview_Validate
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
