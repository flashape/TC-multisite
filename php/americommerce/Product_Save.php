<?php

if (!class_exists("Product_Save", false)) 
{
class Product_Save
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
