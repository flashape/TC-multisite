<?php

if (!class_exists("CreditCard_DeleteResponse", false)) 
{
class CreditCard_DeleteResponse
{

  /**
   * 
   * @var boolean $CreditCard_DeleteResult
   * @access public
   */
  public $CreditCard_DeleteResult;

  /**
   * 
   * @param boolean $CreditCard_DeleteResult
   * @access public
   */
  public function __construct($CreditCard_DeleteResult)
  {
    $this->CreditCard_DeleteResult = $CreditCard_DeleteResult;
  }

}

}
