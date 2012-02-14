<?php

if (!class_exists("CartInfo_CloneResponse", false)) 
{
class CartInfo_CloneResponse
{

  /**
   * 
   * @var CartInfoTrans $CartInfo_CloneResult
   * @access public
   */
  public $CartInfo_CloneResult;

  /**
   * 
   * @param CartInfoTrans $CartInfo_CloneResult
   * @access public
   */
  public function __construct($CartInfo_CloneResult)
  {
    $this->CartInfo_CloneResult = $CartInfo_CloneResult;
  }

}

}
