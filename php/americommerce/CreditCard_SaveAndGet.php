<?php

if (!class_exists("CreditCard_SaveAndGet", false)) 
{
class CreditCard_SaveAndGet
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
