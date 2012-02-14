<?php

if (!class_exists("Product_FillProductChildCollection", false)) 
{
class Product_FillProductChildCollection
{

  /**
   * 
   * @var ProductTrans $poProductTrans
   * @access public
   */
  public $poProductTrans;

  /**
   * 
   * @param ProductTrans $poProductTrans
   * @access public
   */
  public function __construct($poProductTrans)
  {
    $this->poProductTrans = $poProductTrans;
  }

}

}
