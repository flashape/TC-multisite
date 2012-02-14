<?php

if (!class_exists("CartVariant_GetByKeyResponse", false)) 
{
class CartVariant_GetByKeyResponse
{

  /**
   * 
   * @var CartVariantTrans $CartVariant_GetByKeyResult
   * @access public
   */
  public $CartVariant_GetByKeyResult;

  /**
   * 
   * @param CartVariantTrans $CartVariant_GetByKeyResult
   * @access public
   */
  public function __construct($CartVariant_GetByKeyResult)
  {
    $this->CartVariant_GetByKeyResult = $CartVariant_GetByKeyResult;
  }

}

}
