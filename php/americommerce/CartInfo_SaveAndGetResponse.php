<?php

if (!class_exists("CartInfo_SaveAndGetResponse", false)) 
{
class CartInfo_SaveAndGetResponse
{

  /**
   * 
   * @var CartInfoTrans $CartInfo_SaveAndGetResult
   * @access public
   */
  public $CartInfo_SaveAndGetResult;

  /**
   * 
   * @param CartInfoTrans $CartInfo_SaveAndGetResult
   * @access public
   */
  public function __construct($CartInfo_SaveAndGetResult)
  {
    $this->CartInfo_SaveAndGetResult = $CartInfo_SaveAndGetResult;
  }

}

}
