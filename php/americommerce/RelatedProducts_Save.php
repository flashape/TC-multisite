<?php

if (!class_exists("RelatedProducts_Save", false)) 
{
class RelatedProducts_Save
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
