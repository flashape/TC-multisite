<?php

if (!class_exists("ActiveInStore_CloneResponse", false)) 
{
class ActiveInStore_CloneResponse
{

  /**
   * 
   * @var ActiveInStoreTrans $ActiveInStore_CloneResult
   * @access public
   */
  public $ActiveInStore_CloneResult;

  /**
   * 
   * @param ActiveInStoreTrans $ActiveInStore_CloneResult
   * @access public
   */
  public function __construct($ActiveInStore_CloneResult)
  {
    $this->ActiveInStore_CloneResult = $ActiveInStore_CloneResult;
  }

}

}
