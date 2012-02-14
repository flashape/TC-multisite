<?php

if (!class_exists("RelatedProducts_SaveAndGet", false)) 
{
class RelatedProducts_SaveAndGet
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
