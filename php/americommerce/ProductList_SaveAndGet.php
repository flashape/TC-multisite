<?php

if (!class_exists("ProductList_SaveAndGet", false)) 
{
class ProductList_SaveAndGet
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
