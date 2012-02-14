<?php

if (!class_exists("ProductListItems_Save", false)) 
{
class ProductListItems_Save
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
