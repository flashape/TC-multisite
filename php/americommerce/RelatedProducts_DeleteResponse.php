<?php

if (!class_exists("RelatedProducts_DeleteResponse", false)) 
{
class RelatedProducts_DeleteResponse
{

  /**
   * 
   * @var boolean $RelatedProducts_DeleteResult
   * @access public
   */
  public $RelatedProducts_DeleteResult;

  /**
   * 
   * @param boolean $RelatedProducts_DeleteResult
   * @access public
   */
  public function __construct($RelatedProducts_DeleteResult)
  {
    $this->RelatedProducts_DeleteResult = $RelatedProducts_DeleteResult;
  }

}

}
