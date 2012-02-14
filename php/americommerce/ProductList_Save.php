<?php

if (!class_exists("ProductList_Save", false)) 
{
class ProductList_Save
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
