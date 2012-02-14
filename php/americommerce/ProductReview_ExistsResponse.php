<?php

if (!class_exists("ProductReview_ExistsResponse", false)) 
{
class ProductReview_ExistsResponse
{

  /**
   * 
   * @var boolean $ProductReview_ExistsResult
   * @access public
   */
  public $ProductReview_ExistsResult;

  /**
   * 
   * @param boolean $ProductReview_ExistsResult
   * @access public
   */
  public function __construct($ProductReview_ExistsResult)
  {
    $this->ProductReview_ExistsResult = $ProductReview_ExistsResult;
  }

}

}
