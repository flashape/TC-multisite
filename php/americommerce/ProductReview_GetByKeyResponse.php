<?php

if (!class_exists("ProductReview_GetByKeyResponse", false)) 
{
class ProductReview_GetByKeyResponse
{

  /**
   * 
   * @var ProductReviewTrans $ProductReview_GetByKeyResult
   * @access public
   */
  public $ProductReview_GetByKeyResult;

  /**
   * 
   * @param ProductReviewTrans $ProductReview_GetByKeyResult
   * @access public
   */
  public function __construct($ProductReview_GetByKeyResult)
  {
    $this->ProductReview_GetByKeyResult = $ProductReview_GetByKeyResult;
  }

}

}
