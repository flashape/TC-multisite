<?php

if (!class_exists("CreditCard_CloneResponse", false)) 
{
class CreditCard_CloneResponse
{

  /**
   * 
   * @var CreditCardTrans $CreditCard_CloneResult
   * @access public
   */
  public $CreditCard_CloneResult;

  /**
   * 
   * @param CreditCardTrans $CreditCard_CloneResult
   * @access public
   */
  public function __construct($CreditCard_CloneResult)
  {
    $this->CreditCard_CloneResult = $CreditCard_CloneResult;
  }

}

}
