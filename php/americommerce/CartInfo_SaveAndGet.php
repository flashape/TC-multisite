<?php

if (!class_exists("CartInfo_SaveAndGet", false)) 
{
class CartInfo_SaveAndGet
{

  /**
   * 
   * @var CartInfoTrans $poCartInfoTrans
   * @access public
   */
  public $poCartInfoTrans;

  /**
   * 
   * @param CartInfoTrans $poCartInfoTrans
   * @access public
   */
  public function __construct($poCartInfoTrans)
  {
    $this->poCartInfoTrans = $poCartInfoTrans;
  }

}

}
