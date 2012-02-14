<?php

if (!class_exists("ProductListItems_SaveAndGet", false)) 
{
class ProductListItems_SaveAndGet
{

  /**
   * 
   * @var ProductListItemsTrans $poProductListItemsTrans
   * @access public
   */
  public $poProductListItemsTrans;

  /**
   * 
   * @param ProductListItemsTrans $poProductListItemsTrans
   * @access public
   */
  public function __construct($poProductListItemsTrans)
  {
    $this->poProductListItemsTrans = $poProductListItemsTrans;
  }

}

}
