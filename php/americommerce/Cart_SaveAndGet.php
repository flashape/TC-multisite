<?php

if (!class_exists("Cart_SaveAndGet", false)) 
{
class Cart_SaveAndGet
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
