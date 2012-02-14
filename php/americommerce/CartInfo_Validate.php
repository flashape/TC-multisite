<?php

if (!class_exists("CartInfo_Validate", false)) 
{
class CartInfo_Validate
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
