<?php

if (!class_exists("CustomerType_GetByNameResponse", false)) 
{
class CustomerType_GetByNameResponse
{

  /**
   * 
   * @var CustomerTypeTrans $CustomerType_GetByNameResult
   * @access public
   */
  public $CustomerType_GetByNameResult;

  /**
   * 
   * @param CustomerTypeTrans $CustomerType_GetByNameResult
   * @access public
   */
  public function __construct($CustomerType_GetByNameResult)
  {
    $this->CustomerType_GetByNameResult = $CustomerType_GetByNameResult;
  }

}

}
