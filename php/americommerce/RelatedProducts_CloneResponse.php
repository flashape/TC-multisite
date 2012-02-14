<?php

if (!class_exists("RelatedProducts_CloneResponse", false)) 
{
class RelatedProducts_CloneResponse
{

  /**
   * 
   * @var RelatedProductsTrans $RelatedProducts_CloneResult
   * @access public
   */
  public $RelatedProducts_CloneResult;

  /**
   * 
   * @param RelatedProductsTrans $RelatedProducts_CloneResult
   * @access public
   */
  public function __construct($RelatedProducts_CloneResult)
  {
    $this->RelatedProducts_CloneResult = $RelatedProducts_CloneResult;
  }

}

}
