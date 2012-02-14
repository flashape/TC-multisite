<?php

if (!class_exists("ProductReview_SaveResponse", false)) 
{
class ProductReview_SaveResponse
{

  /**
   * 
   * @var boolean $ProductReview_SaveResult
   * @access public
   */
  public $ProductReview_SaveResult;

  /**
   * 
   * @param boolean $ProductReview_SaveResult
   * @access public
   */
  public function __construct($ProductReview_SaveResult)
  {
    $this->ProductReview_SaveResult = $ProductReview_SaveResult;
  }

}

}
