<?php

if (!class_exists("GetSingleSignonKeyResponse", false)) 
{
class GetSingleSignonKeyResponse
{

  /**
   * 
   * @var string $GetSingleSignonKeyResult
   * @access public
   */
  public $GetSingleSignonKeyResult;

  /**
   * 
   * @param string $GetSingleSignonKeyResult
   * @access public
   */
  public function __construct($GetSingleSignonKeyResult)
  {
    $this->GetSingleSignonKeyResult = $GetSingleSignonKeyResult;
  }

}

}
