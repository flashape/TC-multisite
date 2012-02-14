<?php

if (!class_exists("CartVariant_Save", false)) 
{
class CartVariant_Save
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
