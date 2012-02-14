<?php

if (!class_exists("CartVariant_CloneResponse", false)) 
{
class CartVariant_CloneResponse
{

  /**
   * 
   * @var CartVariantTrans $CartVariant_CloneResult
   * @access public
   */
  public $CartVariant_CloneResult;

  /**
   * 
   * @param CartVariantTrans $CartVariant_CloneResult
   * @access public
   */
  public function __construct($CartVariant_CloneResult)
  {
    $this->CartVariant_CloneResult = $CartVariant_CloneResult;
  }

}

}
