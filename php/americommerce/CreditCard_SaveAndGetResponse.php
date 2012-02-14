<?php

if (!class_exists("CreditCard_SaveAndGetResponse", false)) 
{
class CreditCard_SaveAndGetResponse
{

  /**
   * 
   * @var CreditCardTrans $CreditCard_SaveAndGetResult
   * @access public
   */
  public $CreditCard_SaveAndGetResult;

  /**
   * 
   * @param CreditCardTrans $CreditCard_SaveAndGetResult
   * @access public
   */
  public function __construct($CreditCard_SaveAndGetResult)
  {
    $this->CreditCard_SaveAndGetResult = $CreditCard_SaveAndGetResult;
  }

}

}
