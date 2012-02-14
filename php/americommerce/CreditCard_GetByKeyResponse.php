<?php

if (!class_exists("CreditCard_GetByKeyResponse", false)) 
{
class CreditCard_GetByKeyResponse
{

  /**
   * 
   * @var CreditCardTrans $CreditCard_GetByKeyResult
   * @access public
   */
  public $CreditCard_GetByKeyResult;

  /**
   * 
   * @param CreditCardTrans $CreditCard_GetByKeyResult
   * @access public
   */
  public function __construct($CreditCard_GetByKeyResult)
  {
    $this->CreditCard_GetByKeyResult = $CreditCard_GetByKeyResult;
  }

}

}
