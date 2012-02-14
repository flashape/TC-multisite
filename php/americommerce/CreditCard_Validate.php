<?php

if (!class_exists("CreditCard_Validate", false)) 
{
class CreditCard_Validate
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
