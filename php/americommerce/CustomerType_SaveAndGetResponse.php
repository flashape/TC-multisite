<?php

if (!class_exists("CustomerType_SaveAndGetResponse", false)) 
{
class CustomerType_SaveAndGetResponse
{

  /**
   * 
   * @var CustomerTypeTrans $CustomerType_SaveAndGetResult
   * @access public
   */
  public $CustomerType_SaveAndGetResult;

  /**
   * 
   * @param CustomerTypeTrans $CustomerType_SaveAndGetResult
   * @access public
   */
  public function __construct($CustomerType_SaveAndGetResult)
  {
    $this->CustomerType_SaveAndGetResult = $CustomerType_SaveAndGetResult;
  }

}

}
