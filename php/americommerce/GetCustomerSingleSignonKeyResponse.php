<?php

if (!class_exists("GetCustomerSingleSignonKeyResponse", false)) 
{
class GetCustomerSingleSignonKeyResponse
{

  /**
   * 
   * @var string $GetCustomerSingleSignonKeyResult
   * @access public
   */
  public $GetCustomerSingleSignonKeyResult;

  /**
   * 
   * @param string $GetCustomerSingleSignonKeyResult
   * @access public
   */
  public function __construct($GetCustomerSingleSignonKeyResult)
  {
    $this->GetCustomerSingleSignonKeyResult = $GetCustomerSingleSignonKeyResult;
  }

}

}
