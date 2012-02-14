<?php

if (!class_exists("AuthenticateResponse", false)) 
{
class AuthenticateResponse
{

  /**
   * 
   * @var boolean $AuthenticateResult
   * @access public
   */
  public $AuthenticateResult;

  /**
   * 
   * @param boolean $AuthenticateResult
   * @access public
   */
  public function __construct($AuthenticateResult)
  {
    $this->AuthenticateResult = $AuthenticateResult;
  }

}

}
