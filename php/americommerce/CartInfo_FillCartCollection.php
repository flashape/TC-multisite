<?php

if (!class_exists("CartInfo_FillCartCollection", false)) 
{
class CartInfo_FillCartCollection
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
