<?php

if (!class_exists("CartVariant_SaveAndGetResponse", false)) 
{
class CartVariant_SaveAndGetResponse
{

  /**
   * 
   * @var CartVariantTrans $CartVariant_SaveAndGetResult
   * @access public
   */
  public $CartVariant_SaveAndGetResult;

  /**
   * 
   * @param CartVariantTrans $CartVariant_SaveAndGetResult
   * @access public
   */
  public function __construct($CartVariant_SaveAndGetResult)
  {
    $this->CartVariant_SaveAndGetResult = $CartVariant_SaveAndGetResult;
  }

}

}
