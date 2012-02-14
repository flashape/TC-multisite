<?php

if (!class_exists("ProductReview_CloneResponse", false)) 
{
class ProductReview_CloneResponse
{

  /**
   * 
   * @var ProductReviewTrans $ProductReview_CloneResult
   * @access public
   */
  public $ProductReview_CloneResult;

  /**
   * 
   * @param ProductReviewTrans $ProductReview_CloneResult
   * @access public
   */
  public function __construct($ProductReview_CloneResult)
  {
    $this->ProductReview_CloneResult = $ProductReview_CloneResult;
  }

}

}
