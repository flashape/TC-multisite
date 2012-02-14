<?php

if (!class_exists("ActiveInStore_DeleteResponse", false)) 
{
class ActiveInStore_DeleteResponse
{

  /**
   * 
   * @var boolean $ActiveInStore_DeleteResult
   * @access public
   */
  public $ActiveInStore_DeleteResult;

  /**
   * 
   * @param boolean $ActiveInStore_DeleteResult
   * @access public
   */
  public function __construct($ActiveInStore_DeleteResult)
  {
    $this->ActiveInStore_DeleteResult = $ActiveInStore_DeleteResult;
  }

}

}
