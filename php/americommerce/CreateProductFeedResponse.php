<?php

if (!class_exists("CreateProductFeedResponse", false)) 
{
class CreateProductFeedResponse
{

  /**
   * 
   * @var ProductFeedInfo $CreateProductFeedResult
   * @access public
   */
  public $CreateProductFeedResult;

  /**
   * 
   * @param ProductFeedInfo $CreateProductFeedResult
   * @access public
   */
  public function __construct($CreateProductFeedResult)
  {
    $this->CreateProductFeedResult = $CreateProductFeedResult;
  }

}

}
