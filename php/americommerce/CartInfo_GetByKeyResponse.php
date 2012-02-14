<?php

if (!class_exists("CartInfo_GetByKeyResponse", false)) 
{
class CartInfo_GetByKeyResponse
{

  /**
   * 
   * @var CartInfoTrans $CartInfo_GetByKeyResult
   * @access public
   */
  public $CartInfo_GetByKeyResult;

  /**
   * 
   * @param CartInfoTrans $CartInfo_GetByKeyResult
   * @access public
   */
  public function __construct($CartInfo_GetByKeyResult)
  {
    $this->CartInfo_GetByKeyResult = $CartInfo_GetByKeyResult;
  }

}

}
