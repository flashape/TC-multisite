<?php

if (!class_exists("CreditCard_SaveResponse", false)) 
{
class CreditCard_SaveResponse
{

  /**
   * 
   * @var boolean $CreditCard_SaveResult
   * @access public
   */
  public $CreditCard_SaveResult;

  /**
   * 
   * @param boolean $CreditCard_SaveResult
   * @access public
   */
  public function __construct($CreditCard_SaveResult)
  {
    $this->CreditCard_SaveResult = $CreditCard_SaveResult;
  }

}

}
