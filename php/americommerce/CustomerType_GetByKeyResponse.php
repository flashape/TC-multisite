<?php

if (!class_exists("CustomerType_GetByKeyResponse", false)) 
{
class CustomerType_GetByKeyResponse
{

  /**
   * 
   * @var CustomerTypeTrans $CustomerType_GetByKeyResult
   * @access public
   */
  public $CustomerType_GetByKeyResult;

  /**
   * 
   * @param CustomerTypeTrans $CustomerType_GetByKeyResult
   * @access public
   */
  public function __construct($CustomerType_GetByKeyResult)
  {
    $this->CustomerType_GetByKeyResult = $CustomerType_GetByKeyResult;
  }

}

}
