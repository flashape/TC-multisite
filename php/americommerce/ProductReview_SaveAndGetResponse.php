<?php

if (!class_exists("ProductReview_SaveAndGetResponse", false)) 
{
class ProductReview_SaveAndGetResponse
{

  /**
   * 
   * @var ProductReviewTrans $ProductReview_SaveAndGetResult
   * @access public
   */
  public $ProductReview_SaveAndGetResult;

  /**
   * 
   * @param ProductReviewTrans $ProductReview_SaveAndGetResult
   * @access public
   */
  public function __construct($ProductReview_SaveAndGetResult)
  {
    $this->ProductReview_SaveAndGetResult = $ProductReview_SaveAndGetResult;
  }

}

}
