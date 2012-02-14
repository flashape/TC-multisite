<?php

if (!class_exists("ProductReviews_GetByItemIDResponse", false)) 
{
class ProductReviews_GetByItemIDResponse
{

  /**
   * 
   * @var array $ProductReviews_GetByItemIDResult
   * @access public
   */
  public $ProductReviews_GetByItemIDResult;

  /**
   * 
   * @param array $ProductReviews_GetByItemIDResult
   * @access public
   */
  public function __construct($ProductReviews_GetByItemIDResult)
  {
    $this->ProductReviews_GetByItemIDResult = $ProductReviews_GetByItemIDResult;
  }

}

}
