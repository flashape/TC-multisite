<?php

if (!class_exists("RelatedProducts_SaveAndGetResponse", false)) 
{
class RelatedProducts_SaveAndGetResponse
{

  /**
   * 
   * @var RelatedProductsTrans $RelatedProducts_SaveAndGetResult
   * @access public
   */
  public $RelatedProducts_SaveAndGetResult;

  /**
   * 
   * @param RelatedProductsTrans $RelatedProducts_SaveAndGetResult
   * @access public
   */
  public function __construct($RelatedProducts_SaveAndGetResult)
  {
    $this->RelatedProducts_SaveAndGetResult = $RelatedProducts_SaveAndGetResult;
  }

}

}
