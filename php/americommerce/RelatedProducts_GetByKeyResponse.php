<?php

if (!class_exists("RelatedProducts_GetByKeyResponse", false)) 
{
class RelatedProducts_GetByKeyResponse
{

  /**
   * 
   * @var RelatedProductsTrans $RelatedProducts_GetByKeyResult
   * @access public
   */
  public $RelatedProducts_GetByKeyResult;

  /**
   * 
   * @param RelatedProductsTrans $RelatedProducts_GetByKeyResult
   * @access public
   */
  public function __construct($RelatedProducts_GetByKeyResult)
  {
    $this->RelatedProducts_GetByKeyResult = $RelatedProducts_GetByKeyResult;
  }

}

}
