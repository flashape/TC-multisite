<?php

if (!class_exists("CartVariant_SaveAndGet", false)) 
{
class CartVariant_SaveAndGet
{

  /**
   * 
   * @var CartVariantTrans $poCartVariantTrans
   * @access public
   */
  public $poCartVariantTrans;

  /**
   * 
   * @param CartVariantTrans $poCartVariantTrans
   * @access public
   */
  public function __construct($poCartVariantTrans)
  {
    $this->poCartVariantTrans = $poCartVariantTrans;
  }

}

}
