<?php

if (!class_exists("ProductList_Validate", false)) 
{
class ProductList_Validate
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
