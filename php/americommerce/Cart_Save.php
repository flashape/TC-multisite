<?php

if (!class_exists("Cart_Save", false)) 
{
class Cart_Save
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
