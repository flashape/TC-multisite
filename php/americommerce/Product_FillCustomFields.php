<?php

if (!class_exists("Product_FillCustomFields", false)) 
{
class Product_FillCustomFields
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
