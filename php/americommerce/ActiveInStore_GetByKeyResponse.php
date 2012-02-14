<?php

if (!class_exists("ActiveInStore_GetByKeyResponse", false)) 
{
class ActiveInStore_GetByKeyResponse
{

  /**
   * 
   * @var ActiveInStoreTrans $ActiveInStore_GetByKeyResult
   * @access public
   */
  public $ActiveInStore_GetByKeyResult;

  /**
   * 
   * @param ActiveInStoreTrans $ActiveInStore_GetByKeyResult
   * @access public
   */
  public function __construct($ActiveInStore_GetByKeyResult)
  {
    $this->ActiveInStore_GetByKeyResult = $ActiveInStore_GetByKeyResult;
  }

}

}
