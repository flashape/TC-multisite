<?php

if (!class_exists("CustomerType_CloneResponse", false)) 
{
class CustomerType_CloneResponse
{

  /**
   * 
   * @var CustomerTypeTrans $CustomerType_CloneResult
   * @access public
   */
  public $CustomerType_CloneResult;

  /**
   * 
   * @param CustomerTypeTrans $CustomerType_CloneResult
   * @access public
   */
  public function __construct($CustomerType_CloneResult)
  {
    $this->CustomerType_CloneResult = $CustomerType_CloneResult;
  }

}

}
