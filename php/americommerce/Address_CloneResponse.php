<?php

if (!class_exists("Address_CloneResponse", false)) 
{
class Address_CloneResponse
{

  /**
   * 
   * @var AddressTrans $Address_CloneResult
   * @access public
   */
  public $Address_CloneResult;

  /**
   * 
   * @param AddressTrans $Address_CloneResult
   * @access public
   */
  public function __construct($Address_CloneResult)
  {
    $this->Address_CloneResult = $Address_CloneResult;
  }

}

}
