<?php

if (!class_exists("Cart_FillCartChildCollection", false)) 
{
class Cart_FillCartChildCollection
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
