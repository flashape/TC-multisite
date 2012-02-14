<?php

if (!class_exists("ProductReview_DeleteResponse", false)) 
{
class ProductReview_DeleteResponse
{

  /**
   * 
   * @var boolean $ProductReview_DeleteResult
   * @access public
   */
  public $ProductReview_DeleteResult;

  /**
   * 
   * @param boolean $ProductReview_DeleteResult
   * @access public
   */
  public function __construct($ProductReview_DeleteResult)
  {
    $this->ProductReview_DeleteResult = $ProductReview_DeleteResult;
  }

}

}
