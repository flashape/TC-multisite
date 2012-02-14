<?php

if (!class_exists("ProductList_FillProductListItemsCollection", false)) 
{
class ProductList_FillProductListItemsCollection
{

  /**
   * 
   * @var ProductListTrans $poProductListTrans
   * @access public
   */
  public $poProductListTrans;

  /**
   * 
   * @param ProductListTrans $poProductListTrans
   * @access public
   */
  public function __construct($poProductListTrans)
  {
    $this->poProductListTrans = $poProductListTrans;
  }

}

}
