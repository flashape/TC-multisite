<?php

if (!class_exists("CartInfo_FillCartCollectionResponse", false)) 
{
class CartInfo_FillCartCollectionResponse
{

  /**
   * 
   * @var CartInfoTrans $CartInfo_FillCartCollectionResult
   * @access public
   */
  public $CartInfo_FillCartCollectionResult;

  /**
   * 
   * @param CartInfoTrans $CartInfo_FillCartCollectionResult
   * @access public
   */
  public function __construct($CartInfo_FillCartCollectionResult)
  {
    $this->CartInfo_FillCartCollectionResult = $CartInfo_FillCartCollectionResult;
  }

}

}
