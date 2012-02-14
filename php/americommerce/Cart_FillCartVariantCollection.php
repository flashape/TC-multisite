<?php

if (!class_exists("Cart_FillCartVariantCollection", false)) 
{
class Cart_FillCartVariantCollection
{

  /**
   * 
   * @var CartTrans $poCartTrans
   * @access public
   */
  public $poCartTrans;

  /**
   * 
   * @param CartTrans $poCartTrans
   * @access public
   */
  public function __construct($poCartTrans)
  {
    $this->poCartTrans = $poCartTrans;
  }

}

}
