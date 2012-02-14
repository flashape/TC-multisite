<?php

if (!class_exists("Address_SaveAndGetResponse", false)) 
{
class Address_SaveAndGetResponse
{

  /**
   * 
   * @var AddressTrans $Address_SaveAndGetResult
   * @access public
   */
  public $Address_SaveAndGetResult;

  /**
   * 
   * @param AddressTrans $Address_SaveAndGetResult
   * @access public
   */
  public function __construct($Address_SaveAndGetResult)
  {
    $this->Address_SaveAndGetResult = $Address_SaveAndGetResult;
  }

}

}
