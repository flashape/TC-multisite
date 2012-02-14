<?php

if (!class_exists("RelatedProducts_Validate", false)) 
{
class RelatedProducts_Validate
{

  /**
   * 
   * @var RelatedProductsTrans $poRelatedProductsTrans
   * @access public
   */
  public $poRelatedProductsTrans;

  /**
   * 
   * @param RelatedProductsTrans $poRelatedProductsTrans
   * @access public
   */
  public function __construct($poRelatedProductsTrans)
  {
    $this->poRelatedProductsTrans = $poRelatedProductsTrans;
  }

}

}
