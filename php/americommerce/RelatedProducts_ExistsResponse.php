<?php

if (!class_exists("RelatedProducts_ExistsResponse", false)) 
{
class RelatedProducts_ExistsResponse
{

  /**
   * 
   * @var boolean $RelatedProducts_ExistsResult
   * @access public
   */
  public $RelatedProducts_ExistsResult;

  /**
   * 
   * @param boolean $RelatedProducts_ExistsResult
   * @access public
   */
  public function __construct($RelatedProducts_ExistsResult)
  {
    $this->RelatedProducts_ExistsResult = $RelatedProducts_ExistsResult;
  }

}

}
