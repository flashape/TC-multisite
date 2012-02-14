<?php

if (!class_exists("CreditCard_ExistsResponse", false)) 
{
class CreditCard_ExistsResponse
{

  /**
   * 
   * @var boolean $CreditCard_ExistsResult
   * @access public
   */
  public $CreditCard_ExistsResult;

  /**
   * 
   * @param boolean $CreditCard_ExistsResult
   * @access public
   */
  public function __construct($CreditCard_ExistsResult)
  {
    $this->CreditCard_ExistsResult = $CreditCard_ExistsResult;
  }

}

}
