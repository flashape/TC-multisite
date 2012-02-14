<?php

if (!class_exists("RelatedProducts_SaveResponse", false)) 
{
class RelatedProducts_SaveResponse
{

  /**
   * 
   * @var boolean $RelatedProducts_SaveResult
   * @access public
   */
  public $RelatedProducts_SaveResult;

  /**
   * 
   * @param boolean $RelatedProducts_SaveResult
   * @access public
   */
  public function __construct($RelatedProducts_SaveResult)
  {
    $this->RelatedProducts_SaveResult = $RelatedProducts_SaveResult;
  }

}

}
