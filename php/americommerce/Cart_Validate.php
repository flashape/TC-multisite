<?php

if (!class_exists("Cart_Validate", false)) 
{
class Cart_Validate
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
