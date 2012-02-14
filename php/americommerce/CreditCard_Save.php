<?php

if (!class_exists("CreditCard_Save", false)) 
{
class CreditCard_Save
{

  /**
   * 
   * @var CreditCardTrans $poCreditCardTrans
   * @access public
   */
  public $poCreditCardTrans;

  /**
   * 
   * @param CreditCardTrans $poCreditCardTrans
   * @access public
   */
  public function __construct($poCreditCardTrans)
  {
    $this->poCreditCardTrans = $poCreditCardTrans;
  }

}

}
