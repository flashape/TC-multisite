<?php

if (!class_exists("ProductReview_Save", false)) 
{
class ProductReview_Save
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
