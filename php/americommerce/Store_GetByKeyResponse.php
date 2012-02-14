<?php

if (!class_exists("Store_GetByKeyResponse", false)) 
{
class Store_GetByKeyResponse
{

  /**
   * 
   * @var StoreTrans $Store_GetByKeyResult
   * @access public
   */
  public $Store_GetByKeyResult;

  /**
   * 
   * @param StoreTrans $Store_GetByKeyResult
   * @access public
   */
  public function __construct($Store_GetByKeyResult)
  {
    $this->Store_GetByKeyResult = $Store_GetByKeyResult;
  }

}

}
