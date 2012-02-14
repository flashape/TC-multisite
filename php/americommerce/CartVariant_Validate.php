<?php

if (!class_exists("CartVariant_Validate", false)) 
{
class CartVariant_Validate
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
