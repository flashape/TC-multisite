<?php

if (!class_exists("Address_GetByKeyResponse", false)) 
{
class Address_GetByKeyResponse
{

  /**
   * 
   * @var AddressTrans $Address_GetByKeyResult
   * @access public
   */
  public $Address_GetByKeyResult;

  /**
   * 
   * @param AddressTrans $Address_GetByKeyResult
   * @access public
   */
  public function __construct($Address_GetByKeyResult)
  {
    $this->Address_GetByKeyResult = $Address_GetByKeyResult;
  }

}

}
