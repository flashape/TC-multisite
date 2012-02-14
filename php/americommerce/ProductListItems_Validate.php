<?php

if (!class_exists("ProductListItems_Validate", false)) 
{
class ProductListItems_Validate
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
