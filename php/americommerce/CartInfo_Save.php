<?php

if (!class_exists("CartInfo_Save", false)) 
{
class CartInfo_Save
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
